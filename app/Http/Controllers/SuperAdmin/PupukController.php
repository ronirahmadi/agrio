<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Pupuk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PupukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    $this->middleware(['auth', 'role:superadmin']);
    }
    
    /**
     * Menampilkan Data pupuk
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $pupuk = Pupuk::orderBy('tbl_pupuk.nama_pupuk', 'Asc')
        ->get();        

        return view('superadmin.pupuk.list', compact('pupuk'));
    }

    /**
     * Menampilkan halaman tambah data pupuk
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('superadmin.pupuk.create');
    }
    
    /**
     * Proses pengiriman data pupuk
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:512'
        ]);

        $kodeunik_pupuk = Str::random(3);

        // Pengecekan keunikan kode unik pupuk
        while (Pupuk::where('kodeunik_pupuk', $kodeunik_pupuk)->exists()) {
            $kodeunik_pupuk = Str::random(3);
        }

        $pupuk = new Pupuk();
        
        $pupuk->kodeunik_pupuk = $kodeunik_pupuk;
        $nama = $request->input('Nama');
    
        // Cek apakah nama sudah ada dalam database
        $namaTerpakai = Pupuk::where('nama_pupuk', $nama)->exists();

        // Jika nama sudah ada, tambahkan angka setelah nama
        if ($namaTerpakai) {
            $angka = 1;
            do {
                $namaDenganAngka = $nama . ' ' . $angka;
                $namaTerpakai = Pupuk::where('nama_pupuk', $namaDenganAngka)->exists();
                $angka++;
            } while ($namaTerpakai);

            $pupuk->nama_pupuk = $namaDenganAngka;
        } else {
            $pupuk->nama_pupuk = $nama;
        }
        
        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/pupuk/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
    
            #foto pupuk
            $pupuk->foto = $fotoName;
            $pupuk->foto_path = $file;
        }


        if (1) {

            $request->Foto->move(public_path('uploads/pupuk/'), $fotoName);

            $pupuk->save();

            Alert::success('Berhasil', 'Pupuk Telah Ditambahkan.');
        } else {
            Alert::error('Gagal', 'Periksa kembali data yang Anda masukkan.');
        }        

        return redirect()->route('superadmin.pupuk.create');
    }

    /**
     * Menampilkan halaman data edit pupuk.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($kodeunik_pupuk)
    {    
        $detailpupuk = Pupuk::where('kodeunik_pupuk', '=', $kodeunik_pupuk)
        ->get();


        if ($detailpupuk->isNotEmpty()) {
            return view('superadmin.pupuk.edit', compact('detailpupuk'));
        } else {
            Alert::error('Pupuk tidak ditemukan', 'Periksa kembali data pupuk yang Anda cari.');
            return redirect()->route('superadmin.pupuk');
        }
    }

    /**
     * Proses Update pupuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeunik_pupuk)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $pupuk = Pupuk::where('tbl_pupuk.kodeunik_pupuk', '=', $kodeunik_pupuk)->first();

        $nama = $request->get('Nama');

        // Check if the new title is different from the existing one
        if ($pupuk->nama_pupuk !== $nama) {
            // Check if the new title already exists in the database
            $namaTerpakai = Pupuk::where('nama_pupuk', $nama)->exists();

            // If the new title already exists, append a number to it
            if ($namaTerpakai) {
                $angka = 1;
                do {
                    $namaDenganAngka = $nama . ' ' . $angka;
                    $namaTerpakai = Pupuk::where('nama_pupuk', $namaDenganAngka)->exists();
                    $angka++;
                } while ($namaTerpakai);

                $pupuk->nama_pupuk = $namaDenganAngka;
            } else {
                $pupuk->nama_pupuk = $nama;
            }
        }

        $pupuk->update();

        if (1) {

            Alert::success('Pupuk Diperbarui', 'Data pupuk berhasil diperbarui.');

            return redirect()->route('superadmin.pupuk.edit', $kodeunik_pupuk);
        } else {
            Alert::error('Gagal, Periksa Kembali data yang Anda kirim');

            return back();
        }
    }

    /**
     * Menghapus foto pupuk
     *
     * @return \Illuminate\Http\Response
     */
    public function hapusfotoPupuk($kodeunik_pupuk)
    {        
        $detailpupuk = Pupuk::where('kodeunik_pupuk', $kodeunik_pupuk)->first();
        
        if (file_exists('uploads/pupuk/' . $detailpupuk->foto)) {
            unlink('uploads/pupuk/' . $detailpupuk->foto);

            Pupuk::where('kodeunik_pupuk', $kodeunik_pupuk)->update([
                #code update
                'foto' => 'Tidak Ada',
                'foto_path' => 'Tidak Ada'
            ]);

            Alert::success('foto pupuk Dihapus', 'foto pupuk telah dihapus.');
            return redirect()->route('superadmin.pupuk.edit', $kodeunik_pupuk);
        } else {
            Alert::error('Gagal menghapus data', 'File tidak ditemukan atau telah dihapus sebelumnya.');
            return back();
        }
    }

    /**
     * Proses Update foto pupuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upfotoPupuk(Request $request, $kodeunik_pupuk)
    {
        $request->validate([
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:1024'
        ]);

        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/pupuk/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
        }

        Pupuk::where('tbl_pupuk.kodeunik_pupuk', '=', $kodeunik_pupuk)->update([
            #code foto
            'foto' => $fotoName,
            'foto_path' => $file
        ]);

        if (1) {
            $request->Foto->move(public_path('uploads/pupuk/'), $fotoName);

            Alert::success('Berhasil', 'foto pupuk berhasil diperbarui.');

            return redirect()->route('superadmin.pupuk.edit', $kodeunik_pupuk);
        } else {
            Alert::error('Gagal', 'Periksa kembali data foto yang diupload.');

            return back();
        }
    }

    /**
     * Menghapus pupuk
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($kodeunik_pupuk)
    {
        $cekfoto = Pupuk::where('foto', '=', 'Tidak Ada')->first();

        if ($cekfoto) {
            $delete = Pupuk::where('kodeunik_pupuk',$kodeunik_pupuk);
            $delete->delete();
        } else {
            $delete = Pupuk::where('kodeunik_pupuk',$kodeunik_pupuk)->first();
            unlink('uploads/pupuk/'.$delete->foto);
            $delete->delete();
        }

        if ($delete = 1) {
            Alert::success('Berhasil Dihapus', 'Data pupuk telah dihapus.');
            return redirect()->route('superadmin.pupuk');
        } else {
            Alert::error('Gagal menghapus data', 'Periksa kembali data yang anda hapus');
            return back();
        }
    }
}

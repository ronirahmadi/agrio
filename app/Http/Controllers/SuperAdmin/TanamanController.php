<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class TanamanController extends Controller
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
     * Menampilkan Data tanaman
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $tanaman = Tanaman::orderBy('tbl_tanaman.nama_tanaman', 'Asc')
        ->get();        

        return view('superadmin.tanaman.list', compact('tanaman'));
    }

    /**
     * Menampilkan halaman tambah data tanaman
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('superadmin.tanaman.create');
    }
    
    /**
     * Proses pengiriman data tanaman
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:512'
        ]);

        $kodeunik_tanaman = Str::random(3);

        // Pengecekan keunikan kode unik tanaman
        while (Tanaman::where('kodeunik_tanaman', $kodeunik_tanaman)->exists()) {
            $kodeunik_tanaman = Str::random(3);
        }

        $tanaman = new Tanaman();
        
        $tanaman->kodeunik_tanaman = $kodeunik_tanaman;
        $nama = $request->input('Nama');
    
        // Cek apakah nama sudah ada dalam database
        $namaTerpakai = Tanaman::where('nama_tanaman', $nama)->exists();

        // Jika nama sudah ada, tambahkan angka setelah nama
        if ($namaTerpakai) {
            $angka = 1;
            do {
                $namaDenganAngka = $nama . ' ' . $angka;
                $namaTerpakai = Tanaman::where('nama_tanaman', $namaDenganAngka)->exists();
                $angka++;
            } while ($namaTerpakai);

            $tanaman->nama_tanaman = $namaDenganAngka;
        } else {
            $tanaman->nama_tanaman = $nama;
        }
        
        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/tanaman/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
    
            #foto tanaman
            $tanaman->foto = $fotoName;
            $tanaman->foto_path = $file;
        }


        if (1) {

            $request->Foto->move(public_path('uploads/tanaman/'), $fotoName);

            $tanaman->save();

            Alert::success('Berhasil', 'tanaman Telah Ditambahkan.');
        } else {
            Alert::error('Gagal', 'Periksa kembali data yang Anda masukkan.');
        }        

        return redirect()->route('superadmin.tanaman.create');
    }

    /**
     * Menampilkan halaman data edit tanaman.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($kodeunik_tanaman)
    {    
        $detailtanaman = Tanaman::where('kodeunik_tanaman', '=', $kodeunik_tanaman)
        ->get();


        if ($detailtanaman->isNotEmpty()) {
            return view('superadmin.tanaman.edit', compact('detailtanaman'));
        } else {
            Alert::error('tanaman tidak ditemukan', 'Periksa kembali data tanaman yang Anda cari.');
            return redirect()->route('superadmin.tanaman');
        }
    }

    /**
     * Proses Update tanaman.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeunik_tanaman)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $tanaman = Tanaman::where('tbl_tanaman.kodeunik_tanaman', '=', $kodeunik_tanaman)->first();

        $nama = $request->get('Nama');

        // Check if the new title is different from the existing one
        if ($tanaman->nama_tanaman !== $nama) {
            // Check if the new title already exists in the database
            $namaTerpakai = Tanaman::where('nama_tanaman', $nama)->exists();

            // If the new title already exists, append a number to it
            if ($namaTerpakai) {
                $angka = 1;
                do {
                    $namaDenganAngka = $nama . ' ' . $angka;
                    $namaTerpakai = Tanaman::where('nama_tanaman', $namaDenganAngka)->exists();
                    $angka++;
                } while ($namaTerpakai);

                $tanaman->nama_tanaman = $namaDenganAngka;
            } else {
                $tanaman->nama_tanaman = $nama;
            }
        }

        $tanaman->update();

        if (1) {

            Alert::success('tanaman Diperbarui', 'Data tanaman berhasil diperbarui.');

            return redirect()->route('superadmin.tanaman.edit', $kodeunik_tanaman);
        } else {
            Alert::error('Gagal, Periksa Kembali data yang Anda kirim');

            return back();
        }
    }

    /**
     * Menghapus foto tanaman
     *
     * @return \Illuminate\Http\Response
     */
    public function hapusfototanaman($kodeunik_tanaman)
    {        
        $detailtanaman = Tanaman::where('kodeunik_tanaman', $kodeunik_tanaman)->first();
        
        if (file_exists('uploads/tanaman/' . $detailtanaman->foto)) {
            unlink('uploads/tanaman/' . $detailtanaman->foto);

            Tanaman::where('kodeunik_tanaman', $kodeunik_tanaman)->update([
                #code update
                'foto' => 'Tidak Ada',
                'foto_path' => 'Tidak Ada'
            ]);

            Alert::success('foto tanaman Dihapus', 'foto tanaman telah dihapus.');
            return redirect()->route('superadmin.tanaman.edit', $kodeunik_tanaman);
        } else {
            Alert::error('Gagal menghapus data', 'File tidak ditemukan atau telah dihapus sebelumnya.');
            return back();
        }
    }

    /**
     * Proses Update foto tanaman.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upfototanaman(Request $request, $kodeunik_tanaman)
    {
        $request->validate([
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:1024'
        ]);

        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/tanaman/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
        }

        Tanaman::where('tbl_tanaman.kodeunik_tanaman', '=', $kodeunik_tanaman)->update([
            #code foto
            'foto' => $fotoName,
            'foto_path' => $file
        ]);

        if (1) {
            $request->Foto->move(public_path('uploads/tanaman/'), $fotoName);

            Alert::success('Berhasil', 'foto tanaman berhasil diperbarui.');

            return redirect()->route('superadmin.tanaman.edit', $kodeunik_tanaman);
        } else {
            Alert::error('Gagal', 'Periksa kembali data foto yang diupload.');

            return back();
        }
    }

    /**
     * Menghapus tanaman
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($kodeunik_tanaman)
    {
        $cekfoto = Tanaman::where('foto', '=', 'Tidak Ada')->first();

        if ($cekfoto) {
            $delete = Tanaman::where('kodeunik_tanaman',$kodeunik_tanaman);
            $delete->delete();
        } else {
            $delete = Tanaman::where('kodeunik_tanaman',$kodeunik_tanaman)->first();
            unlink('uploads/tanaman/'.$delete->foto);
            $delete->delete();
        }

        if ($delete = 1) {
            Alert::success('Berhasil Dihapus', 'Data tanaman telah dihapus.');
            return redirect()->route('superadmin.tanaman');
        } else {
            Alert::error('Gagal menghapus data', 'Periksa kembali data yang anda hapus');
            return back();
        }
    }
}

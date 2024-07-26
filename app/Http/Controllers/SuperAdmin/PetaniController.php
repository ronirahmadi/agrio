<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Petani;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PetaniController extends Controller
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
     * Menampilkan Data Petani
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $petani = Petani::orderBy('tbl_petani.nama_petani', 'Asc')
        ->get();        

        return view('superadmin.petani.list', compact('petani'));
    }

    /**
     * Menampilkan halaman tambah data petani
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('superadmin.petani.create');
    }
    
    /**
     * Proses pengiriman data petani
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:512'
        ]);

        $kodeunik_petani = Str::random(3);

        // Pengecekan keunikan kode unik petani
        while (Petani::where('kodeunik_petani', $kodeunik_petani)->exists()) {
            $kodeunik_petani = Str::random(3);
        }

        $petani = new petani();
        
        $petani->kodeunik_petani = $kodeunik_petani;
        $nama = $request->input('Nama');
    
        // Cek apakah nama sudah ada dalam database
        $namaTerpakai = petani::where('nama_petani', $nama)->exists();

        // Jika nama sudah ada, tambahkan angka setelah nama
        if ($namaTerpakai) {
            $angka = 1;
            do {
                $namaDenganAngka = $nama . ' ' . $angka;
                $namaTerpakai = petani::where('nama_petani', $namaDenganAngka)->exists();
                $angka++;
            } while ($namaTerpakai);

            $petani->nama_petani = $namaDenganAngka;
        } else {
            $petani->nama_petani = $nama;
        }
        
        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/petani/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
    
            #foto petani
            $petani->foto = $fotoName;
            $petani->foto_path = $file;
        }


        if (1) {

            $request->Foto->move(public_path('uploads/petani/'), $fotoName);

            $petani->save();

            Alert::success('Berhasil', 'Petani Telah Ditambahkan.');
        } else {
            Alert::error('Gagal', 'Periksa kembali data yang Anda masukkan.');
        }        

        return redirect()->route('superadmin.petani.create');
    }

    /**
     * Menampilkan halaman data edit petani.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($kodeunik_petani)
    {    
        $detailpetani = Petani::where('kodeunik_petani', '=', $kodeunik_petani)
        ->get();


        if ($detailpetani->isNotEmpty()) {
            return view('superadmin.petani.edit', compact('detailpetani'));
        } else {
            Alert::error('Petani tidak ditemukan', 'Periksa kembali data petani yang Anda cari.');
            return redirect()->route('superadmin.petani');
        }
    }

    /**
     * Proses Update petani.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeunik_petani)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $petani = Petani::where('tbl_petani.kodeunik_petani', '=', $kodeunik_petani)->first();

        $nama = $request->get('Nama');

        // Check if the new title is different from the existing one
        if ($petani->nama_petani !== $nama) {
            // Check if the new title already exists in the database
            $namaTerpakai = petani::where('nama_petani', $nama)->exists();

            // If the new title already exists, append a number to it
            if ($namaTerpakai) {
                $angka = 1;
                do {
                    $namaDenganAngka = $nama . ' ' . $angka;
                    $namaTerpakai = petani::where('nama_petani', $namaDenganAngka)->exists();
                    $angka++;
                } while ($namaTerpakai);

                $petani->nama_petani = $namaDenganAngka;
            } else {
                $petani->nama_petani = $nama;
            }
        }

        $petani->update();

        if (1) {

            Alert::success('Petani Diperbarui', 'Data petani berhasil diperbarui.');

            return redirect()->route('superadmin.petani.edit', $kodeunik_petani);
        } else {
            Alert::error('Gagal, Periksa Kembali data yang Anda kirim');

            return back();
        }
    }

    /**
     * Menghapus foto petani
     *
     * @return \Illuminate\Http\Response
     */
    public function hapusfotopetani($kodeunik_petani)
    {        
        $detailpetani = Petani::where('kodeunik_petani', $kodeunik_petani)->first();
        
        if (file_exists('uploads/petani/' . $detailpetani->foto)) {
            unlink('uploads/petani/' . $detailpetani->foto);

            Petani::where('kodeunik_petani', $kodeunik_petani)->update([
                #code update
                'foto' => 'Tidak Ada',
                'foto_path' => 'Tidak Ada'
            ]);

            Alert::success('foto petani Dihapus', 'foto petani telah dihapus.');
            return redirect()->route('superadmin.petani.edit', $kodeunik_petani);
        } else {
            Alert::error('Gagal menghapus data', 'File tidak ditemukan atau telah dihapus sebelumnya.');
            return back();
        }
    }

    /**
     * Proses Update foto petani.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upfotopetani(Request $request, $kodeunik_petani)
    {
        $request->validate([
            'Foto' => 'required|file|mimes:png,jpg,jpeg,webp|max:1024'
        ]);

        if ($request->hasFile('Foto')) {
            
            $folderPath = public_path('uploads/petani/');
    
            $fotoPath = $request->file('Foto');
            $fotoName = time() . '.' . $fotoPath->getClientOriginalExtension();
       
            $file = $folderPath . $fotoName;
        }

        petani::where('tbl_petani.kodeunik_petani', '=', $kodeunik_petani)->update([
            #code foto
            'foto' => $fotoName,
            'foto_path' => $file
        ]);

        if (1) {
            $request->Foto->move(public_path('uploads/petani/'), $fotoName);

            Alert::success('Berhasil', 'foto petani berhasil diperbarui.');

            return redirect()->route('superadmin.petani.edit', $kodeunik_petani);
        } else {
            Alert::error('Gagal', 'Periksa kembali data foto yang diupload.');

            return back();
        }
    }

    /**
     * Menghapus petani
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($kodeunik_petani)
    {
        $cekfoto = Petani::where('foto', '=', 'Tidak Ada')->first();

        if ($cekfoto) {
            $delete = Petani::where('kodeunik_petani',$kodeunik_petani);
            $delete->delete();
        } else {
            $delete = Petani::where('kodeunik_petani',$kodeunik_petani)->first();
            unlink('uploads/petani/'.$delete->foto);
            $delete->delete();
        }

        if ($delete = 1) {
            Alert::success('Berhasil Dihapus', 'Data Petani telah dihapus.');
            return redirect()->route('superadmin.petani');
        } else {
            Alert::error('Gagal menghapus data', 'Periksa kembali data yang anda hapus');
            return back();
        }
    }
}

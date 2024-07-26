<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Hama;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class HamaController extends Controller
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
     * Menampilkan Data Hama
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $hama = Hama::orderBy('tbl_hama.nama_hama', 'Asc')
        ->get();        

        return view('superadmin.hama.list', compact('hama'));
    }

    /**
     * Menampilkan halaman tambah data Hama
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('superadmin.hama.create');
    }
    
    /**
     * Proses pengiriman data Hama
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $kodeunik_hama = Str::random(4);

        // Pengecekan keunikan kode unik Hama
        while (Hama::where('kodeunik_hama', $kodeunik_hama)->exists()) {
            $kodeunik_hama = Str::random(4);
        }

        $hama = new Hama();
        
        $hama->kodeunik_hama = $kodeunik_hama;
        $nama = $request->input('Nama');
    
        // Cek apakah nama sudah ada dalam database
        $namaTerpakai = Hama::where('nama_hama', $nama)->exists();

        // Jika nama sudah ada, tambahkan angka setelah nama
        if ($namaTerpakai) {
            $angka = 1;
            do {
                $namaDenganAngka = $nama . ' ' . $angka;
                $namaTerpakai = Hama::where('nama_hama', $namaDenganAngka)->exists();
                $angka++;
            } while ($namaTerpakai);

            $hama->nama_hama = $namaDenganAngka;
        } else {
            $hama->nama_hama = $nama;
        }

        if (1) {

            $hama->save();

            Alert::success('Berhasil', 'Hama Telah Ditambahkan.');
        } else {
            Alert::error('Gagal', 'Periksa kembali data yang Anda masukkan.');
        }        

        return redirect()->route('superadmin.hama.create');
    }

    /**
     * Menampilkan halaman data edit Hama.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($kodeunik_hama)
    {    
        $detailhama = Hama::where('kodeunik_hama', '=', $kodeunik_hama)
        ->get();

        if ($detailhama->isNotEmpty()) {
            return view('superadmin.hama.edit', compact('detailhama'));
        } else {
            Alert::error('Hama tidak ditemukan', 'Periksa kembali data Hama yang Anda cari.');
            return redirect()->route('superadmin.hama');
        }
    }

    /**
     * Proses Update Hama.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeunik_hama)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $hama = Hama::where('tbl_hama.kodeunik_hama', '=', $kodeunik_hama)->first();

        $nama = $request->get('Nama');

        // Check if the new title is different from the existing one
        if ($hama->nama_hama !== $nama) {
            // Check if the new title already exists in the database
            $namaTerpakai = Hama::where('nama_hama', $nama)->exists();

            // If the new title already exists, append a number to it
            if ($namaTerpakai) {
                $angka = 1;
                do {
                    $namaDenganAngka = $nama . ' ' . $angka;
                    $namaTerpakai = Hama::where('nama_hama', $namaDenganAngka)->exists();
                    $angka++;
                } while ($namaTerpakai);

                $hama->nama_hama = $namaDenganAngka;
            } else {
                $hama->nama_hama = $nama;
            }
        }

        $hama->update();

        if (1) {

            Alert::success('Hama Diperbarui', 'Data Hama berhasil diperbarui.');

            return redirect()->route('superadmin.hama.edit', $kodeunik_hama);
        } else {
            Alert::error('Gagal, Periksa Kembali data yang Anda kirim');

            return back();
        }
    }

    /**
     * Menghapus hama
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($kodeunik_hama)
    {
        
        $delete = Hama::where('kodeunik_hama', $kodeunik_hama)->first();

        // update semua data ladang yang memiliki hama akan dihapus
        //Ladang::where('kode_hama', $kodeunik_hama)->update(['kode_hama' => 'DFLT']);
        $delete->delete();
        
        if ($delete = 1) {
            Alert::success('Berhasil Dihapus', 'Hama telah dihapus.');
            return redirect()->route('superadmin.hama.main');
        } else {
            Alert::error('Gagal menghapus data', 'Periksa kembali data yang anda hapus');
            return back();
        }
    }
}

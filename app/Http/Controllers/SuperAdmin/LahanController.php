<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Lahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class LahanController extends Controller
{
    public function main()
    {
        return view('superadmin.lahan.list');
    }
    public function create()
    {
        //list petani
        $petani = DB::table('tbl_petani')
        ->pluck("nama_petani","kodeunik_petani");

        //list tanaman
        $tanaman = DB::table('tbl_tanaman')
        ->pluck("nama_tanaman","kodeunik_tanaman");

        //list hama
        $hama = DB::table('tbl_hama')
        ->pluck("nama_hama","kodeunik_hama");

        //list pupuk
        $pupuk = DB::table('tbl_pupuk')
        ->pluck("nama_pupuk","kodeunik_pupuk");

        //list provinsi
        $provinsi = DB::table('indonesia_provinces')
        ->pluck("name","code");

        return view('superadmin.lahan.create', compact('provinsi', 'petani', 'tanaman', 'hama', 'pupuk'));
    }

    //ambil data kota
    public function getKota($code) 
    {
        $kota = DB::table("indonesia_cities")->where("province_code",$code)->pluck("name","code");
        return json_encode($kota);
    }

    //ambil data kecamatan
    public function getKec($code) 
    {
        $kecamatan = DB::table("indonesia_districts")->where("city_code",$code)->pluck("name","code");
        return json_encode($kecamatan);
    }
    
    //ambil data Desa
    public function getDes($code) 
    {
        $kelurahan = DB::table("indonesia_villages")->where("district_code",$code)->pluck("name","code");
        return json_encode($kelurahan);
    }

    /**
     * Proses pengiriman data lahan.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {   
        $request->validate([
            'petani' => 'required',
            'tanaman' => 'required',
            'hama' => 'required',
            'pupuk' => 'required',
            'luaslahan' => 'required',
            'lokasi' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'ketinggian' => 'required',
        ]);

        $kodeunik_ladang = Str::random(5);

        // Pengecekan keunikan kode unik ladang
        while (Lahan::where('kodeunik_ladang', $kodeunik_ladang)->exists()) {
            $kodeunik_ladang = Str::random(5);
        }

        $lahan = new Lahan();
        
        $lahan->kodeunik_ladang = $kodeunik_ladang;
        $lahan->kode_petani = $request->input('petani');
        $lahan->kode_tanaman = $request->input('tanaman');
        $lahan->kode_hama = $request->input('hama');
        $lahan->kode_pupuk = $request->input('pupuk');
        $lahan->luas_lahan = $request->input('luaslahan');
        $lahan->lokasi = $request->input('lokasi');
        $lahan->provinsi = $request->input('provinsi');
        $lahan->kotakab = $request->input('kota');
        $lahan->kecamatan = $request->input('kecamatan');
        $lahan->desa = $request->input('desa');
        $lahan->tinggi_mdpl = $request->input('ketinggian');


        if (1) {

            $lahan->save();

            Alert::success('Berhasil', 'lahan Telah Ditambahkan.');
        } else {
            Alert::error('Gagal', 'Periksa kembali data yang Anda masukkan.');
        }        

        return redirect()->route('superadmin.lahan.create');
    }
}

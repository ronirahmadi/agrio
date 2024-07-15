<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisLokasiController extends Controller
{
    public function jenisLokasi()
    {
        return view('submenu.jenisLokasi');
    }
}

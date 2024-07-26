<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisLahanController extends Controller
{
    public function jenisLahan()
    {
        return view('submenu.jenislahan');
    }
}

<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisHamaController extends Controller
{
    public function jenisHama()
    {
        return view('submenu.jenisHama');
    }
}

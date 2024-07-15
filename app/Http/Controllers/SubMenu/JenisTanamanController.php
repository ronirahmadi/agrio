<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisTanamanController extends Controller
{
    public function jenisTanaman()
    {
        return view('submenu.jenisTanaman');
    }
}

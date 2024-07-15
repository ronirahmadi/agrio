<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisPupukController extends Controller
{
    public function jenisPupuk()
    {
        return view('submenu.jenisPupuk');
    }
}

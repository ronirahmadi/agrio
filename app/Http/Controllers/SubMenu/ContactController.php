<?php

namespace App\Http\Controllers\SubMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('submenu.contact');
    }
}

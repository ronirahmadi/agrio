<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function main()
    {
        return view('superadmin.tanaman.list');
    }
    public function create()
    {
        return view('superadmin.tanaman.create');
    }
}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function main()
    {
        return view('superadmin.lokasi.list');
    }
    public function create()
    {
        return view('superadmin.lokasi.create');
    }
}

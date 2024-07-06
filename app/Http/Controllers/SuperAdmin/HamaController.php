<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HamaController extends Controller
{
    public function main()
    {
        return view('superadmin.hama.list');
    }
    public function create()
    {
        return view('superadmin.hama.create');
    }
}

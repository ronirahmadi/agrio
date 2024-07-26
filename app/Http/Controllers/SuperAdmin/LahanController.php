<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    public function main()
    {
        return view('superadmin.lahan.list');
    }
    public function create()
    {
        return view('superadmin.lahan.create');
    }
}

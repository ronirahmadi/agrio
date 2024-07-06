<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function main()
    {
        return view('superadmin.petani.list');
    }
    public function create()
    {
        return view('superadmin.petani.create');
    }
}

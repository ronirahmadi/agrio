<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function main()
    {
        return view('superadmin.pupuk.list');
    }
    public function create()
    {
        return view('superadmin.pupuk.create');
    }
}

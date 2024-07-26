<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListLahanController extends Controller
{
    public function listLahan()
    {
        return view('admin.list-lahan');
    }
}

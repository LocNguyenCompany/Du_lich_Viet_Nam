<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaDanhController extends Controller
{
    function show_dia_danh()
    {
        return view('show_dia_danh');
    }
}

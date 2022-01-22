<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiDiaDanhController extends Controller
{
    function show_loai_dia_danh()
    {
        return view('show_loai_dia_danh');
    }
}

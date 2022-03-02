<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiTaiKhoanController extends Controller
{
    function show_loai_tai_khoan()
    {
        return view('show_loai_tai_khoan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    function show_bai_viet()
    {
        return view('show_bai_viet');
    }
}

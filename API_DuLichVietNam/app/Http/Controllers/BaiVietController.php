<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;

class BaiVietController extends Controller
{
    function show_bai_viet()
    {
        return view('show_bai_viet');
    }
    function get_all_bai_viet()
    {
        $baiviet = BaiViet::all();
        return json_encode($baiviet);
    }
}

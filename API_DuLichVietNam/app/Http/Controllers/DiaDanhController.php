<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaDanh;

class DiaDanhController extends Controller
{
    function show_dia_danh()
    {
        return view('show_dia_danh');
    }
    function get_all_dia_danh()
    {
        $diadanh = DiaDanh::all();
        return json_encode($diadanh);
    }
    function get_dia_danh_id ($id)
    {
        $diadanh = DiaDanh::find($id);
        return json_encode($diadanh);
    }
}

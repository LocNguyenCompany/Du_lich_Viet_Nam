<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VungController extends Controller
{
    function show_vung()
    {
        return view('show_vung');
    }
}

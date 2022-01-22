<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MienController extends Controller
{
    function show_mien()
    {
        return view('show_mien');
    }
}

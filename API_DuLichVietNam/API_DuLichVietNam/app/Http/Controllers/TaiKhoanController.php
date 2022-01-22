<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TaiKhoan;

class TaiKhoanController extends Controller
{
    function show_tai_khoan()
    {
        return view('show_tai_khoan');
    }

    function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' =>
        $request->password])) {
            $kq1 = TaiKhoan::find(auth()->user()->id);
            $kq = ['kq'=>'true', 'kq1' => $kq1];
        }
        else
        {
            $kq = ['kq'=>'false'];
        }
    
        return json_encode([$kq]);
    }
    function getUserAccount(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' =>
        $request->password])) {
            $kq = TaiKhoan::find(auth()->user()->id);
        }      
        return json_encode([$kq]);
    }
    function logout()
    {
        $user = Auth::logout();
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\ChiaSeBaiViet;

class BaiVietController extends Controller
{
    function show_bai_viet()
    {
        return view('show_bai_viet');
    }
    function get_all_bai_viet()
    {
        $baiviet = BaiViet::orderBy('Like', 'desc')->get();
        return json_encode($baiviet);
    }
    function get_bai_viet_id ($id)
    {
        $diadanh = BaiViet::where("Dia_danh", "=" ,$id)->get();
        return json_encode($diadanh);
    }
    function chia_se_bai_viet($idBaiViet, $idTaiKhoan)
    {
        $a = new ChiaSeBaiViet();
        $a->id_bai_viet = $idBaiViet;
        $a->id_tai_khoan = $idTaiKhoan;
        $a->save();
    }
}

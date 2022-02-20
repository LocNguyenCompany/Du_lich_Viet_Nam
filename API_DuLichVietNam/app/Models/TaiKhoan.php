<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authentication;

class TaiKhoan extends Authentication
{
    use HasFactory;
    protected $table = "tai_khoan";
    function DSBaiViet()
    {
        return $this->belongsToMany('App\Models\BaiViet','chia_se_bai_viet','id_tai_khoan','id_bai_viet', 'id', 'id');

    }
}

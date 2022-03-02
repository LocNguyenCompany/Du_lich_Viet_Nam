<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiaSeBaiViet extends Model
{
    use HasFactory;
    protected $table = "chia_se_bai_viet";
    function BaiViet()
    {
        return $this->belongsTo('App\Models\BaiViet', 'id_bai_viet');
    }
}

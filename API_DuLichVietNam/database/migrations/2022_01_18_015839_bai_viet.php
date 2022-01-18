<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaiViet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bai_Viet', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Dia_danh");
            $table->string("Noi_dung");
            $table->string("Hinh_anh");
            $table->bigInteger("Like");
            $table->bigInteger("Unlike");
            $table->bigInteger("View");
            $table->bigInteger("Tai_khoan");
            $table->integer("Trang_thai");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tai_Khoan', function (Blueprint $table) {
            $table->id();
            $table->string("Username");
            $table->string("Password");
            $table->bigInteger("Loai_tai_khoan");
            $table->string("Hinh_dai_dien");
            $table->string("Ho_ten");
            $table->string("Gioi_tinh");
            $table->string("Email");
            $table->string("SDT");
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

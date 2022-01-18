<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiaDanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dia_danh', function (Blueprint $table) {
            $table->id();
            $table->string("Ten_dia_danh");
            $table->string("Hinh_anh");
            $table->string("Location");
            $table->bigInteger("Nha_nghi");
            $table->bigInteger("Danh_gia");
            $table->bigInteger("Vung");
            $table->bigInteger("Mien");
            $table->string("Khi_hau");
            $table->bigInteger("Quan_an");
            $table->string("Tai_nguyen_thien_nhien");
            $table->string("Canh_vat");
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

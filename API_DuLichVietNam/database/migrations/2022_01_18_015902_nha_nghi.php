<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NhaNghi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nha_nghi', function (Blueprint $table) {
            $table->id();
            $table->string("Ten_nha_nghi");
            $table->string("Hinh_anh");
            $table->string("SDT");
            $table->string("Dia_chi");
            $table->string("Location");
            $table->string("Mo_ta");
            $table->bigInteger("Danh_gia");
            $table->string('Thoi_gian_mo_cua');
            $table->string('Thoi_gian_dong_cua');
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

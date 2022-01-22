<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuanAn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quan_an', function (Blueprint $table) {
            $table->id();
            $table->string("Ten_quan_an"); 
            $table->bigInteger("Danh_gia");   
            $table->string("Dia_chi");  
            $table->string("Location");  
            $table->bigInteger("Trang_thai");       
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

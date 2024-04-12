<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{  public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->increments('MaTaiKhoan');
            $table->integer('LoaiTaiKhoan')->unsigned();
            $table->string('TenTaiKhoan', 50);
            $table->char('MatKhau', 50);
            $table->string('Email', 150);
            $table->foreign('LoaiTaiKhoan')->references('MaLoai')->on('loai_tai_khoan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tai_khoan');
    }
};

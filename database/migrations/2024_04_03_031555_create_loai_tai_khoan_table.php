<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loai_tai_khoan', function (Blueprint $table) {
            $table->increments('MaLoai');
            $table->string('TenLoai', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loai_tai_khoan');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTaiKhoan extends Model
{
    protected $table = 'loaitaikhoan';

    protected $primaryKey = 'MaLoai';

    protected $fillable = ['TenLoai'];

    public $timestamps = true;

    public function taiKhoan()
    {
        return $this->hasMany(TaiKhoan::class, 'LoaiTaiKhoan');
    }
}

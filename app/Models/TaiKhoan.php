<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'taikhoan';

    protected $primaryKey = 'MaTaiKhoan';

    protected $fillable = ['LoaiTaiKhoan', 'TenTaiKhoan', 'MatKhau', 'Email'];

    public $timestamps = true;

    public function loaiTaiKhoan()
    {
        return $this->belongsTo(LoaiTaiKhoan::class, 'LoaiTaiKhoan');
    }
}

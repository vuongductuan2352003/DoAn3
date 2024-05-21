<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'giohang';
    protected $primaryKey = 'MaGioHang';
    public $timestamps = false; // Nếu không có trường 'created_at' và 'updated_at'
    
    protected $fillable = [
        'MaSanPham',
        'SoLuong',
        'id_user',
        'created_at',
        'updated_at',
    ];
    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'MaSanPham', 'MaSanPham');
    }
    public function User(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}

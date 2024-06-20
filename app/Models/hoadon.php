<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = 'HoaDon'; // tên bảng trong CSDL
    protected $primaryKey = 'MaHoaDon'; // khóa chính của bảng
    public $timestamps = false; // nếu bảng không sử dụng các trường `created_at` và `updated_at`

    protected $fillable = ['NgayTao', 'NgayDuyet', 'TongGia', 'Id','TrangThai','GhiChu'];


    public function khachHang()
    {
        return $this->belongsTo(khachhang::class, 'Id', 'Id');
    }
    public function chitiethoadon()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'MaHoaDon', 'MaHoaDon');
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    use HasFactory;

    protected $table = 'ChiTietHoaDon'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'MaChiTietHoaDon'; // Khóa chính của bảng
    public $timestamps = false; // Bảng không sử dụng các trường created_at và updated_at

    protected $fillable = ['MaChiTietHoaDon', 'MaHoaDon', 'MaSanPham', 'SoLuong', 'TongGia'];

    public function hoadon()
    {
        return $this->belongsTo(hoadon::class, 'MaHoaDon', 'MaHoaDon');
    }
    public function sanpham()
    {
        return $this->belongsTo(sanpham::class, 'MaSanPham', 'MaSanPham');
    }

}

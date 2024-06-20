<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    use HasFactory;

    protected $table = 'khachhang'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'Id'; // Khóa chính của bảng
    public $timestamps = false; // Bảng không sử dụng các trường created_at và updated_at

    protected $fillable = ['TenKH', 'GioiTinh', 'DiaChi', 'SDT', 'Email', 'id_user','img'];

    
    public function hoadon()
    {
        return $this->hasMany(HoaDon::class, 'Id', 'Id');
    }

}

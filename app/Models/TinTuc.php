<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';
    protected $primaryKey = 'MaTinTuc';
    public $timestamps = false; // Nếu không có trường 'created_at' và 'updated_at'
    
    protected $fillable = [
        'MaTinTuc',
        'img',
        'mota1',
        'mota2',
        'Ngay',
        'Thang'
    ];
}

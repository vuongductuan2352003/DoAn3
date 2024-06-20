<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\hoadon;
use App\Models\chitiethoadon;
use App\Models\khachhang;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    
    public function index()
    {
        $admin = SanPham::all();
     $chitiethoadon = chitiethoadon::all();
        $hoaDon = HoaDon::with(['chiTietHoaDon.sanPham'])->get();
        $khachHang = khachhang::all();
        $taiKhoan = User::all(); 
       
        return view('admin.index', compact('admin','hoaDon','khachHang','taiKhoan','chitiethoadon'));
    }

    public function delete(Request $request, $MaSanPham)
    {
        $sanPham = SanPham::findOrFail($MaSanPham);
        $sanPham->delete();
    
        return redirect()->route('admin.index');
    } 
    public function loai(Request $request, $Id)
    {
        $khachHang = khachhang::findOrFail($Id);
        $khachHang->delete();
    
        return redirect()->route('admin.index');
    }     
    public function postLogin(Request $request){
        dd($request->all());
    }

    public function duyethoaDon($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $hoaDon->update(['TrangThai' => '1']); // Cập nhật trạng thái duyệt
    
        return redirect()->route('admin.index');
    }
    public function xoa($MaHoaDon)
    {
        $hoaDon = HoaDon::findOrFail($MaHoaDon);
    
        // Lấy danh sách các chi tiết hoá đơn liên quan
        $chiTietHoaDon = chitiethoadon::where('MaHoaDon', $MaHoaDon)->get();
    
        // Xoá từng chi tiết hoá đơn
        foreach ($chiTietHoaDon as $chitiet) {
            $chitiet->delete();
        }
    
        // Xoá hoá đơn
        $hoaDon->delete();
    
        return redirect()->route('admin.index')->with('success', 'Hoá đơn và các chi tiết liên quan đã được xoá.');
    }
    
}

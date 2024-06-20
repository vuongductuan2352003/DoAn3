<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KhachHang;
use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\ChiTietHoaDon;
use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;
class ThanhToanController extends Controller
{
    public function show()
{
    if(Auth::check()){
        // Nếu người dùng đã đăng nhập, lấy giỏ hàng từ cơ sở dữ liệu
        $userId = auth()->id();
        $cartItems = GioHang::where('id_user', $userId)->get();
    } else {
        // Nếu người dùng chưa đăng nhập, lấy giỏ hàng từ session
        $cartItems = session()->get('cart', []);
        // Biến đổi mảng thành đối tượng tương tự như khi lấy từ cơ sở dữ liệu
        $cartItems = collect($cartItems)->map(function($item) {
            $sanpham = SanPham::find($item['id']);
            $item['sanpham'] = $sanpham;
            return (object) $item;
        });
    }
    return view('GioHang.Test', compact('cartItems'));
}


    public function store(Request $request)
    { 
        $userId = Auth::check() ? auth()->id() : 'khách hàng mới';

        // Đặt giá trị ảnh dựa trên giới tính
        $imagePath = ($request->gender == 'Nam') ? '/Slide/18.png' : '/Slide/17.png';
        
        // Lưu thông tin khách hàng
        $khachHang = KhachHang::create([
            'TenKH' => $request->name,
            'GioiTinh' => $request->gender,
            'DiaChi' => $request->address,
            'SDT' => $request->phone,
            'Email' => $request->email,
            'id_user' => $userId,
            'img' => $imagePath,
        ]);
        
    
        // Khởi tạo hóa đơn với tổng giá tạm thời là 0
        $hoaDon = HoaDon::create([
            'NgayTao' => now(),
            'NgayDuyet' => null, 
            'TongGia' => 0,
            'Id' => $khachHang->Id,
            'TrangThai' =>0,
            'GhiChu'=>$request->ghichu,
        ]);
    
        // Lấy giỏ hàng từ cơ sở dữ liệu nếu người dùng đã đăng nhập, nếu không thì lấy từ session
        if(Auth::check()){
            $userId = auth()->id();
            $cartItems = GioHang::where('id_user', $userId)->get();
        } else {
            $cartItems = session()->get('cart', []);
        }
    
        $tongGiaHoaDon = 0;
    
        foreach ($cartItems as $cartItem) {
            if ($cartItem->sanpham){
            if (Auth::check()) {
                $sanPham = $cartItem->sanpham;
                $soLuong = $cartItem->SoLuong;
            } else {
                $sanPham = SanPham::find($cartItem['id']);
                $soLuong = $cartItem['qty'];
            }

            $tongGiaSanPham = $sanPham->Gia * $soLuong;
            $tongGiaHoaDon += $tongGiaSanPham;
    
            ChiTietHoaDon::create([
                'MaHoaDon' => $hoaDon->MaHoaDon,
                'MaSanPham' => $sanPham->MaSanPham,
                'SoLuong' => $soLuong,
                'TongGia' => $tongGiaSanPham,
            ]); } 
        }
    
        // Cập nhật tổng giá của hóa đơn
        $hoaDon->update(['TongGia' => $tongGiaHoaDon]);
    
        // Xóa giỏ hàng sau khi đặt hàng thành công
        if ($request->cartItems) {
            foreach ($request->cartItems as $cartItem) {
                // Xóa từng phần tử trong giỏ hàng
                $cartItem->delete();
            }
        }
        $mail = $request->email;
        $namee =$request->name;
        Mail::to($mail)->send(new OrderConfirmationMail($hoaDon, $khachHang));
        return redirect()->route('sanpham')->with('success', 'Bạn đã đặt hàng thành công, mời bạn mua tiếp sản phẩm');
  }
}

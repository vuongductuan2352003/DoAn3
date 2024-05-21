<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ChiTietSanPhamController extends Controller
{
    public function index($maSanPham)
    {
     // Lấy mã sản phẩm từ URL
        // $maSanPham = $request->query('id');


        // Lấy thông tin chi tiết sản phẩm dựa trên mã sản phẩm
        $chiTietSanPham = SanPham::where('MaSanPham', $maSanPham)->first();

        Session::forget('previousUrl');
        // Kiểm tra nếu không tìm thấy sản phẩm
        if (!$chiTietSanPham) {
            abort(404); // Trả về trang 404 Not Found
        }

        return view('ChiTietSanPham.index', compact('chiTietSanPham'));
    }
   
    
public function addCart($id) {
    Session::put('previousUrl', url()->current());  
    if(Auth::check()){
        $SanPham =  SanPham::find($id);   
   
   
        $userId = auth()->id(); // Lấy ID của người dùng đã đăng nhập
    
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng chưa
        $gioHang = GioHang::where('MaSanPham', $id)
                          ->where('id_user', $userId)
                          ->first();
    
        if($gioHang) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $gioHang->SoLuong += 1; // Ví dụ: tăng số lượng sản phẩm lên 1
            $gioHang->save();
            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
            GioHang::create([
                'MaSanPham' => $id,
                'SoLuong' => 1, // Số lượng ban đầu là 1
                'id_user' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');
        }
        return back();
    }else{
       
        return redirect()->route('login')->with('error','Bạn cần đăng nhập để có thể thêm sản phẩm vào giỏ hàng');
    }
   
}
}

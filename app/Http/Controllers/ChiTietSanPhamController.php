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
        
        $SanPham = SanPham::find($id);   
        $quantity = 1;
    
        if (!$SanPham) {
            toastr()->error('Sản phẩm không còn tồn tại!');
            return back();
        }
    
        // Tính toán tổng giá trị
        $subtotal = $SanPham->GiaSanPham * $quantity;
    
        if(Auth::check()){
            $userId = auth()->id(); // Lấy ID của người dùng đã đăng nhập
        
            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng chưa
            $gioHang = GioHang::where('MaSanPham', $id)
                              ->where('id_user', $userId)
                              ->first();
        
            if($gioHang) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                $gioHang->SoLuong += 1; // Ví dụ: tăng số lượng sản phẩm lên 1
                $gioHang->save();
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                GioHang::create([
                    'MaSanPham' => $id,
                    'SoLuong' => 1, // Số lượng ban đầu là 1
                    'id_user' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');
            return back();
        } else {
            // Lưu trữ mặt hàng giỏ hàng trong session cho khách
            $cartItems = session()->get('cart', []);
            $found = false;
        
            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng session hay chưa
            foreach ($cartItems as &$item) {
                if ($item['id'] == $SanPham->MaSanPham) {
                    $item['qty'] += 1;
                    $item['options']['subtotal'] = $item['price'] * $item['qty'];
                    $found = true;
                    break;
                }
            }
        
            // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
            if (!$found) {
                $newItem = [
                    'id' => $SanPham->MaSanPham,
                    'name' => $SanPham->TenSanPham,
                    'price' => $SanPham->Gia,
                    'qty' => 1,
                    'weight' => 0,
                    'options' => [
                        'image' => $SanPham->AnhDaiDien,
                        'subtotal' => $SanPham->Gia, // Số lượng ban đầu là 1, nên subtotal = price
                    ]
                ];
        
                $cartItems[] = $newItem;
            }
        
            session()->put('cart', $cartItems);
        
            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');
            return back();
        }
        
    }

}

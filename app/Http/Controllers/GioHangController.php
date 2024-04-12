<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SanPham;

use Gloudemans\Shoppingcart\CartItem;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class GioHangController extends Controller
{
      
  
    
    public function index() {
        $cartItem = Cart::content();
        
        $totalQuantity = Cart::count();
        
        return view('GioHang.index', ['cartItems' => $cartItem, 'totalQuantity'=> $totalQuantity]);
    }


    public function addToCart($id) {
       
    
        $SanPham =  SanPham::find($id);   

        $quantity = 1;
        
        if (!$SanPham) {

            toastr()->error('Sản phẩm không còn tồn tại!');
            return back();
        }


         // Tính toán giá tiền subtotal cho sản phẩm
        $subtotal = $SanPham->GiaSanPham * $quantity;
        
        
        // if(auth()->check()) {
            
            Cart::add([
                'id' => $SanPham->MaSanPham,
                'name' => $SanPham->TenSanPham,
                'price' => $SanPham->Gia,
                'qty' => 1, // Số lượng mặc định là 1
                'weight' => 0,
                'options' => [
                    'image' => $SanPham->AnhDaiDien,
                    'subtotal' => $subtotal,
                ]
            ]);
            
        

            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');

            $cartItems = session()->get('cart', []);
            $newItem = [
                'id' => $SanPham->MaSanPham,
                'name' => $SanPham->TebSanPham,
                'price' => $SanPham->GiaSanPham,
                'qty' => 1,
                'weight' => 0,
                'options' => [
                    'image' => $SanPham->image,
                    'subtotal' => $subtotal,
                ]
            ];
            $cartItems[] = $newItem;
            session()->put('cart', $cartItems);

   
        // } else {
        //     // Nếu người dùng chưa đăng nhập, bạn có thể xử lý theo cách riêng của mình.
        //     // Ví dụ: chuyển hướng người dùng đến trang đăng nhập hoặc yêu cầu họ đăng nhập trước khi thêm vào giỏ hàng.
        //     toastr()->error('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!');
        // }

        return back();

    }
    public function updateQuantity(Request $request, $rowId) {
        $quantity = $request->input('quantity');
        if ($request->input('action') === 'increase') {
            Cart::update($rowId, $quantity + 1);
        } elseif ($request->input('action') === 'decrease') {
            Cart::update($rowId, $quantity - 1);
        }
        return redirect()->route('GioHang.index');
    }
    

    public function removeItem($rowId){
        Cart::remove($rowId);
        toastr()->success('Sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
    }

    public function removeAll() {
        Cart::destroy();
        toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
    }
}

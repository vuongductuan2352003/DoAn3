<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SanPham;

use Gloudemans\Shoppingcart\CartItem;
use App\Models\User;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;


class GioHangController extends Controller
{
      
  
   
    public function index() {
        $cartItem = Cart::content();
        $userId = auth()->id();
            $cart = GioHang::where('id_user',$userId)->get();
        $totalQuantity = Cart::count();
        
        return view('GioHang.index', ['cartItems' => $cartItem, 'totalQuantity'=> $totalQuantity], compact('cart'));
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
    
//     public function removeAll() {
//         $userId = Auth::id();
//         GioHang::where('id', $userId)->delete();

//         toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
//         return back();
// }
    
    
    public function removeItemm($rowId){
        // Xóa mục khỏi giỏ hàng dựa trên rowId
        GioHang::where('MaGioHang', $rowId)->delete();
        // Hiển thị thông báo xóa thành công
        toastr()->success('Sản phẩm đã được xóa khỏi giỏ hàng!');
        // Chuyển hướng người dùng trở lại trang trước đó
        return back();
    }
    // public function removeAll() {
    //     GioHang::destroy();
    //     toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
    //     return back();
    // }




    public function update(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');
        $quantity = $request->input('quantity');
    
        // Tìm item giỏ hàng theo ID
        $cartItem = GioHang::find($cartItemId);
    
        if ($cartItem) {
            $cartItem->SoLuong = $quantity;
            $cartItem->save();
    
           
        } else {
            return response()->json(['success' => false, 'error' => 'Sản phẩm không tồn tại trong giỏ hàng.']);
        }
    }
    
}

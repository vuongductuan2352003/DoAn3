<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\User;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class Cart extends Controller
{
    public function index()
    {Session::put('previousUrl', url()->current());
        if(Auth::check()){
          
            Session::forget('previousUrl');
            $userId = auth()->id();
            $cart = GioHang::where('id_user',$userId)->get();
        return view('GioHang.index', compact('cart'));
        }else{
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để vào giỏ hàng đăng nhập!');
        }   
     
    }
    // public function updateCart(Request $request){
    //     $cartItem = GioHang::find($request->cart_item_id);


    //     $cartItem->SoLuong = $request->quantity;
    //     // $newSubtotal = $cartItem->subtotal = $cartItem->price * $request->quantity;
    //     $cartItem->save();

    //     return response()->json(['success' => true]);
    // }
    public function update(Request $request)
    {
        $cartItemId = $request->input('cartItemId');
        $quantity = $request->input('quantity');

        // Update số lượng sản phẩm trong giỏ hàng
        $cartItem = GioHang::find($cartItemId);
        if($cartItem) {
            $cartItem->SoLuong = $quantity;
            $cartItem->save();
        }

        return response()->json(['success' => true]);
    }


    public function removeAll() {
        $userId = Auth::id();
        GioHang::where('id', $userId)->delete();

        toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
}
    
    
    public function removeItem($rowId){
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
}



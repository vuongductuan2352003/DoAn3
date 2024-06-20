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
    {
        if (Auth::check()) {
            $userId = auth()->id();
            $this->mergeSessionCartToDatabase($userId);

            $cart = GioHang::where('id_user', $userId)->get();
            return view('GioHang.index', compact('cart'));
        } else {
            $cart = session()->get('cart', []);
            return view('GioHang.index', compact('cart'));
        }
    }

    public function mergeSessionCartToDatabase($userId)
    {
        $cartItems = session()->get('cart', []);

        foreach ($cartItems as $item) {
            $gioHang = GioHang::where('MaSanPham', $item['id'])
                ->where('id_user', $userId)
                ->first();

            if ($gioHang) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                $gioHang->SoLuong += $item['qty'];
                $gioHang->save();
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                GioHang::create([
                    'MaSanPham' => $item['id'],
                    'SoLuong' => $item['qty'],
                    'id_user' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Xóa giỏ hàng trong session sau khi hợp nhất
        session()->forget('cart');
    }

    public function update(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');
        $quantity = $request->input('quantity');

        if (Auth::check()) {
            // Tìm item giỏ hàng theo ID trong cơ sở dữ liệu
            $cartItem = GioHang::find($cartItemId);

            if ($cartItem) {
                $cartItem->SoLuong = $quantity;
                $cartItem->save();
            } else {
                return response()->json(['success' => false, 'error' => 'Sản phẩm không tồn tại trong giỏ hàng.']);
            }
        } else {
            // Cập nhật số lượng trong session
            $cartItems = session()->get('cart', []);
            foreach ($cartItems as &$item) {
                if ($item['id'] == $cartItemId) {
                    $item['qty'] = $quantity;
                    break;
                }
            }
            session()->put('cart', $cartItems);
        }

        return response()->json(['success' => true]);
    }

    public function removeItem($rowId)
    {
        if (Auth::check()) {
            // Xóa mục khỏi giỏ hàng dựa trên rowId trong cơ sở dữ liệu
            GioHang::where('MaGioHang', $rowId)->delete();
        } else {
            // Xóa mục khỏi giỏ hàng dựa trên rowId trong session
            $cartItems = session()->get('cart', []);
            foreach ($cartItems as $key => $item) {
                if ($item['id'] == $rowId) {
                    unset($cartItems[$key]);
                    break;
                }
            }
            session()->put('cart', array_values($cartItems));
        }

        toastr()->success('Sản phẩm đã được xóa khỏi giỏ hàng!');
        return back();
    }

    public function removeAll()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            GioHang::where('id_user', $userId)->delete();
        } else {
            session()->forget('cart');
        }

        toastr()->success('Tất cả sản phẩm đã được xóa khỏi giỏ hàng!');
        return back();
    }

}


















































    // public function updateCart(Request $request){
    //     $cartItem = GioHang::find($request->cart_item_id);


    //     $cartItem->SoLuong = $request->quantity;
    //     // $newSubtotal = $cartItem->subtotal = $cartItem->price * $request->quantity;
    //     $cartItem->save();

    //     return response()->json(['success' => true]);
    // }
    // public function update(Request $request)
    // {
    //     $cartItemId = $request->input('cartItemId');
    //     $quantity = $request->input('quantity');

    //     // Update số lượng sản phẩm trong giỏ hàng
    //     $cartItem = GioHang::find($cartItemId);
    //     if($cartItem) {
    //         $cartItem->SoLuong = $quantity;
    //         $cartItem->save();
    //     }

    //     return response()->json(['success' => true]);
    // }


//     public function removeAll() {
//         $userId = Auth::id();
//         GioHang::where('id', $userId)->delete();

//         toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
//         return back();
// }
    
    
//     public function removeItem($rowId){
//         // Xóa mục khỏi giỏ hàng dựa trên rowId
//         GioHang::where('MaGioHang', $rowId)->delete();
//         // Hiển thị thông báo xóa thành công
//         toastr()->success('Sản phẩm đã được xóa khỏi giỏ hàng!');
//         // Chuyển hướng người dùng trở lại trang trước đó
//         return back();
//     }
//     // public function removeAll() {
//     //     GioHang::destroy();
//     //     toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
//     //     return back();
//     // }




//     public function update(Request $request)
//     {
//         $cartItemId = $request->input('cart_item_id');
//         $quantity = $request->input('quantity');
    
//         // Tìm item giỏ hàng theo ID
//         $cartItem = GioHang::find($cartItemId);
    
//         if ($cartItem) {
//             $cartItem->SoLuong = $quantity;
//             $cartItem->save();
    
           
//         } else {
//             return response()->json(['success' => false, 'error' => 'Sản phẩm không tồn tại trong giỏ hàng.']);
//         }
//     }
    




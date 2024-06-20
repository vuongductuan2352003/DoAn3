<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csdldogovuongtuan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChiTietSanPhamController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\Cart;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\TinTucController;
use App\Models\TinTuc;

// use App\Http\Controllers\LoginController;
// Route::get('/login', [LoginController::class, 'index']);
// dangnhap
Route::get('/login', function () {
    return view('Login.index');
});

Route::prefix('admin')->middleware('admin')->group(function(){
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');


Route::delete('/admin/delete-sanpham/{MaSanPham}', [AdminController::class, 'delete'])->name('admin.delete'); 
Route::delete('/admin/delete-khachhang/{Id}', [AdminController::class, 'loai'])->name('khachhang.delete'); 
Route::delete('/admin/delete-hoadon/{MaHoaDon}', [AdminController::class, 'xoa'])->name('hoadon.delete');

Route::put('/admin/{MaSanPham}', [AdminController::class, 'update'])->name('admin.update');
Route::patch('/admin/{MaHoaDon}', [AdminController::class, 'duyethoaDon'])->name('hoadon.duyet');





});
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('loginn');
Route::get('/register', [UserController::class, 'Register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister'])->name('registerr');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});

// sanpham
Route::get('/san-pham', [SanPhamController::class, 'index'])->name('sanpham');
Route::post('/add-to-cart', [SanPhamController::class, 'addToCart'])->name('cart.add');
// trangchu
Route::get('/', [TrangChuController::class, 'index'])->name('TrangChu');
// quantrivien


// chitietsanpham


Route::get('/Chi-Tiet-San-Pham/{id}', [ChiTietSanPhamController::class, 'index'])->name('masanpham');
Route::post('/Chi-Tiet-San-Pham/{id}', [ChiTietSanPhamController::class, 'addCart'])->name('giohang.add');
Route::post('/Gio-Hang', 'Cart@updateCart')->name('update-cart');
Route::post('/Gio-Hang/update', 'Cart@update')->name('cart.update');
Route::post('/Gio-Hang/update', [Cart::class, 'update'])->name('cart.update');
Route::post('/Gio-Hang/bulkRemove', [Cart::class, 'bulkRemove'])->name('giohang.bulkRemove');


Route::post('/Gio-Hang/remove-item/{rowId}', [Cart::class, 'removeItem'])->name('giohang.remove');
// giohang

Route::get('/Gio-Hang', [Cart::class, 'index'])->name('GioHang.index');

// Route::post('/Gio-Hang/{id}', [GioHangController::class, 'addToCart'])->name('giohang.add');
// Route::post('/Gio-Hang/remove-item/{rowId}', [GioHangController::class, 'removeItem'])->name('giohang.remove');
// Route::post('/Gio-Hang/update/{rowId}', [GioHangController::class, 'updateQuantity'])->name('giohang.update');
//TinTuc
Route::get('/Tin-Tuc', [TinTucController::class, 'index'])->name('TinTuc.index');

// lienhe
Route::get('/lien-he', function () {
    return view('LienHe.index');
});
// vechungtoi
Route::get('/ve-chung-toi', function () {
    return view('VeChungToi.index');
});
//thanh toan


Route::get('/Thanh-Toan', [ThanhToanController::class, 'show'])->name('thanhtoan.show');
Route::post('/Thanh-Toan', [ThanhToanController::class, 'store'])->name('thanhtoan.store');



//test mai
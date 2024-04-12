<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csdldogovuongtuan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

// sanpham

Route::get('/san-pham', [SanPhamController::class, 'index']);
Route::post('/add-to-cart', [SanPhamController::class, 'addToCart'])->name('cart.add');
// trangchu

Route::get('/hi', [TrangChuController::class, 'index']);
Route::get('/hi', [TrangChuController::class, 'indexx']);
// quantrivien

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::delete('/admin/{MaSanPham}', [AdminController::class, 'delete'])->name('admin.delete'); // Sử dụng DELETE method

// use App\Http\Controllers\LoginController;
// Route::get('/login', [LoginController::class, 'index']);
// dangnhap
Route::get('/login', function () {
    return view('Login.index');
});


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postRegister'])->name('registerr');

// chitietsanpham
use App\Http\Controllers\ChiTietSanPhamController;
Route::get('/Chi-Tiet-San-Pham', [ChiTietSanPhamController::class, 'index']);
Route::post('/Chi-Tiet-San-Pham/add', [ChiTietSanPhamController::class, 'addCart'])->name('giohang.add');

// giohang
use App\Http\Controllers\GioHangController;
Route::get('/Gio-Hang', [GioHangController::class, 'index'])->name('GioHang.index');

Route::post('/Gio-Hang/{id}', [GioHangController::class, 'addToCart'])->name('giohang.add');
Route::post('/Gio-Hang/remove-item/{rowId}', [GioHangController::class, 'removeItem'])->name('giohang.remove');
Route::post('/Gio-Hang/update/{rowId}', [GioHangController::class, 'updateQuantity'])->name('giohang.update');


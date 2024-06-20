@include('includes.header')

<link rel="stylesheet" href="{{ asset('css/giohang.css') }}">
<main class="gioHang" style="display: block;color:black">
    @php
        $i = 0;
        $tongTien = 0;
    @endphp

    @if(Auth::check())
        @foreach ($cart as $cartItem)
        @if ($cartItem -> sanpham)
            @php
                $i++;
                $tongTien += ($cartItem->sanpham->Gia * $cartItem->SoLuong);
            @endphp
            @endif
        @endforeach
    @else
        @foreach ($cart as $cartItem)
            @php
                $i++;
                $tongTien += ($cartItem['price'] * $cartItem['qty']);
            @endphp
        @endforeach
    @endif

    <section class="menu-gioHang" style="margin-left:700px">
        <div class="h">
            <span class="hh">Giỏ Hàng</span>
            <span class="hhh">Giỏ Hàng</span>
        </div>
    </section>
    <section class="menu-gioHang">
        <div class="menu-gioHang1">
            <span style="width:200px;display:flex">
                <input id="select-all" style="width:20px" type="checkbox" name="selected_items[]"> Tất Cả ({{ $i }} sản phẩm)
            </span>
            <span style="margin-left: 230px;">Đơn giá</span>
            <span style="margin-left: 70px;">Số lượng</span>
            <span style="margin-left: 60px;">Thành tiền</span>
            <span style="margin-left: 75px;"> <i class="fa-regular fa-trash-can"> </i></span>
        </div>
        <div id="t" class="menu-sanpham">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            @if(Auth::check())
                @foreach ($cart as $cartItem)
                @if ($cartItem -> sanpham)
                <div class="menu-gioHang2">
                    <span class="center-content"><input style="width:15px" type="checkbox" name="selected_items[]" value="{{ $cartItem->MaGioHang }}"></span>
                    <span class="span-img"><img src="{{ asset('Đồ Gỗ Mỹ Nghệ/' . $cartItem->sanpham->AnhDaiDien) }}" alt=""></span>
                    <span class="span-ten center-content">{{ $cartItem->sanpham->TenSanPham }}</span>
                    <span class="span-gia center-content"><strong>{{ number_format($cartItem->sanpham->Gia, 0, ',', '.') }} </strong><strong>₫</strong></span>
                    <span class="span-sl center-content">
                        <button class="tang">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="number" class="soluong" value="{{ $cartItem->SoLuong }}" min="1">
                        <input type="hidden" id="cart-update-url" value="{{ route('cart.update') }}">
                        <button class="giam">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </span>
                    <span class="span-tt center-content"><strong style="color: red;">{{ number_format(($cartItem->sanpham->Gia * $cartItem->SoLuong), 0, ',', '.') }} </strong><strong style="color: red;">₫</strong></span>
                    <span class="span-xoa center-content">
                        <form action="{{ route('giohang.remove', $cartItem->MaGioHang) }}" method="post">
                            @csrf
                            <button type="submit" style="background-color: transparent; border: none; font-size: 16px; color: black;"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </span>
                </div>
                @endif
                @endforeach
            @else
                @foreach ($cart as $cartItem)
                <div class="menu-gioHang2">
                    <span class="center-content"><input style="width:15px" type="checkbox" name="selected_items[]" value="{{ $cartItem['id'] }}"></span>
                    <span class="span-img"><img src="{{ asset('Đồ Gỗ Mỹ Nghệ/' . $cartItem['options']['image']) }}" alt=""></span>
                    <span class="span-ten center-content">{{ $cartItem['name'] }}</span>
                    <span class="span-gia center-content"><strong>{{ number_format($cartItem['price'], 0, ',', '.') }} </strong><strong>₫</strong></span>
                    <span class="span-sl center-content">
                        <button class="tang">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="number" class="soluong" value="{{ $cartItem['qty'] }}" min="1">
                        <input type="hidden" id="cart-update-url" value="{{ route('cart.update') }}">
                        <button class="giam">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </span>
                    <span class="span-tt center-content"><strong style="color: red;">{{ number_format(($cartItem['price'] * $cartItem['qty']), 0, ',', '.') }} </strong><strong style="color: red;">₫</strong></span>
                    <span class="span-xoa center-content">
                        <form action="{{ route('giohang.remove', $cartItem['id']) }}" method="post">
                            @csrf
                            <button type="submit" style="background-color: transparent; border: none; font-size: 16px; color: black;"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </span>
                </div>
                @endforeach
            @endif
        </div>

        <button class="TTXSP"><i class="fa-solid fa-left-long"></i> <a href="{{ url('san-pham') }}" style="color: brown;">TIẾP TỤC XEM SẢN PHẨM</a></button>
        <button class="TTXSP" onclick="reloadPage()"><i class="fa-solid fa-rotate"></i> CẬP NHẬT GIỎ HÀNG</button>
    </section>
    <section class="ThanhToan">
        <span class="ThanhToan1" style="  border-bottom: 4px solid #e0d7d7;color: #e08b1b;font-size: 23px;text-align: center; ">TỔNG GIỎ HÀNG</span>
        <span class="ThanhToan1" style="margin-top: 50px;"><span style="color: #e08b1b;font-size: 23px;"> TỔNG SẢN PHẨM <span style="margin-left: 170px;" id="TMH">{{ $i }}</span> <span></span></span></span>
        <span class="ThanhToan1" style="margin-top: 50px;float: left;"><span style="color: #e08b1b;font-size: 23px;"> TỔNG TIỀN <span style="margin-left: 80px;" id="total">{{ number_format($tongTien, 0, ',', '.') }} VNĐ</span></span></span>
        <button class="THTT" id="btn-thanh-toan"><a style="color: white;" href="{{ url('Thanh-Toan') }}">TIẾN HÀNH THANH TOÁN</a></button>
    </section>
</main>

<section class="TTHD" style="display: none;">
    <div class="h" id="DVCLG" style="margin-left: 580px;">
        <h3>
            <span class="hh">THANH TOÁN HÓA ĐƠN</span>
        </h3>
        <h3><span class="hhh">THANH TOÁN HÓA ĐƠN</span></h3>
    </div>
    <div id="payment-form">
        <h2 style="text-align: center;">Thông tin thanh toán</h2>
        <form id="payment-form">
            <label for="ten">Họ và tên:</label>
            <input type="text" id="ten" name="ten" required>

            <label for="dia-chi">Địa chỉ:</label>
            <input type="text" id="dia-chi" name="dia-chi" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="so-dien-thoai">Số điện thoại:</label>
            <input type="tel" id="so-dien-thoai" name="so-dien-thoai" required>

            <button type="submit">Thanh toán</button>
            <button type="button" id="btn-huy-bo">Hủy bỏ</button>
        </form>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/giohang.js') }}"></script>
@include('includes.footer')
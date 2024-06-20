@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/thanhtoan.css') }}">

<div class="container" style="color: black;margin-top:30px;margin-bottom:40px">
    <div class="checkout-container">
        <!-- Thông tin thanh toán -->
        <div class="checkout-left">
            <h2>Thông tin thanh toán</h2>
            <form action="{{ route('thanhtoan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Tên khách hàng</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="ghichu">Giao Hàng</label>
                    <select class="form-control" id="ghichu" name="ghichu" required>
                        <option value="giao nhanh">Giao Nhanh</option>
                        <option value="giao chậm">Giao Chậm</option>
                        <option value="Ngay và Luôn">Ngay và Luôn</option>
                    </select>
                </div>

                <h2>Phương thức thanh toán</h2>
                <div class="payment-methods">
                    <div class="form-group">
                        <input style="width:20px" type="radio" id="payment_cod" name="payment_method" value="cod" required>
                        <label for="payment_cod" style="width:350px">Thanh toán khi nhận hàng (COD)</label>
                    </div>
                    <div class="form-group">
                        <input style="width:20px" type="radio" id="payment_bank" name="payment_method" value="bank_transfer" required>
                        <label for="payment_bank" style="width:300px">Chuyển khoản ngân hàng</label>
                    </div>
                </div>
                <a href="{{ route('GioHang.index') }}" class="btn btn-secondary">Quay lại giỏ hàng</a>
                <button type="submit" class="btn btn-primary">Đặt hàng</button>
            </form>
        </div>

        <!-- Thông tin đơn hàng -->
        <div class="checkout-right">
    <h2>Thông tin đơn hàng</h2>
    @php
    $tongTien = 0;
    @endphp
    @foreach ($cartItems as $cartItem)
        @if ($cartItem->sanpham)
            @php
            $sanPham = $cartItem->sanpham;
            $soLuong = $cartItem->SoLuong ?? $cartItem->qty;
            $tongTien += $sanPham->Gia * $soLuong;
            @endphp
            <div class="order-item">
                <div class="product-info">
                    <div class="product-image">
                        <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $sanPham->AnhDaiDien) }}" alt="{{ $sanPham->TenSanPham }}">
                    </div>
                    <div class="product-details">
                        <p><strong>Sản phẩm:</strong> {{ $sanPham->TenSanPham }}</p>
                        <p><strong>Số lượng:</strong> {{ $soLuong }}</p>
                        <p><strong>Giá:</strong> {{ number_format($sanPham->Gia, 0, ',', '.') }}₫</p>
                        <p><strong>Tổng:</strong> {{ number_format($sanPham->Gia * $soLuong, 0, ',', '.') }}₫</p>
                    </div>
                </div>
            </div>
            <hr>
        @endif
    @endforeach
    <div class="order-total">
        <h4>Tổng tiền: <strong>{{ number_format($tongTien, 0, ',', '.') }}₫</strong></h4>
    </div>
</div>

    </div>
</div>

@include('includes.footer')
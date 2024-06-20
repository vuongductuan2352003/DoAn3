<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.5;
        }

        ul {
            padding-left: 20px;
        }

        li {
            color: #777;
        }

        strong {
            color: #333;
        }

        .product-image {
            max-width: 100px;
            margin-right: 20px;
        }

        .product-details {
            display: inline-block;
            vertical-align: top;
        }
        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .product-image img {
            width: 100px; /* Điều chỉnh kích thước hình ảnh theo ý muốn */
            height: auto;
            margin-right: 20px;
        }
        .footer {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cảm ơn bạn đã đặt hàng!</h1>
        <p>Chào {{ $customer->TenKH }},</p>
        <p>Cảm ơn bạn đã đặt hàng từ cửa hàng của chúng tôi. Dưới đây là thông tin đơn hàng của bạn:</p>
        <ul>
            @foreach ($order->chiTietHoaDon as $item)
                <li>
                    <div class="product-image">
                    <img src="{{ $message->embed(public_path('ĐỒ GỖ MỸ NGHỆ/' . $item->sanPham->AnhDaiDien)) }}" alt="{{ $item->sanPham->TenSanPham }}">
                    </div>
                    <div class="product-details">
                        <p><strong>{{ $item->sanPham->TenSanPham }}</strong></p>
                        <p>Số lượng: {{ $item->SoLuong }}</p>
                        <p>Giá: {{ number_format($item->TongGia, 0, ',', '.') }}₫</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <p><strong>Tổng giá trị đơn hàng: {{ number_format($order->TongGia, 0, ',', '.') }}₫</strong></p>
        <p>Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận đơn hàng và giao hàng.</p>
        <p>Trân trọng,<br>Cửa hàng</p>
    </div>
</body>
</html>

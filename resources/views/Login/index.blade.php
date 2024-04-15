<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Thêm Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>

    <div id="login">
        <div id="logo">
            <a href=""><img id="img-logo" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}" alt=""> </a>
        </div>
        <div id="login-1">
            <h2  >LOGIN</h2>
        </div>
<form action="" >
    @csrf
    <div id="login-2">

            <div class="email">
                <label for="email">Địa chỉ email</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="password">
                <label for="password">Mật khẩu</label>
                <div style="display: flex;">
                    <input type="password" id="password" name="password" style="width: 300px" required>
                    <input style="width: 20px;" type="checkbox" id="showPassword">
                </div>

            </div>


            <button class="login" onclick="login()" type="button"> Login </button>
            <div class="register">
    Bạn mới đến Đồ Gỗ Vương Tuấn?<a href=""> Đăng Ký! </a>
</div>
        </div>
</form>
        



    </div>



    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>
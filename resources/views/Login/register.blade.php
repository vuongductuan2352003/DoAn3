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
    @if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
    @endif
    <div id="login" style="height: 700px;">
        <div id="logo">
            <a href=""><img id="img-logo" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}" alt="">
            </a>
        </div>
        <div id="login-1">
            <h2 class="background-lg-sg"  >SIGN UP</h2>
        </div>

        <form action="{{ route('registerr') }}" method="POST">
            @csrf
            <div id="signup-3">
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" placeholder="Username@gmail.com" value="{{ old('email') }}" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">phone</label>
                    <input id="phone" name="phone" type="phone" placeholder="phone" />
                    <!-- @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror -->
                </div>
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="username">User Name</label>
                    <input id="name" type="name" name="name" placeholder="User name" value="{{ old('name') }}" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">Password</label>
                    <input id="password" name="password" type="password" placeholder="password" />
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">Confirm Password</label>
                    <input id="password_confirmation" type="password" placeholder="Confirm password" name="password_confirmation" required />
                    @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              
                <button class="signup" type="submit">Sign up</button>
                <div class="register">
    Bạn mới đến Đồ Gỗ Vương Tuấn?<a href=""> Đăng Ký! </a>
</div>
            </div>
        </form>

    </div>

    </form>

    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>
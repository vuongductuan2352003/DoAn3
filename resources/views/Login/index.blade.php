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

<body ng-ap="APIDOGOMYNGHE" ng-controller="LoginController">
    <div id="login">
        <div id="logo">
            <a href=""><img id="img-logo" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}" alt="">

            </a>

        </div>

        <div id="login-signup">
            <h2 class="background-lg-sg" style="text-align:center;float:left;" id="login-2" class="zoomable">LOGIN</h2>
            <h2 class="background-lg-sg" style="text-align:center;float:left;margin-left:30px" id="signup-2" class="zoomable">SIGN UP</h2>
        </div>



     
        <form action="{{ route('registerr') }}" method="POST">
            @csrf
            <div id="signup-3">
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" placeholder="Username@gmail.com" />
                </div>
                @if ($errors->has('email'))
                <span class="error-message">
                    {{ $errors->first('email') }}
                </span>
                @endif
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="username">User Name</label>
                    <input id="name" type="name" name="name" placeholder="User name" />
                </div>
                @if ($errors->has('name'))
                <span class="error-message">
                    {{ $errors->first('name') }}
                </span>
                @endif
                <div class="email" style="height: 30px;margin-left:10px ">
                    <label for="email">Password</label>
                    <input id="password" name="password" type="password" placeholder="password" />

                </div>
                @if ($errors->has('password'))
                <span class="error-message">
                    {{ $errors->first('password') }}
                </span>
                @endif
                <div class="email" style="height: 30px;margin-left:10px ">
            <label for="email">Confirm Password</label>
            <input id="password_confirmation" type="password" placeholder="Confirm password" name="password_confirmation" required />
        </div>



                <button class="signup" type="submit">Sign up</button>
            </div>
        </form>
    </div>

    </form>

    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>
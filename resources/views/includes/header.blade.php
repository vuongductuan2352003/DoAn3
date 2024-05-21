<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <link rel="shortcut icon" href="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/10.png') }}"
        type="image/x-icon">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/includes.css') }}">
   
</head>
<body>

    <header>
        <section class="TieuDeGHDN">
            <nav>
                <a href="" style="color: black;width:500px"><strong style="color: red;">Showroom:</strong> Phiên Thành , Tân Trường ,Cẩm Giàng,Hải Dương  | Hotline:&nbsp <a href="0868728765"> <strong style="color: #5a4137;width:30px"> 0868728765 </strong>
                    </a></a>
                <span><i class="fa-solid fa-magnifying-glass" style="margin-left:520px; color:#5a4137"></i></span>
                <a href="{{url('Gio-Hang')}}" class="GioHang-hover"> <span class="fa-solid fa-cart-shopping " style="color: #5a4137"></span> Giỏ hàng </a>
               
                @if (Auth::check())
                                    <a class="users">
                               
                                        <i  class="fa-solid fa-user"></i> <span>{{ Auth::user()->name }}</span> 
                                    </a>
                                    <div class="details-users">
                                        <a href="">
                                            <p class="details-users1">
                                                Thông tin tài khoản
                                            </p>
                                        </a>
                                        <a href="">
                                            <p class="details-users1">
                                                Đơn hàng của tôi
                                            </p>
                                        </a>
                                        <a href="">
                                            <p class="details-users1">
                                                Trung tâm hỗ trợ
                                            </p>
                                        </a>
                                        <a href="{{ route('logout') }}">
                                            <p class="details-users1">
                                                Đăng xuất
                                            </p>
                                        </a>
                                    </div>
                                   
                                @else
                                    <a href="{{ route('login') }}" class="login-login">
                                    <i   class="fa-solid fa-circle-user"></i>
                                    <span >Đăng Nhập</span>
                                    </a>
                                @endif
                            
            </nav>
        </section>
        <section class="MenuTrangChu">

            <div class="logo">
           
        <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}"style="height: 65px; width: 260px;margin-left:120px" alt="Ảnh Đại Diện">
  
            </div>
            <div class="MenuTrangChuu">
                <nav>
             
                    <a href="{{url('hi')}}" style="color: #B87209;"><i class="fa-solid fa-house"></i> Trang chủ </a>
                    <a href="{{url('ve-chung-toi')}}">Về chúng tôi</a>
                    <a href="">Dịch vụ</a>
                    <a href="{{url('san-pham')}}">Sản phẩm đẹp <i class="fa-solid fa-chevron-down" style="font-size: 12px;color:#B87209"></i>
                    <ul class="SanPhamDep-menu">
                        <li></li>
                    </ul>

                
                </a>
                    <a href="{{url('Tin-Tuc')}}">Tin Tức</a>
                    <a href="">Sản phẩm thực tế</a>
                    <a href="{{url('lien-he')}}">Liên hệ</a>  
                </nav>
            </div>
         
        </section>
        
    </header>
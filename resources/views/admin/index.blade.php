   <!DOCTYPE html>
   <html lang="en" data-bs-theme="dark">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>QUẢN TRỊ VIÊN</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
       <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   </head>

   <body>
       <div class="wrapper">
           <aside id="sidebar" class="js-sidebar">
               <!-- Content For Sidebar -->
               <div class="h-100">
                   <div class="sidebar-logo">
                       <a href="#">ĐỒ GỖ VƯƠNG TUẤN</a>
                   </div>
                   <ul class="sidebar-nav">
                       <li class="sidebar-header">
                           QUẢN TRỊ VIÊN
                       </li>
                       <li class="sidebar-item" id="click2">
                           <a href="#" class="sidebar-link">
                               <i class="fa-solid fa-list pe-2"></i>
                               Hóa Đơn
                           </a>
                       </li>
                       <li class="sidebar-item" id="click1">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2" id="SanPham"></i>
                               Sản Phẩm
                           </a>

                       </li>
                       <li class="sidebar-item" id="click3">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-sliders pe-2" id="Khachhang"></i>
                               Khách Hàng
                           </a>
                           <!-- <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 2</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 3</a>
                            </li>
                        </ul> -->
                       </li>
                       <li class="sidebar-item">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                               Tài khoản
                           </a>
                           <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                               <li class="sidebar-item">
                                   <a href="#" class="sidebar-link">Thông tin tài khoản</a>
                               </li>
                               <li class="sidebar-item">
                                   <a href="#" class="sidebar-link">Đổi mật khẩu</a>
                               </li>
                               <!-- <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Forgot Password</a>
                            </li> -->
                           </ul>
                       </li>

                   </ul>
               </div>
           </aside>
           <div class="main">
               <nav class="navbar navbar-expand px-3 border-bottom">
                   <button class="btn" id="sidebar-toggle" type="button">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="h" style="margin-left:400px;">
                       <h3 class="hh">QUẢN TRỊ VIÊN</h3>
                       <h3 class="hhh">QUẢN TRỊ VIÊN</h3>
                   </div>
                   <div class="navbar-collapse navbar">
                       <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                               <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                   <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                               </a>

                               <div class="dropdown-menu dropdown-menu-end">
                                   <a href="#" class="dropdown-item">Profile</a>
                                   <a href="#" class="dropdown-item">Setting</a>
                                   <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
                               </div>
                           </li>
                       </ul>
                   </div>
               </nav>
               <main class="content px-3 py-2 p">
                   
                   <div class="SanPham" id="main1" style="display:none">
                       <div class="sanpham">SẢN PHẨM</div>
                       <div>
                           <table>
                               <tr id="defaut">


                                   <th style="width: 5%">STT</th>
                                   <th style="width: 5%">Mã Sản Phẩm </th>
                                   <th style="width: 12%">Tên Danh Mục</th>
                                   <th style="width: 15%">Tên </th>
                                   <th style="width: 8%">Giá </th>
                                   <th style="width: 5%">Số Lượng</th>
                                   <th style="width: 15%">Nhà Sản Xuất</th>
                                   <th style="width: 5%">Bảo Hành</th>

                                   <th style="width: 10%">Hành động</th>
                               </tr>
                           </table>

                           <div class="menu-sanpham">
                               @php $i = 1 @endphp <!-- Khởi tạo biến đếm -->
                               @foreach ($admin as $sanPham)

                               <table class="table">
                                   <tr>
                                       <td style="width: 5%">{{ $i++ }}</td>
                                       <td style="width: 5%">{{ $sanPham->MaSanPham }}</td>
                                       <td style="width: 12%">{{$sanPham->danhmuc->TenDanhMuc }}</td>
                                       <td id="hienthi-img" style="width: 15%">{{ $sanPham->TenSanPham }}
                                           <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $sanPham->AnhDaiDien) }}" alt="">
                                       </td>
                                       <td style="width: 8%">{{ number_format($sanPham->Gia, 0, ',', '.') }}₫</td>
                                       <td style="width: 5%">{{ $sanPham->SoLuong }}</td>
                                       <td style="width: 15%">{{ $sanPham->NhaSanXuat }}</td>
                                       <td style="width: 5%">{{ $sanPham->BaoHanh }}</td>
                                       <td style="width: 10%">
                                           <div>
                                               <button onclick="showEditModal('{{$sanPham->MaSanPham}}')"><i class="fa fa-wrench"> </i></button>
                                               <!-- Sử dụng onclick để gọi hàm confirmDelete -->
                                               <button type="button" onclick="confirmDelete('{{$sanPham->MaSanPham}}')"><i class="fa fa-trash"></i></button>
                                           </div>
                                       </td>
                                   </tr>
                               </table>
                               <!-- Form xác nhận xóa -->
                               <form id="deleteForm{{$sanPham->MaSanPham}}" method="POST" action="{{ route('admin.delete', ['MaSanPham' => $sanPham->MaSanPham]) }}" style="display: none;">
                                   @csrf
                                   @method('DELETE')
                               </form>
                               @endforeach




                           </div>














                           <!-- Modal sửa sản phẩm -->
                           <div id="editModal">
                               <form id="editForm" method="POST">
                                   @csrf
                                   @method('PUT')
                                   <input type="hidden" id="editMaSanPham" name="MaSanPham">
                                   <label for="editTenSanPham">Tên Sản Phẩm:</label>
                                   <input type="text" id="editTenSanPham" name="TenSanPham" required>
                                   <label for="editGia">Giá:</label>
                                   <input type="text" id="editGia" name="Gia" required>
                                   <label for="editSoLuong">Số Lượng:</label>
                                   <input type="text" id="editSoLuong" name="SoLuong" required>
                                   <label for="editNhaSanXuat">Nhà Sản Xuất:</label>
                                   <input type="text" id="editNhaSanXuat" name="NhaSanXuat" required>
                                   <label for="editBaoHanh">Bảo Hành:</label>
                                   <input type="text" id="editBaoHanh" name="BaoHanh" required>
                                   <button type="submit">Sửa</button>
                               </form>
                           </div>












                       </div>
                   </div>
                   <div class="container" id="main2" style="display:block">
                       <h2 class="invoice-title">Thông tin hóa đơn</h2>
                       <table class="invoice-table">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th class="wide-column">Tên</th>
                                   <th>Phone</th>
                                   <th class="wide-column">Email</th>
                                   <th class="wide-column">Địa Chỉ</th>
                                   <th>Giao Hàng</th>
                                   <th>Chi Tiết</th>
                                   <th class="wide-column">Ngày</th>
                                   <th>Trạng Thái</th>
                                   <th>Tùy Biến</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($hoaDon as $hoaDons)
                               @if ($hoaDons->khachhang)


                               <tr>
                                   <td>{{ $hoaDons->Id }}</td>
                                   <td class="wide-column">{{ $hoaDons->khachhang->TenKH }}</td>
                                   <td>{{ $hoaDons->khachhang->SDT }}</td>
                                   <td class="wide-column">{{ $hoaDons->khachhang->Email }}</td>
                                   <td class="wide-column">{{ $hoaDons->khachhang->DiaChi }}</td>
                                   <td>{{ $hoaDons->GhiChu }}</td>
                                   <td>Chi Tiết</td>
                                   <td class="wide-column">{{ $hoaDons->NgayTao }}</td>
                                   <td>
                                       @if ($hoaDons->TrangThai == '0')

                                       <form action="{{ route('hoadon.duyet', $hoaDons->MaHoaDon) }}" method="POST">
                                           @csrf
                                           @method('PATCH')
                                           <button type="submit" class="btn btn-warning">Chưa Xác Nhận</button>
                                       </form>
                                       @else
                                       <button class="btn btn-success" disabled>Đã Xác Nhận</button>
                                       @endif

                                   <td>
                                       <form id="deleteFormmm{{ $hoaDons->MaHoaDon }}" action="{{ route('hoadon.delete', $hoaDons->MaHoaDon) }}" method="POST" style="display: none;">
                                           @csrf
                                           @method('DELETE')
                                       </form>
                                       <button type="button" class="btn btn-danger" onclick="confirmDeleteee('{{$hoaDons->MaHoaDon }}')"><i class="fa fa-trash"></i> Xóa</button>
                                   </td>
                                   @endif


                                   @endforeach
                           </tbody>
                       </table>
                   </div>



                   <div id="main3" style="display:none">
                       <h3 class="card-title">Thông tin khách hàng</h3>
                       <div class="container">
                           @foreach ($khachHang as $khachhang)
                           <div class="card">
                               <div class="card-body">
                                   <div class="profile-image">
                                       <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $khachhang->img) }}" alt="Customer Image">
                                   </div>
                                   <div class="profile-info">
                                       <p><strong>Mã khách hàng:</strong> {{ $khachhang->Id }}</p>
                                       <p><strong>Tên khách hàng:</strong> {{ $khachhang->TenKH }}</p>
                                       <p><strong>Giới tính:</strong> {{ $khachhang->GioiTinh }}</p>
                                       <p><strong>Địa chỉ:</strong> {{ $khachhang->DiaChi }}</p>
                                       <p><strong>Số điện thoại:</strong> {{ $khachhang->SDT }}</p>
                                       <p><strong>Email:</strong> {{ $khachhang->Email }}</p>
                                       <p><strong>Tài khoản:</strong> {{ $khachhang->id_user }}</p>
                                       <div class="actions">
                                           <button onclick="showEditModall('{{$khachhang->Id}}')"><i class="fa fa-wrench"></i> Sửa</button>
                                           <button type="button" onclick="confirmDeletee('{{$khachhang->Id}}')"><i class="fa fa-trash"></i> Xóa</button>
                                       </div>
                                       <form id="deleteFormm{{$khachhang->Id}}" method="POST" action="{{ route('khachhang.delete', ['Id' => $khachhang->Id]) }}" style="display: none;">
                                           @csrf
                                           @method('DELETE')
                                       </form>
                                   </div>
                               </div>
                           </div>
                           @endforeach
                       </div>
                   </div>
                   <div id="main4">

                   </div>
               </main>
               <a href="#" class="theme-toggle">
                   <i class="fa-regular fa-moon"></i>
                   <i class="fa-regular fa-sun"></i>
               </a>

           </div>


       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <script src="{{ asset('js/admin.js') }}"></script>
   </body>

   </html>




   <!--   @foreach ($hoaDon as $donHang)

                       <div class="card">
                           <div class="card-header">
                               Hóa đơn #{{ $donHang->MaHoaDon }}
                           </div>
                           <h5 class="card-title mt-4">Thông tin đơn hàng</h5>
                           @if ($donHang && $donHang->chitiethoadon->count() > 0)
                           <ul class="list-group">
                               @foreach ($donHang->chitiethoadon as $chiTiet)
                               @if ($chiTiet->sanpham) 
                               <li class="list-group-item">
                                   <div class="row">
                                       <div class="col-md-2">
                                           <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $chiTiet->sanpham->AnhDaiDien) }}" alt="{{ $chiTiet->sanpham->TenSanPham }}" class="img-fluid product-image">
                                       </div>
                                       <div class="col-md-10">
                                           <p><strong>Sản phẩm:</strong> {{ $chiTiet->sanpham->TenSanPham }}</p>
                                           <p><strong>Số lượng:</strong> {{ $chiTiet->SoLuong }}</p>
                                           <p><strong>Giá:</strong> {{ number_format($chiTiet->sanpham->Gia, 0, ',', '.') }}₫</p>
                                           <p><strong>Tổng:</strong> {{ number_format($chiTiet->TongGia, 0, ',', '.') }}₫</p>
                                       </div>
                                   </div>
                               </li>
                               @endif
                               @endforeach
                           </ul>
                           <h5 class="card-title mt-4">Tổng tiền: <strong>{{ number_format($donHang->TongGia, 0, ',', '.') }}₫</strong></h5>
                           @else
                           <p>Không có chi tiết đơn hàng nào để hiển thị.</p>
                           @endif
                       </div>

                   </div>

                   @endforeach -->
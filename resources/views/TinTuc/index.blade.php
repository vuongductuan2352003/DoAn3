@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/tintuc.css') }}">
<main>

<section class="tt-left">
@foreach ($tintuc as $tintucs )
            
    <div class="news-item">
        <div class="date-box">
            <span class="day">{{ $tintucs->Ngay }}</span>
            <span class="month">{{ $tintucs->Thang }}</span>
        </div>
        <img class="news-img" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $tintucs->img) }}" alt="News Image">
        <div class="news-content">
            <span class="mota1">{{ $tintucs->mota1 }}</span>
            <span class="mota2">{{ $tintucs->mota2 }}</span>
        </div>
    </div>
              
                @endforeach

</section>
<section class="tt-right">  <span style="color: black;font-size:30px;text-align:center;margin-left:80px;">TÌM KIẾM BÀI VIẾT</span>
<div class="search-container">
        
            <input type="text" placeholder="Tìm kiếm bài viết..." class="search-input">
            <button class="search-button">Tìm kiếm</button>
        </div>

        <div class="branches">
            <h2>Hệ thống chi nhánh</h2>
            <ul class="branch-list">
                <li class="branch-item">Chi nhánh 1: Tân Trường - Cẩm Giàng - Hải Dương</li>
                <li class="branch-item">Chi nhánh 2: Nhân Hòa - Mỹ Hào - Hưng Yên</li>
                <li class="branch-item">Chi nhánh 3: Dị Sử - Mỹ Hào - Hưng Yên</li>
                <!-- Thêm chi nhánh nếu cần -->
            </ul>
        </div>

        <div class="new-posts">
            <h2>Bài viết mới</h2>
            <div class="post">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/6.jpg') }}" alt="Post Image" class="post-img">
                <div class="post-content">
                    <h3 class="post-title">20+ Mẫu giường ngủ đẹp</h3>
                    <p class="post-excerpt">Cùng điểm lại các mẫu giường hot...</p>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/7.jpg') }}" alt="Post Image" class="post-img">
                <div class="post-content">
                    <h3 class="post-title">Thiết kế văn phòng theo hướng cổ điển !</h3>
                    <p class="post-excerpt">Đan xen giữa cổ điển và hiện đại của văn phòng...</p>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/4.jpg') }}" alt="Post Image" class="post-img">
                <div class="post-content">
                    <h3 class="post-title">Top 10 sofa đẹp!</h3>
                    <p class="post-excerpt">10 sofa đc bình chọn đẹp nhất từ khách hàng...</p>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/5.jpg') }}" alt="Post Image" class="post-img">
                <div class="post-content">
                    <h3 class="post-title">Không gian bếp ấm cúng của gia đình Việt!</h3>
                    <p class="post-excerpt">Chúng ta cùng xem các mẫu thiết kế không gian bếp...</p>
                </div>
            </div>
         
            <!-- Thêm bài viết mới nếu cần -->
        </div>
</section>
</main>



@include('includes.footer')
@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/trangChu.css') }}">
<main>
    <section class="Slide-main">

        <div class="banner-slider">

            <div id="slider-img">
                @foreach ($slides as $slide )
                @if ($slide->id == 3)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten">
                    <div class="title">NHÀ THIẾT KẾ</div>
                    <div class="topic">VƯƠNG ĐỨC TUẤN <br>

                        Nghệ Thuật Thiết Kế Đồ Gỗ</div>
                    <div class="des">
                        Vương Đức Tuấn, nhà thiết kế đồ gỗ mỹ nghệ, là người nghệ nhân tài năng với sự kết hợp tinh tế giữa truyền thống và hiện đại. Những tác phẩm của ông không chỉ là đồ nội thất mà còn là những tác phẩm nghệ thuật sống, đặc trưng bởi chi tiết tỉ mỉ và chất lượng tốt. Sự sáng tạo và đam mê của Vương Đức Tuấn đã tạo ra những không gian sống độc đáo, phản ánh vẻ đẹp và tinh thần nghệ thuật của đồ gỗ.
                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imgg">
                @foreach ($slides as $slide )
                @if ($slide->id == 4)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG KHÁCH </div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
            color:#363636; border-radius: 10px;line-height:30px">
                        Nội thất phòng khách chất liệu gỗ của chúng tôi mang đến không gian ấm cúng và sang trọng. Sự kết hợp tinh tế giữa các loại gỗ tự nhiên và thiết kế độc đáo tạo nên những chiếc sofa, bàn trà và kệ trang trí vô cùng ấn tượng. Bạn sẽ tận hưởng không gian thoải mái và đẳng cấp trong từng chi tiết, là sự hòa quyện hoàn hảo giữa nét truyền thống và hiện đại. </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 5)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG NGỦ </div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
         color:#363636; border-radius: 10px;line-height:30px">
                        Nội thất phòng ngủ chất liệu gỗ của chúng tôi kết hợp vẻ đẹp tự nhiên của gỗ cao cấp với thiết kế hiện đại. Bộ sản phẩm bao gồm giường ngủ, tủ quần áo và bàn trang điểm, tạo nên không gian ấm cúng và sang trọng trong phòng ngủ của bạn. Sự tinh tế trong chi tiết và chất lượng bền bỉ là ưu điểm nổi bật của nội thất phòng ngủ chúng tôi.




                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imgggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 6)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG TRẺ EM</div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
            color:#363636; border-radius: 10px;line-height:30px;">

                        Nội thất trẻ em chất liệu gỗ của chúng tôi được thiết kế ngắn gọn và an toàn, tạo không gian phòng ngủ thoải mái và thân thiện với trẻ. Sử dụng gỗ tự nhiên, sản phẩm của chúng tôi đảm bảo chất lượng và an toàn, với thiết kế chuyên nghiệp và chi tiết bo tròn để bảo vệ trẻ nhỏ.
                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imggggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 7)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">VĂN PHÒNG</div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
            color:#363636; border-radius: 10px;line-height:30px">

                        Nội thất văn phòng chất liệu gỗ của chúng tôi: đẹp, ấm áp, và chức năng. Thiết kế đơn giản nhưng sang trọng, kết hợp với chất liệu gỗ tự nhiên chọn lọc. Bàn làm việc và kệ sách thông thoáng, tối ưu hóa không gian làm việc. Sự linh hoạt và tiện ích là ưu tiên hàng đầu, mang lại không gian làm việc thoải mái và hiệu quả.</div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="banner-sliderr">

            <div class="banner-itemm">
                <div>
                    @foreach ($slides as $slide )
                    @if ($slide->id == 3)
                    <img id="slide-im" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide" style="margin-top:200px">
                        GIỚI THIỆU

                    </div>


                </div>
            </div>
            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 4)
                    <img id="slide-imm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide">
                        NỘI THẤT <br> PHÒNG KHÁCH

                    </div>

                </div>
            </div>
            <div class="banner-itemm">
                <div>
                    @foreach ($slides as $slide )
                    @if ($slide->id == 5)
                    <img id="slide-immm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach


                    <div class="tieude-slide">
                        NỘI THẤT <br>PHÒNG ĂN

                    </div>

                </div>
            </div>

            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 6)
                    <img id="slide-immmm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach
                    <div class="tieude-slide">
                        NỘI THẤT <br>PHÒNG TRẺ EM

                    </div>



                </div>
            </div>
            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 7)
                    <img id="slide-immmmm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide">
                        NỘI THẤT <br> VĂN PHÒNG

                    </div>


                </div>
            </div>

        </div>


    </section>

    <section id="main-top-2">
        <div id="text-main-top-2">
            <div class="h">
                <h3 class="hh">THÂN GỬI</h3>
                <h3 class="hhh">THÂN GỬI</h3>
            </div>
            <div id="text-MT1">
                <h3><span style="font-size: 120%"><strong><span style="color: #5a4137">GIÁ TRỊ CỐT LÕI
                                MÀ</span> <span style="color: #e08b1b">ĐỒ GỖ VƯƠNG TUẤN</span> <span style="color: #5a4137">MANG LẠI CHO BẠN</span></strong></span></h3>
                <p><span style="color: #000000">Nhắc đến nhà là nhắc đến nơi thiêng liêng ấm cúng, nơi mà ai
                        ai cũng muốn trở về để được tận hưởng cảm giác yên bình, cảm giác sum vầy, bỏ bên
                        ngoài cánh cửa kia những khó khăn bộn bề của cuộc sống.</span></p>
                <p><span style="color: #000000">Chúng tôi, <a style="color: #000000;text-decoration: none;" href="index.html">ĐỒ GỖ VƯƠNG TUẤN</a> luôn mong muốn mang đến cho bạn một không
                        gian để bạn cảm thấy “đây đích thực là nơi yêu dấu của mình rồi!” Và với mong muốn
                        đó, chúng tôi từng ngày nỗ lực để thấu hiểu bạn và mang đến cho bạn những sản phẩm
                        tạo nên giá trị sống thực sự.</span></p>
                <div id="LHTV">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin-left:10px;color:#a03522;text-indent:15px;">
                            <strong>Liên hệ tư vấn</strong></span>
                        <i class="gg-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
        <div id="video-main">
            <img class="video-main" src="https://dogolegia.vn/wp-content/uploads/2022/09/furniture3.jpg" alt="">
            <div class="block">
                <a href="https://www.youtube.com/watch?v=QQYuhqsJHSs">
                    <span class="play-button"> <span></span>
                </a>

                </span>
                <div>

                </div>
            </div>

        </div>

    </section>
    <section id="main-middle-1">
        <div class="h" id="DVCVT" style="margin-left:500px">
            <h3>
                <span class="hh">DỊCH VỤ CỦA VƯƠNG TUẤN</span>
            </h3>
            <h3><span class="hhh">DỊCH VỤ CỦA VƯƠNG TUẤN</span></h3>
        </div>
        <div id="img-middle-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/b-1.png" alt="">
        </div>
        <div id="img-middle-2">
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Leyla-Salayeva-5.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>BIỆT THỰ/LIỀN KỀ</strong></h2>
                </div>
            </div>
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/nhung-luu-y-can-biet-khi-thiet-ke-thi-cong-noi-that-chung-cu-dep-va-hien-dai.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>CHUNG CƯ/CĂN HỘ</strong></h2>
                </div>
            </div>
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/nha-dep-tuong-dep.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>NHÀ PHỐ</strong></h2>
                </div>
            </div>
        </div>
    </section>

    <section id="main-middle-2">
        <div class="h" id="CHSP">
            <h3>
                <span class="hh">CỬA HÀNG SẢN PHẨM</span>
            </h3>
            <h3><span class="hhh">CỬA HÀNG SẢN PHẨM</span></h3>
        </div>
        <div id="CHSP-text">
            <p style="text-align: center; width:700px; height:20px;color:#000000"><strong>CÙNG THAM QUAN <span style="color: #ed1c24">1000+</span> SẢN PHẨM ĐƯỢC CẬP NHẬT MỚI NHẤT CỦA CHÚNG
                    TÔI</strong></p>
            <p style="margin: 10px 250px;"><img decoding="async" loading="lazy" class="aligncenter" src="https://dogolegia.vn/wp-content/uploads/2022/09/b.png" alt="" width="182" height="12" /><br />
        </div>
        <div class="zoomin-1 content-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/noi-that-phong-khach-banner.jpeg" alt="">
            <div class="text-zoom-2">
                <div class="border-zoom-1">
                </div>
                <h3 style="margin:25px 0px;"><span><strong>NỘI THẤT PHÒNG KHÁCH</strong></span></h3>
                <div class="XCT">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                            <strong>xem chi tiết</strong></span>
                        <i class="gg-chevron-right" id="gg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="zoomin-2 content-2">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/z3615458239697_006f8275a0e59ba6187f91397414212c-1024x576.jpg" alt="">
            <div class="text-zoom-3">
                <div class="border-zoom-2">
                </div>
                <h3 style="margin:20px 0px;"><span><strong>NỘI THẤT TRẺ EM</strong></span></h3>
                <div class="XCT" style="margin:0px 150px;">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                            <strong>xem chi tiết</strong></span>
                        <i class="gg-chevron-right" id="ggg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="zoomin-2 content-2">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/dinning-table-banner-1.jpeg" alt="">
            <div class="text-zoom-3">
                <div class="border-zoom-2">
                </div>
                <h3 style="margin:20px 0px;"><span><strong>NỘI THẤT PHÒNG BẾP</strong></span></h3>
                <div class="XCT" style="margin:0px 150px;">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                            <strong>xem chi tiết</strong></span>
                        <i class="gg-chevron-right" id="gggg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="zoomin-1 content-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/open-book-on-yellow-duvet-in-small-cozy-bedroom-in-2022-02-02-04-48-38-utc-scaled-e1663304310740-1024x683.jpeg" alt="">
            <div class="text-zoom-2">
                <div class="border-zoom-1">
                </div>
                <h3 style="margin:25px 0px;"><span><strong>NỘI THẤT PHÒNG NGỦ</strong></span></h3>
                <div class="XCT">
                    <a href="/lien-he" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                            <strong>xem chi tiết</strong></span>
                        <i class="gg-chevron-right" id="ggggg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="SPCHINH">
        <div>
            <ul>
                <li id="block1" style="width:84px;background-color: #5A4137;">
                    <span>TẤT CẢ</span>

                </li>
                <li id="block2">
                    <span>NỘI THẤT PHÒNG KHÁCH</span>


                </li>
                <li id="block3"> <span>NỘI THẤT PHÒNG NGỦ</span></li>
                <li id="block4"> <span> NỘI THẤT PHÒNG BẾP</span> </li>
            </ul>

        </div>
        <div id="KHUNG-SP">
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/x-mau-giuong-ngu-dep-hien-dai-go-cong-nghiep-LG-GN262-1024x855.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU GIƯỜNG NGỦ HIỆN ĐẠI LG-GN262</a></p>
                    <strong style="font-size: 23px;color:#BD1003">6.900.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/noi-that-phong-ngu-dep-hien-dai-cao-cap-LG-BPN569-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU THIẾT KẾ PHÒNG NGỦ 15M2 ĐẸP LG-BPN569</a></p>
                    <strong style="font-size: 23px;color:#BD1003">36.255.563<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/thiet-ke-noi-that-phong-ngu-tre-em-dep-hien-dai-LG-PTE221-1-scaled-1-2048x1366.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU PHÒNG NGỦ TRẺ EM LG-PTE221</a></p>
                    <strong style="font-size: 23px;color:#BD1003">22.954.300<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-da-ni-vang-phong-khach-dep-hien-dai-ha-noi-sf304-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA VĂNG PHÒNG KHÁCH ĐẸP LG-SF304</a></p>
                    <strong style="font-size: 23px;color:#BD1003">37.200.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/x-mau-giuong-ngu-dep-hien-dai-go-cong-nghiep-LG-GN260.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU GIƯỜNG NGỦ HIỆN ĐẠI LG-GN260</a></p>
                    <strong style="font-size: 23px;color:#BD1003">11.856.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Hinh-anh-giao-hang-sofa-go-cao-cap-hien-dai-go-soi-go-oc-cho-dogolegia-976.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ HIỆN ĐẠI LG-SG241 (BÀY MẪU)</a></p>
                    <strong style="font-size: 23px;color:#BD1003">37.800.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>

        </div>
        <div id="KHUNG-SPP">
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG215-2.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ CAO CẤP LG-SG215</a></p>
                    <strong style="font-size: 23px;color:#BD1003">29.000.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2023/05/0.-mau-sofa-go-dep-cho-phong-khach-an-tuong-go-soi-LG-SG245-2.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">KIỆT TÁC SOFA GỖ PHÒNG KHÁCH HIỆN ĐẠI LG-SG245</a></p>
                    <strong style="font-size: 23px;color:#BD1003">43.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-dep-cao-cap-phong-khach-SG238-3-1024x689.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ HIỆN ĐẠI LG-SG238</a></p>
                    <strong style="font-size: 23px;color:#BD1003">33.800.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG103-11-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ HIỆN ĐẠI LG-SG140</a></p>
                    <strong style="font-size: 23px;color:#BD1003">28.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG139.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU BÀN GHẾ SOFA GỖ HIỆN ĐẠI LG-SG139</a></p>
                    <strong style="font-size: 23px;color:#BD1003">31.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/tong_hop_hinh_anh_sofa_go_noi_that_giao_khach_hang-27-1024x768.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ CAO CẤP LG-SG138</a></p>
                    <strong style="font-size: 23px;color:#BD1003">23.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>

        </div>
        <div id="KHUNG-SPPP">
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP055-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html"><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp055/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP055</a></a></p>
                    <strong style="font-size: 23px;color:#BD1003">2.400.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP056-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP056</a></p>
                    <strong style="font-size: 23px;color:#BD1003">3.600.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP057-2.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP057</a></p>
                    <strong style="font-size: 23px;color:#BD1003">4.200.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG103-11-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ HIỆN ĐẠI LG-SG140</a></p>
                    <strong style="font-size: 23px;color:#BD1003">28.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG139.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU BÀN GHẾ SOFA GỖ HIỆN ĐẠI LG-SG139</a></p>
                    <strong style="font-size: 23px;color:#BD1003">31.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/tong_hop_hinh_anh_sofa_go_noi_that_giao_khach_hang-27-1024x768.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ CAO CẤP LG-SG138</a></p>
                    <strong style="font-size: 23px;color:#BD1003">23.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>

        </div>
        <div id="KHUNG-SPPPP">
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-tu-bep-dep-hien-dai-go-cong-nghiep-LG-TB038.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU TỦ BẾP HIỆN ĐẠI ĐẸP LG-TB038</a></p>
                    <strong style="font-size: 23px;color:#BD1003">28.850.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-tu-bep-dep-hien-dai-go-cong-nghiep-LG-TB106-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">TỦ BẾP GỖ CÔNG NGHIỆP LG-TB106</a></p>
                    <strong style="font-size: 23px;color:#BD1003">38.050.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-tu-bep-dep-hien-dai-go-cong-nghiep-LG-TB030-2.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU TỦ BẾP HIỆN ĐẠI ĐẸP LG-TB030</a></p>
                    <strong style="font-size: 23px;color:#BD1003">38.650.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG103-11-1.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ HIỆN ĐẠI LG-SG140</a></p>
                    <strong style="font-size: 23px;color:#BD1003">28.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-sofa-go-hien-dai-cao-cap-phong-khach-SG139.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU BÀN GHẾ SOFA GỖ HIỆN ĐẠI LG-SG139</a></p>
                    <strong style="font-size: 23px;color:#BD1003">31.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>
            <div class="MAUSP">

                <div class="img">
                    <a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/tong_hop_hinh_anh_sofa_go_noi_that_giao_khach_hang-27-1024x768.jpg" alt="">
                    </a>

                    <div class="heart">
                        <i style="color:#B87029;margin-top:8px" class="fa-solid fa-heart"></i>
                    </div>
                </div>



                <div id="textttt">
                    <p><a href="/BaiTapLon/Chi_Tiet_SP/Chi_Tiet_SP.html">MẪU SOFA GỖ CAO CẤP LG-SG138</a></p>
                    <strong style="font-size: 23px;color:#BD1003">23.500.000<span>₫</span></strong>
                    <p style="font-size: 12.5px;opacity: 0.8;">
                        Nhà sản xuất: ĐỒ GỖ LÊ GIA
                        Bảo hành: 24 tháng </p>
                </div>
            </div>

        </div>
        <div id="XCH">
            <a href="/BaiTapLon/San_Pham/San_Pham.html">
                <span>Xem cửa hàng</span>

                <i class="gg-chevron-right" aria-hidden="true" style="margin-top:-18px;margin-left:130px"></i>
            </a>

        </div>
    </section>
    <section id="DTT">
        <div id="dtt">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/interior-has-armchair-empty-white-wall_41470-1722.jpg" style="width:100%;height:500px" alt="">
            <div id="DTT-1">
                <h3 style="text-align: center"><span style="font-size: 100%"><strong>NHẬN BÁO GIÁ NỘI THẤT MỚI
                            NHẤT 2022</strong></span></h3>
                <div id="formm">
                    <form action="" style="margin-top:80px">
                        <p><span><input type="text" placeholder="  Họ tên" class="borderr"></span></p>
                        <p><span><input type="text" placeholder="  Số điện thoại" class="borderr"></span></p>
                        <p><span><input type="text" placeholder="  Địa chỉ" class="borderr"></span></p>
                        <p><span><textarea style="height:120px" placeholder=" Mô tả nhu cầu thiết kế, loại hình, địa điểm, mức đầu tư" class="borderr"></textarea></span></p>
                        <p><input type="submit" value="GỬI LIÊN HỆ" class="GLHH"></p>
                    </form>
                </div>
            </div>
            <div id="TC">
                <h2 style="text-align: center"><span style="font-size: 115%;color: #5a4137"><b>Trò chuyện
                            cùng</b></span></h2>
                <h2 style="text-align: center;margin-top:-15px"><span style="font-size: 115%;color: #5a4137"><b>
                            Vương Tuấn</b></span></h2>
                <h4 style="width: 500px;text-align:center;margin-left:30px"><span style="font-size: 16ppx;color: #993300">Chúng tôi sẵn sàng dẫn bạn vào thế giới thú vị
                        của kiến trúc và nội thất</span></h4>
                <div class="button-call">
                    <a href="tel:0938%548%666" target="_self">
                        <i class="fa-solid fa-phone" style="color: #e08b1b; "></i> <span>0868 72 8765</span>
                    </a>
                </div>
                <p style="text-align: center;"><span style="font-size: 16ppx; color: #993300"><strong>Hoặc</strong></span></p>
                <div class="button-call">

                    <a href="http://m.me/534780523324244" target="_self">
                        <i class="fa-brands fa-facebook" style="color: #e08b1b;"></i> <span>Chat Facebook</span>
                    </a>
                </div>

            </div>
        </div>

    </section>

    <section id="DTQT">
        <div class="h" id="DVCLG">
            <h3>
                <span class="hh">ĐỐI TÁC QUAN TRỌNG</span>
            </h3>
            <h3><span class="hhh">ĐỐI TÁC QUAN TRỌNG</span></h3>
        </div>
        <div id="img-middle-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/b-1.png" alt="" style="margin-left:30px;">
        </div>
        <div class="grid-bannerrr" style="width:100%;height:115px;margin-top:40px">
            <div class="slidesss" style="width:500%">
                <input type="radio" name="re" id="raa1">
                <input type="radio" name="re" id="raa2">


                <!-- img -->
                <div class="slideee firstt">

                    <img src=" https://dogolegia.vn/wp-content/uploads/2022/09/acrylics-1.png" alt="">

                </div>
                <div class="slideee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/ancuong-1.png" alt="">



                </div>
                <div class="slideee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/euwindows.png" alt="">



                </div>
                <div class="slideee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/hdmon-1.png" alt="">


                </div>

                <div class="slideee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/LogoMinhLong-out-01_1140-1-1.png" alt="">



                </div>






            </div>


            <div>
                <button class="prevv"><i style="font-size:12px" class="fa-solid fa-chevron-left"></i></button>
                <button class="nextt"><i style="font-size:12px" class="fa-solid fa-chevron-right"></i></button>

            </div>
        </div>

    </section>
    <section>
        <div id="CTTB">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/interior-has-armchair-empty-white-wall_41470-1722.jpg" alt="">
            <div id="CTTB-left">
                <h2 style="margin:180px 60px;"><span style="font-size: 31px;color: #5a4137"><b>Công trình
                            tiêu biểu</b></span></h2>
                <h4 style="margin:-170px 60px;"><span style="color: #000000;font-size: 15px;">Chuyên gia tư vấn
                        thiết kế nội thất hiện
                        đại, dịch vụ uy tín, tin cậy. Là đơn vị số 1 trong lĩnh vực thiết kế nội thất biệt
                        thự, chung cư, nhà phố cao cấp.</span></h4>
                <div style="margin: 200px 60px;" id="CTTB-XT">
                    <a href="/XEMCHITIET">
                        <i class="gg-chevron-right" aria-hidden="true"></i>
                        <span style="float:left;color:black;margin-top:2px">
                            <strong>xem thêm</strong></span>

                    </a>
                </div>



            </div>
            <div id="CTTB-right">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/modern-living-room-with-sofa-decorations_180507-252-1024x577.jpg" alt="">

            </div>
        </div>
    </section>
    <section style="float: left;">
        <div class="grid-bannerr" style="width:100%;height:305px;">
            <div class="slidess" style="width:500%">
                <input type="radio" name="radio-btnn" id="ra5">
                <input type="radio" name="radio-btnn" id="ra6">


                <!-- img -->
                <div class="slidee firsty" style="background-color: rgb(90,65,55);">

                    <div style="width:130px;height:130px;float:left;margin:75px 160px;">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/anh-nguyen-tuan-viet.png" alt="">
                    </div>
                    <div style="margin-top: 50px;width:900px; position: absolute;margin-left:320px;font-size:20px;line-height:30px;">
                        <p><span style="color: #ffffff;font-style:italic">Mình tình cờ được người bạn thân giới
                                thiệu đến Đồ gỗ Vương Tuấn để đặt Sofa cao cấp và đồ gỗ. Bên bạn có rất nhiễu mẫu
                                sofa cao cấp mà giá quá hợp lý so với chất lượng tốt như vậy. Hàng lại có sẵn và
                                giao ngay không phải chờ đợi. Cảm ơn các bạn rất nhiều!</span><br>
                        </p>

                        <strong style="color:white">Anh Tùng - Làm việc tại Tập đoàn Viettel</strong>


                    </div>


                </div>
                <div class="slidee" style="background-color: rgb(90,65,55);width:100%">
                    <div style="width:130px;height:130px;float:left;margin:75px 260px">
                        <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mr-quang.png" alt="">
                    </div>
                    <div style="margin-top: 50px;width:970px;margin-left:-200px;float:left;font-size:20px;line-height:30px;">
                        <p style="color: #ffffff;font-style:italic">Khá kỹ tính trong việc chọn lựa nội thất cho
                            ngôi nhà của mình nhựng tôi thực sự hài lòng khi đến với Đồ Gỗ Lê Gia. Toàn bộ đồ gỗ
                            trong nhà và đặc biệt là bộ Sofa ai đến nhà cũng khen đẹp và chắc chắn. Mọi người
                            xin địa chỉ và tôi đã giới thiệu bạn bè đến&nbsp;bên bạn đặt đồ, và ai cũng hài lòng
                            về sản phẩm bên bạn.<br>

                        </p>

                        <strong style="color:white">A Quang -Công tác tại Bamboo Airway</strong>

                    </div>

                </div>



                <!-- AUTO -->
                <div class="navigation-autoo" style="width:1360px;margin-top: 286px;">
                    <div class="auto-btn11"></div>
                    <div class="auto-btn22"></div>


                </div>





            </div>
            <div style=" position: absolute;margin-top:-200px ">
                <button class="p"> <i class="fa-solid fa-chevron-left"></i></button>
                <button class="n"> <i class="fa-solid fa-chevron-right"></i></button>

            </div>
            <div class="navigation-manuall" style="width:1200px; ">
                <label for="ra5" class="manual-btnn"></label>
                <label for="ra6" class="manual-btnn"></label>


            </div>
        </div>
    </section>
    <section id="CHVYT">
        <div class="h" id="DVCLG">
            <h3>
                <span class="hh">CẢM HỨNG VÀ Ý TƯỞNG</span>
            </h3>
            <h3><span class="hhh">CẢM HỨNG VÀ Ý TƯỞNG</span></h3>
        </div>
        <div id="img-middle-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/b-1.png" alt="" style="margin-left: 30px;">

        </div>
        <div class="grid-bannerrrr" style="width:100%;height:425px">
            <div class="slidessss" style="width:500%">
                <input type="radio" name="rur" id="raaa1">
                <input type="radio" name="rur" id="raaa2">


                <!-- img -->
                <div class="slideeee firsttt">

                    <img src=" https://dogolegia.vn/wp-content/uploads/2021/08/Feedback-tuyet-voi-tu-khach-hang-thiet-ke-san-xuat-thi-cong-do-go-noi-that-tai-le-gia.png" alt="">
                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            Những review, feedback chất lừ từ khách hàng sử dụng dịch vụ của Đồ Gỗ Lê Gia</h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Chúng tôi vô cùng biết ơn, tự hào và hạnh phúc khi nhận được vô...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>
                </div>
                <div class="slideeee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/12/1.-Anh-thuc-te-noi-that-phong-bep-noi-that-phong-khach-dep-dogolegia-1.jpg" alt="">
                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            Hình ảnh thi công nội thất thự tế của ĐỒ GỖ LÊ GIA tại Hà Nội</h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Lựa chọn đơn vị thi công nội thất luôn là quyết định khó khăn của...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>

                </div>
                <div class="slideeee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2021/08/1-thiet-ke-noi-that-chung-cu-dep-2-3-phong-ngu-tai-ha-noi.jpg" alt="">
                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            86+ Mẫu thiết kế nội thất chung cư đẹp hiện đại tại Hà Nội – Uy tín là
                            số 1</h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Một không gian sống lý tưởng với mỗi người – Đó là một không gian...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>


                </div>
                <div class="slideeee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2021/07/3-xuong-san-xuat-noi-that-go-cong-nghiep-tai-ha-noi.jpg" alt="">
                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            Top Mẫu thiết kế nội thất nhà ống, nhà phố biệt thự đẹp update mới nhất tại Hà Nội</h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Bạn thân mến, khi bạn ở chuyên trang này là bạn đang tìm kiếm mẫu...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>

                </div>
                <div class="slideeee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2021/07/5-thiet-ke-noi-that-phong-khach-dep-hien-dai-ha-noi-1.jpg" alt="">

                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            109+ Thiết kế nội thất phòng ngủ hiện đại đáng sở hữu nhất </h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Là chuyên gia thiết kế nội thất phòng ngủ đẹp hiện đại trong 10 năm...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>

                </div>
                <div class="slideeee">
                    <img src="https://dogolegia.vn/wp-content/uploads/2021/07/7-thiet-ke-phong-ngu-tre-em-dep.jpg" alt="">
                    <div class="img-slideeee">
                        <h5 style="color:white;font-size:16px; width:320px;margin-left:10px;text-align:center;  line-height: 20px;">
                            29+ Mẫu thiết kế nội thất phòng khách đẹp hiện đại cho chung cư và nhà ống </h5>

                        <p style="color:white; width:320px;margin-left:10px; opacity: 0.8;margin-top:-20px;text-align:center;  line-height: 20px;">
                            Xưởng gỗ Lê Gia, chuyên thiết kế nội thất phòng khách đẹp cho chung cư...
                        </p>

                        <button href="" class="xct-button">
                            Xem chi tiết </button>


                    </div>


                </div>






            </div>


            <div>
                <button class="prevvv"><i style="font-size:12px" class="fa-solid fa-chevron-left"></i></button>
                <button class="nexttt"><i style="font-size:12px" class="fa-solid fa-chevron-right"></i></button>

            </div>
        </div>

    </section>
    <section id="TACNTT">
        <div>

            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/AdobeStock_204048075-scaled-1.jpeg" style=" width: 100%;
                height: 423px;" alt="">
            <div id="TACNTT-TX">
                <div id="TACNTT-TX-tx">
                    <h2 style="text-align: center"><span style="font-size: 130%;color: #fcfcfc"><strong>TỔ ẤM
                                CỦA NGƯỜI TINH TẾ</strong></span></h2>
                    <p style="text-align: justify"><span style="color: #fcfcfc"><strong>Khởi nguồn từ những ý
                                tưởng tạo ra sự khác biệt và gu thẩm mỹ tinh tế,
                                Vương Tuấn đã trở thành và giữ vững
                                vị trí thương hiệu nội thất hàng đầu Việt Nam. Một quá trình dài của sự tìm tòi
                                và đầy cảm hứng, Vương Tuấn đã thiết kế và sản xuất ra những sản phẩm nội thất hợp
                                thời và độc đáo, kết hợp với quá trình chọn lọc kỹ lưỡng những món đồ trang trí
                                để tạo nên không gian sống hài hòa, tinh tế và sang trọng. ĐỒ GỖ Vương Tuấn chính là
                                sự lựa chọn của những người tinh tế.</strong></span></p>

                </div>
                <div id="LHTV-1">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin:8px 10px;color:white;text-indent:15px;">
                            <strong>Liên hệ tư vấn</strong></span>
                        <i class="gg-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>





    </section>






    <script src="{{ asset('js/trangChu.js') }}"></script>


</main>

@include('includes.footer')
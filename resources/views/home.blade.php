<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="theme-color" content="#fff">
    <!--Impt End-->
    
    <title>ONEBIT - Marketing Facebook Profile</title>
    <meta name="description" content="Nền tảng Facebook Marketing Profile mạnh mẽ, tự động hóa công việc hằng ngày, làm việc mọi nơi, mọi thiết bị với hệ thống da nền tảng tiện dụng, Tiết kiệm thời gian, công cụ hữu ích">
    <meta name="keywords" content="facebook, facebook profile, marketing, công cụ, tự động, content, hack facebook, auto chatbot, auto nhắn tin, auto comment, auto bình luận, fb, lên lịch, marketing, việt nam, auto, hệ thống, nền tảng, khóa, học,">
    <script src="cdn-cgi/apps/head/KJhokXiE0tQ-KeUHKTfkKOXyWT8.js"></script>
    <link rel="icon" href="{{ asset('') }}/Onebitlogo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('') }}/Onebitlogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('') }}/Onebitlogo.png">
    <!--CSS nhé-->
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="{{ asset('') }}/front/inc/themes/default/assets-index/style.css" rel="stylesheet">
    <link href="{{ asset('') }}/front/inc/themes/default/assets-index/css/responsive.css" rel="stylesheet">
    <!--Push noti-->
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#"><img style="position: relative;height: 40px;bottom: 5px;" src="{{ asset('') }}/logo130 x 40.jpg"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Trang Chủ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Tính Năng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Báo Giá</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">User Guide</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" target="_blank">Hỗ Trợ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" target="_blank">Kiến Thức FB MKT</a></li>
                                </ul>
								
								@guest
                                <div class="sing-up-button d-lg-none">
                                    <a href="{{ url('login') }}">Đăng Nhập</a>
                                </div>
								@endguest
								
								@auth("web")
								<div class="sing-up-button d-lg-none">
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </div>
								@endauth
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
						@auth("web")
							<a href="{{ url('dashboard') }}">Dashboard</a>
						@endauth
						
						@guest
							<a href="{{ url('login') }}">Đăng Nhập</a>
						@endguest
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2 style="line-height: 0.5 !important;"><span style="font-family:  Monoton, cursive; font-weight:  400;font-size: 120px;">ONEBIT </span>Ver 2</h2>
                        <br><br><h1>Khám phá phiên bản mới cùng nhiều chức năng mạnh mẽ được tích hợp</h1>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="http://autofbmkt.com/login" method="get" class="form-inline">
                            <span class="trial">                      </span>
                            <input type="submit" class="submit" value="ĐĂNG KÝ NGAY">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>CÓ GÌ ĐẶC BIỆT?</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Đa nền tảng</h4>
                        <p>Bạn có thể quản lý công việc bất cứ lúc nào, tại bất cứ nơi đâu với mọi thiết bị có Internet.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-pulse" aria-hidden="true"></i>
                        </div>
                        <h4>Hoạt động 24/7</h4>
                        <p>Hệ thống ONEBIT chạy trên cloud-server, ngay cả khi bạn tắt máy tính thì ONEBIT vẫn miệt mài hoạt động.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-lock" aria-hidden="true"></i>
                        </div>
                        <h4>Proxy an toàn</h4>
                        <p>Bảo mật tài khoản Facebook của bạn bằng hệ thống Proxy thông minh tích hợp trong ONEBIT</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-sm-none">
                        <div class="special_description_img">
                            <img src="{{ asset('') }}/front/inc/themes/default/assets-index/img/bg-img" alt="" style="max-width: 130%;max-height: 130%;padding-right: 80px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Tiết kiệm thời gian & tăng doanh thu ngay!</h2>
                            <p>Quản lý công việc mọi lúc mọi nơi trên mọi thiết bị cùng ONEBIT. Hãy bắt đầu để tiết kiệm thời gian, công sức & nhân lực, cùng tập trung nguồn lực phát triển kinh doanh.</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>support</span> Adnroid</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s" style="margin-right: 20px;">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>support</span> iOS</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-windows"></i>
                                        <p class="mb-0"><span>support</span> Windows</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2><b>TÍNH NĂNG NỔI BẬT</b></h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-heart" aria-hidden="true"></i>
                        <h5>Auto Interactive</h5>
                        <p>Chức năng này giúp FB CÁ NHÂN tương tác tự động, chế độ THẢ CẢM XÚC theo số đông LOẠI TRỪ like. Tốc độ THÔNG MINH được tích hợp sẵn, giúp bảo vệ tài khoản AN TOÀN.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-comments" aria-hidden="true"></i>
                        <h5>Auto Rep Inbox</h5>
                        <p>Chức năng này giúp bạn TRẢ LỜI TIN NHẮN TỰ ĐỘNG theo từ khóa trên FB CÁ NHÂN. Tích hợp chế độ Random CT giúp nội dung trả lời tin nhắn của bạn vô cùng PHONG PHÚ.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-comment-alt" aria-hidden="true"></i>
                        <h5>Auto Rep Comment</h5>
                        <p>Chức năng này giúp bạn TRẢ LỜI BÌNH LUẬN TỰ ĐỘNG theo từ khóa trên FB CÁ NHÂN. Tốc độ trả lời thông minh, được tích hợp sẵn. Hỗ trợ chế độ Random CT tránh nội dung bị spam.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-stats-up" aria-hidden="true"></i>
                        <h5>Auto Birthday Post</h5>
                        <p>Chức năng này giúp bạn tự động đăng lời CHÚC MỪNG SINH NHẬT lên tường bạn bè mỗi khi đến ngày sinh nhật của họ. Chế độ đăng thông minh giúp bảo vệ tài khoản AN TOÀN.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5>Auto Add Friend</h5>
                        <p>Chức năng này giúp bạn TỰ ĐỘNG KẾT BẠN theo danh sách tệp khách hàng tiềm năng. Tốc độ và số lượng được cài đặt thông minh. Giúp bảo vệ tài khoản AN TOÀN TUYỆT ĐỐI.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-reload" aria-hidden="true"></i>
                        <h5>Auto Check Friend</h5>
                        <p>Chức năng này giúp bạn LỌC DANH SÁCH BẠN BÈ theo chu kỳ để đạt được tệp danh sách bạn bè chất lượng nhất, phù hợp với bạn nhất. Hệ thống phân tích THÔNG MINH, được tích hợp sẵn.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-timer" aria-hidden="true"></i>
                        <h5>Schedule Post</h5>
                        <p>Chức năng này giúp bạn LÊN LỊCH ĐĂNG BÀI hàng tuần, hàng tháng, hàng năm trên FB CÁ NHÂN, giúp bạn tiết kiệm rất nhiều thời gian. Hệ thống XỬ LÝ thông minh, được tích hợp sẵn</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5>Working 24/7</h5>
                        <p>Hệ thống ONEBIT được chạy trên nền tảng đám mây nên ngay cả khi bạn TẮT THIẾT BỊ của mình thì ONEBIT vẫn miệt mài HOẠT ĐỘNG 24/24 theo cài đặt của bạn.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-info-alt" aria-hidden="true"></i>
                        <h5>And More</h5>
                        <p>Khi là thành viên hệ thống ONEBIT, bạn sẽ được tiếp cận với những phương pháp Marketing Facebook Profile vô cùng tuyệt vời. Đặc biệt ưu đãi với những khóa đào tạo từ Lý Bá Thiện.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(inc/themes/default/assets-index/img/bg-img/video.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">517</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>KHÁCH HÀNG
                                <br> SỬ DỤNG</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">99</span>%</h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>KHÁCH HÀNG
                                <br> HÀI LÒNG</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">1,369</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-social-instagram"></i>
                            <p>TÀI KHOẢN
                                <br>FACEBOOK</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">37</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-social-usd"></i>
                            <p>CTV
                                <br>AFFILIATE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <!-- iWolf Screenshots Slides
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-heading">
                        <h2>App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="img/scr-img/app-1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-2.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>-->
    <!-- ***** iWolf Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Đa dạng <b>GÓI CƯỚC</b> hợp lý</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
			
			{{--
                <!--Gói Trial-->
                <div class="col-12 col-md-6 col-lg-3 fix-bang-gia" style="max-width: 20%;">
                    <div class="single-price-plan active text-center">
                        <div class="package-plan" style="padding: 10px 0;">
                             <span>VND</span>
							 <h5>Trial</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <h4>29k/th</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p style="color: red;">1 TK Facebook</p>
                            <p></p>
                            <div class="feature-title">Automation Functions</div>
                            <div>
                                <span>Auto Interactive</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Inbox</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Comment</span>
                                <br>
                                <span style="color:red;" class="not">Auto Birthday Post</span>
                                <br>
                                <span style="color:red;" class="not">Auto Add Friend</span>
								<br>
                                <span style="color:red;" class="not">Auto Check Friend</span>
                                <br>
                                <span style="color:red;" class="not">Schedule Post</span>
                                <br>
                                <span style="color:red;" class="not">Hỗ trợ Online</span>
                                <br>
                                <span style="color:red;" class="not">Hỗ Trợ Offline</span>
                            </div>
                            <p></p>
							<p><span>Bộ Nhớ lưu trữ tài nguyên</span>
							<br>
							<br>
                            <span class="color-primary fw-500">50MB</span>
                            </p>
							 <br>
							 <span>Affiliate</span>
							 <br>
							  <span>Coupon</span>
                            <p></p>
                        </div>

                        <div class="plan-button">
                            <a href="{{ route('buy.index') }}?type=Trial" class="button button--dark button--oval">CHỌN</a>
                        </div>
                    </div>
			</div> --}}

                <!--Danh sách gói-->

                <div class="col-12 col-md-6 col-lg-4 fix-bang-gia" style="max-width: 25%;">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan" style="padding: 10px 0;">
                            <h5>Beginner</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>VND</span>
                                <h4>199K/th</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p style="color: #ff7000;">1 TK Facebook </p>
                            <p>
                                <div class="feature-title">Automation Functions</div>
                                <div>
                                    <span>Auto Interactive</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Inbox</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Comment</span>
                                    <br>
                                    <span>Auto Birthday Post</span>
                                    <br>
                                    <span>Auto Add Friend</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Check Friend</span>
                                    <br>
                                    <span>Schedule Post</span>
                                <br>
                                <span style="color:red;" class="not">Hỗ trợ Online</span>
                                <br>
                                <span style="color:red;" class="not">Hỗ Trợ Offline</span>
                                </div>
                            <p></p>
                            <p><span style="color: #ff7000;" class="">Bộ Nhớ Lưu Trữ Tài Nguyên</span>
							<br>
							<br>
                                <span class="color-primary fw-500">
													500MB												</span>
                            </p>
							 <br>
							 <span>3 tháng</span>
							 <br>
							  <span>VND</span>
                                <h4>557K</h4>
							  </p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="{{ route('buy.index') }}?type=Beginner" class="button button--dark button--oval">CHỌN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 fix-bang-gia" style="max-width: 25%;">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan" style="padding: 10px 0;">
                            <h5>Starter</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>VND</span>
                                <h4>537K/th</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p style="color: #ff7000;">
                                Lên đến 3 TK Facebook </p>
                            <p>
                                <div class="feature-title">Automation Functions</div>
                                <div>
                                    <span>Auto Interactive</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Inbox</span>
                                <br>
                                <span style="color:red;" class="not">Auto Rep Comment</span>
                                    <br>
                                    <span>Auto Birthday Post</span>
                                    <br>
                                    <span>Auto Add Friend</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Check Friend</span>
                                    <br>
                                    <span>Schedule Post</span>
									<br>
									<span style="color: #ff7000;">Hỗ trợ Online</span>
									<br>
									<span style="color: #ff7000;">Hỗ Trợ Offline</span>
                                </div>
                            <p></p>
                            <p><span style="color: #ff7000;" class="">Bộ Nhớ Lưu Trữ Tài Nguyên</span>
							<br>
                            <br>
                                <span class="color-primary fw-500">3GB</span>
                            </p>
							 <br>
							 <span>3 tháng</span>
							 <br>
							  <span>VND</span>
                                <h4>1197K</h4>
							  </p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="{{ route('buy.index') }}?type=Starter" class="button button--dark button--oval">CHỌN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 fix-bang-gia" style="max-width: 25%;">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan" style="padding: 10px 0;">
                            <h5>Business</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>VND</span>
                                <h4>894K/th</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p style="color: #ff7000;">
                                6 TK Facebook </p>
                            <p>
                                <div class="feature-title">Automation Functions</div>
                                <div>
                                    <span>Auto Interactive</span>
									<br>
									<span style="color: #ff7000;">Auto Rep Inbox</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Rep Comment</span>
                                    <br>
                                    <span>Auto Birthday Post</span>
                                    <br>
                                    <span>Auto Add Friend</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Check Friend</span>
                                    <br>
                                    <span>Schedule Post</span>
									<br>
									<span style="color: #ff7000;">Hỗ trợ Online</span>
									<br>
									<span style="color: #ff7000;">Hỗ Trợ Offline</span>
                                </div>
                            <p></p>
                            <p><span style="color: #ff7000;" class="">Bộ Nhớ Lưu Trữ Tài Nguyên</span>
							<br>
							<br>
                                <span class="color-primary fw-500">10GB</span>
                            </p>
							 <br>
								<a>
									<span>3 tháng</span>
									<br>
									<span>VND</span>
									<h4>1697K</h4>
								</a>
							 
							</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
							
                            <a href="{{ route('buy.index') }}?type=Business" class="button button--dark button--oval">CHỌN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 fix-bang-gia" style="max-width: 25%;">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan" style="padding: 10px 0;">
                            <h5>Retailer</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span></span>
                                <h4>liên hệ</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p style="color: #ff7000;">
                                Không giới hạn TK Facebook </p>
                            <p>
                                <div class="feature-title">Automation Functions</div>
                                <div>
                                    <span>Auto Interactive</span>
									<br>
									<span style="color: #ff7000;">Auto Rep Inbox</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Rep Comment</span>
                                    <br>
                                    <span>Auto Birthday Post</span>
                                    <br>
                                    <span>Auto Add Friend</span>
                                    <br>
                                    <span style="color: #ff7000;">Auto Check Friend</span>
                                    <br>
                                    <span>Schedule Post</span>
									<br>
									<span style="color: #ff7000;">Hỗ trợ Online</span>
									<br>
									<span style="color: #ff7000;">Hỗ Trợ Offline</span>
                                </div>
                            <p></p>
                            <p><span style="color: #ff7000;" class="">Bộ Nhớ Lưu Trữ Tài Nguyên</span>
							<br>
							<br>
                                <span style="color: #ff7000;">Không giới hạn</span>
                            </p>
							 <br>
							 <span>3 tháng</span>
							 <br>
							  <span></span>
                                <h4>liên hệ</h4>
							  </p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#" class="button button--dark button--oval">CHỌN</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Đừng ngại, hãy liên hệ!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Bạn sẽ nhận được các thông tin về khóa học, tài liệu Marketing Facebook Profile độc quyền từ chúng tôi. Đừng ngần ngại và hãy liên hệ chúng tôi ngay nhé!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Địa chỉ: </span>102, Trường Chinh, Hà Nội</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Điện thoại: </span><a href='tel:+84978054513'>0978054513</a></p>
                    </div>
                    <div class="email-text">
                        <p><span>Email: </span><a href='mailto:cskh@autofbmkt.com'>cskh@autofbmkt.com</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Họ & tên" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Nội dung tin nhắn" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Gửi</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="https://www.facebook.com/autofbmkt" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/autofbmkt" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/grautofbmkt" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                   

                    <li>
                        <a href="en-US.html"><img src="{{ asset('') }}/front/inc/themes/default/assets-index/img/en.png" width="30px"></a>
                    </li>
                    <li>
                        <a href="vi-VN.html"><img src="{{ asset('') }}/front/inc/themes/default/assets-index/img/vi.png" width="30px"></a>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>ONEBIT &copy; Copyright 2018. Powered by <a href="http://autofbmkt.com/" target="_blank">Marketing Facebook Profile</a></p>
            
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="{{ asset('') }}/front/inc/themes/default/assets-index/js/active.js"></script>
</body>
</html>
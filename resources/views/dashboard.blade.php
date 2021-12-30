
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- Mobile Metas -->
    <meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>安安醬油</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body id="home" class="antialiased" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="#home">首頁</a></li>
                    <li><a class="nav-link" href="#about">醬油介紹</a></li>
                    <li><a class="nav-link" href="#services">購買商品</a></li>
                    <li><a class="nav-link" href="#appointment">課程預約</a></li>
                    <li><a class="nav-link" href="#contact">聯絡我們</a></li>
                    <li><a class="nav-link" href="#gallery">訂單資訊</a></li>
                    <li><a class="nav-link" href="#team">個人資料</a></li>
                    {{--                    @if (Route::has('login'))--}}
                    {{--                        @auth--}}
                    {{--                            <li><a class="nav-link" href="{{ route('patients.appointments.create') }}">Dashboard</a></li>--}}
                    {{--                        @else--}}
                    {{--                            <li><a class="nav-link" href="{{ route('login') }}">登入</a></li>--}}
                    {{--                            @if (Route::has('register'))--}}
                    {{--                                <li><a class="nav-link" href="{{ route('register') }}">註冊</a></li>--}}
                    {{--                            @endif--}}
                    {{--                        @endauth--}}
                    {{--                    @endif--}}
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

<!-- Start Banner -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-01.jpg')}});">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>嚴選大豆</h1>
                            <p><font size="90">合格の豆は使います</font></p>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-02.jpg')}});">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>專業製造</h1>
                            <p><font size="90">全部は心があります</font></p>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-03.jpg')}});">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>濃◦醇◦香</h1>
                            <p><font size="90">家で料理を作る</font></p>
                        </div>
                    </div>

                </div>
            </div><!-- .pogoSlider -->
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start About us -->
<div id="about" class="about-box">
    <div class="about-a1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>醬油介紹</h2>
                        <p>手工醬油好健康好棒棒</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2><b>對於醬油的認知</b></h2>
                            <p>你知道市面上的醬油都是化學嗎?</p>
                            <p>『外の醬油は加工するの物ご存知でしょうか？』</p>
                            <a href="#" class="new-btn-d br-2">知道更多</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-m">
                                <ul id="banner">
                                    <li>
                                        <img src="{{asset('images/about-img-3.jpg')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About us -->

<!-- Start Services -->
<div id="services" class="services-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>購買商品</h2>
                    <p>健康喔!要買多點喔!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{asset('images/product_01.jpg')}}"></div>
                            <h3 class="title">古早味手工柴燒醬油膏</h3>
                            <p class="description">
                                60年甘醇厚實經典醬香<br>
                                ◎嚴選當季黑豆釀造<br>
                                ◎古法釀造純手工柴燒<br>
                                ◎豆香濃郁、風味有層次變化
                            </p>
                            <a href="#" class="new-btn-d br-2">訂購</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{asset('images/product_01.jpg')}}"></div>
                            <h3 class="title">古早味手工柴燒醬油清</h3>
                            <p class="description">
                                60年甘醇厚實經典醬香<br>
                                ◎嚴選當季黑豆釀造<br>
                                ◎古法釀造純手工柴燒<br>
                                ◎豆香濃郁、風味有層次變化<br>
                            </p>
                            <a href="#" class="new-btn-d br-2">訂購</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{asset('images/product_03.jpg')}}"></div>
                            <h3 class="title">土旺來黑豆醬油清</h3>
                            <p class="description">
                                60年甘醇厚實經典醬香<br>
                                ◎嚴選當季黑豆釀造<br>
                                ◎古法釀造純手工柴燒<br>
                                ◎豆香濃郁、風味有層次變化<br>
                            </p>
                            <a href="#" class="new-btn-d br-2">訂購</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{asset('images/product_05.jpg')}}"></div>
                            <h3 class="title">薄鹽清香柴燒壺底油</h3>
                            <p class="description">
                                60年甘醇厚實經典醬香<br>
                                ◎嚴選當季黑豆釀造<br>
                                ◎古法釀造純手工柴燒<br>
                                ◎豆香濃郁、風味有層次變化<br>
                            </p>
                            <a href="#" class="new-btn-d br-2">訂購</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{asset('images/product_04.jpg')}}"></div>
                            <h3 class="title">看更多商品</h3>
                            <p class="description">
                            ...<br>
                            ...<br>
                            ...<br>
                            ...<br>
                            </p>
                            <a href="#" class="new-btn-d br-2">看更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Start Appointment -->
<div id="appointment" class="appointment-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>課程預約</h2>
                    <p>一邊看一邊學</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>與我們預約</h2>
                    </div>
                    <form>
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">姓名</label>
                                    <input id="name" name="name" type="text" placeholder="姓名" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">預約日期</label>
                                    <input id="date" name="date" type="text" placeholder="預約日期" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">預約時段</label>
                                    <select id="time" name="time" class="form-control">
                                        <option value="8:00 to 9:00">8:00 ~ 9:00</option>
                                        <option value="9:00 to 10:00">9:00 ~ 10:00</option>
                                        <option value="10:00 to 1:00">10:00 ~ 1:00</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label" for="appointmentfor">Department</label>--}}
{{--                                    <select id="appointmentfor" name="appointmentfor" class="form-control">--}}
{{--                                        <option value="Choose Department">Choose Department</option>--}}
{{--                                        <option value="Gynacology">Gynacology</option>--}}
{{--                                        <option value="Dermatologist">Dermatologist</option>--}}
{{--                                        <option value="Orthology">Orthology</option>--}}
{{--                                        <option value="Anesthesiology">Anesthesiology</option>--}}
{{--                                        <option value="Ayurvedic">Ayurvedic</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- Button -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <center><button id="singlebutton" name="singlebutton" class="new-btn-d br-2">確認預約</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>為什麼要與我們預約?</h2>
                    </div>
                    <div class="feature-block">
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">✧健康的手工醬油✧</h4>
                            <div class="feature-content">
                                <p>&nbsp;&nbsp;體驗及參與手工醬油的製程，更能理解手工醬油的健康</p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">✧讓孩子學到更多✧</h4>
                            <div class="feature-content">
                                <p>&nbsp;&nbsp;現在很少孩子知道手工醬油是什麼了，讓孩子了解手工醬油的健康與製程，健康傳承下一代</p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">✧專業的人員✧</h4>
                            <div class="feature-content">
                                <p>&nbsp;&nbsp;專業師傅展示與介紹，讓知識更豐富</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Appointment -->

<!-- Start Contact -->
<div id="contact" class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>聯絡我們</h2>
                    <p>讓我們知道更多</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-xs-12">
                <div class="contact-block">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">送出資訊</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-12 col-xs-12">
                <div class="left-contact">
                    <h2>地址</h2>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>地址</h4>
                            <p>648雲林縣西螺鎮安定路171-11號</p>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Email</h4>
                            <a href="#">demoinfo@gmail.com</a><br>
                            <a href="#">demoinfo@gmail.com</a>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>聯絡電話</h4>
                            <a href="#">12345 67890</a><br>
                            <a href="#">12345 67890</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Footer -->
<footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="footer-company-name">All Rights Reserved. &copy; 2021 Laravel final06 Design By : 蘇 & 安</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.pogo-slider.min.js')}}"></script>
<script src="{{asset('js/slider-index.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/TweenMax.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/form-validator.min.js')}}"></script>
<script src="{{asset('js/contact-form-script.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/images-loded.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<!-- Start header -->
<header class="top-header">
    @extends('layouts.master')

    @section('title','安安醬油')

    @section('content')

</header>
<!-- End header -->

<!-- Start Banner -->

@include('layouts.partials.Banner')


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

<!-- End Footer -->

@endsection

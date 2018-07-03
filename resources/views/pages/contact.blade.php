@extends('index')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li>
                    <a href="#">Home</a>
                </li>
                <li class='active'>Contact</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="contact-page">
                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15679.654213247703!2d106.68219949999998!3d10.7411458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad13fbdfd9%3A0x31e4d76059405939!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgU8OgaSBHw7Ju!5e0!3m2!1svi!2s!4v1523086275711" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-9 contact-form">
                    <div class="col-md-12 contact-title">
                        <h4>Thông tin liên hệ</h4>
                    </div>
                    <div class="col-md-4 ">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputName">Họ tên
                                    <span>*</span>
                                </label>
                                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email
                                    <span>*</span>
                                </label>
                                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="admin@unicase.com">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputTitle">Tiêu đề
                                    <span>*</span>
                                </label>
                                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputComments">Phản hồi
                                    <span>*</span>
                                </label>
                                <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 outer-bottom-small m-t-20">
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi</button>
                    </div>
                </div>
                <div class="col-md-3 contact-info">
                    <div class="contact-title">
                        <h4>Thông tin liên lạc</h4>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <span class="contact-span">80 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</span>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i">
                            <i class="fa fa-mobile"></i>
                        </span>
                        <span class="contact-span">01254547437
                            <br>(083) 83 83 011</span>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <span class="contact-span">thonglam1176@gmail.com
                            <br>thonglam1176@gmail.com</span>
                    </div>
                </div>
            </div>
            <!-- /.contact-page -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
   {{--      <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <h3 class="section-title">Our Brands</h3>
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                </div>
                <!-- /.owl-carousel #logo-slider -->
            </div>
            <!-- /.logo-slider-inner -->

        </div> --}}
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Liên Hệ')
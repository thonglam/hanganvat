@extends('index')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head">
                        <i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-desktop fa-fw"></i>Computer</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">




                           <div class="row">

                                            @foreach($sp_theoloai as $sp)
                                                <div class="col-sm-4">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="product.html"><img src="template/assets/images/hinh_mon_an/{{$sp->image}}" alt=""></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$sp->name}}</p>
                                                        <p class="single-item-price">

                                                            @if($sp->promotion_price==0)

                                                                    <span class="flash-sale">{{$sp->price}}đ</span>
                                                                @else
                                                                    <span class="flash-del">{{$sp->price}}đ </span>
                                                                    <span class="flash-sale">{{$sp->promotion_price}}đ</span>

                                                                @endif
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="product.html"> </a>
                                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                </div>
                                            @endforeach
                        </div>







                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-mobile fa-fw"></i>Smart Phone</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li>
                                                        <a href="#">Computer Cases &amp; Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">CPUs, Processors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Fans, Heatsinks &amp; Cooling</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Graphics, Video Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Interface, Add-On Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laptop Replacement Parts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Memory (RAM)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboard &amp; CPU Combos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboard Components &amp; Accs</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li>
                                                        <a href="#">Power Supplies Power</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Power Supply Testers Sound</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sound Cards (Internal)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Video Capture &amp; TV Tuner Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Other</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#">
                                                    <img alt="" src="assets/images/banners/banner-side.png" />
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-apple fa-fw"></i>Apple Store</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-camera fa-fw"></i>Camera</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-headphones fa-fw"></i>TV & Audio</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-gamepad fa-fw"></i>Game & Video</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-location-arrow fa-fw"></i>Car Electronic</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-history fa-fw"></i>Old Products</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li>
                                                        <a href="#">Computer Cases &amp; Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">CPUs, Processors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Fans, Heatsinks &amp; Cooling</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Graphics, Video Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Interface, Add-On Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laptop Replacement Parts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Memory (RAM)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboard &amp; CPU Combos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Motherboard Components &amp; Accs</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li>
                                                        <a href="#">Power Supplies Power</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Power Supply Testers Sound</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sound Cards (Internal)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Video Capture &amp; TV Tuner Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Other</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#">
                                                    <img alt="" src="assets/images/banners/banner-side.png" />
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-microphone fa-fw"></i>Accessories</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Lenovo</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Fuhlen</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Longsleeves</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Polos</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Sweaters</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Hoodies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li>
                                                        <a href="category.html">Microsoft</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Tees & Tanks</a>
                                                    </li>
                                                    <li>
                                                        <a href="category.html">Graphic Tees</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Offer</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Simple Product</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Canon EOS 60D</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Camera X30</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Simple Product</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Canon EOS 60D</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Camera X30</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Simple Product</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Canon EOS 60D</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Camera X30</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list">
                            <a class="item" title="Phone" href="category.html">Phone</a>
                            <a class="item active" title="Vest" href="category.html">Vest</a>
                            <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                            <a class="item" title="Furniture" href="category.html">Furniture</a>
                            <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                            <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                            <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                            <a class="item" title="Toys" href="category.html">Toys</a>
                            <a class="item" title="Rose" href="category.html">Rose</a>
                        </div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm4.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm4.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Simple Product</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm5.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Simple Product</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm6.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm6.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Camera X30</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm5.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <a href="#">Sony Ericson Vaga</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                        <div class="action">
                                                            <a href="#" class="lnk btn btn-primary">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Sign Up for Our Newsletter!</p>
                        <form role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->
                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">

                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/images/hot-deals/1.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag">
                                        <span>35%
                                            <br>off</span>
                                    </div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name">
                                        <a href="detail.html">Apple Iphone 5s 32GB Gold</a>
                                    </h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
                                        <span class="price">
                                            $600.00
                                        </span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/images/hot-deals/2.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag">
                                        <span>35%
                                            <br>off</span>
                                    </div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name">
                                        <a href="detail.html">Apple Iphone 5s 32GB Gold</a>
                                    </h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
                                        <span class="price">
                                            $600.00
                                        </span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/images/hot-deals/3.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag">
                                        <span>35%
                                            <br>off</span>
                                    </div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">Days</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name">
                                        <a href="detail.html">Apple Iphone 5s 32GB Gold</a>
                                    </h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
                                        <span class="price">
                                            $600.00
                                        </span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </div>

                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>


                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->
                <!-- ============================================== COLOR============================================== -->
                <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item bg-color">
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">
                                        Save
                                        <span class="big">50%</span>
                                    </div>


                                    <div class="excerpt">
                                        on selected items
                                    </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url('assets/images/advertisement/1.jpg');">

                        </div>
                        <!-- /.item -->

                        <div class="item bg-color">
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">
                                        Save
                                        <span class="big">50%</span>
                                    </div>


                                    <div class="excerpt fadeInDown-2">
                                        on selected items
                                    </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ============================================== COLOR: END ============================================== -->


            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new
                                        <span class="highlight">imac</span> for you
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new
                                        <span class="highlight">imac</span> for you
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->



                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active">
                                <a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a>
                            </li>
                            <li>
                                <a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">smartphone</a>
                            </li>
                            <li>
                                <a data-transition-type="backSlide" href="#laptop" data-toggle="tab">laptop</a>
                            </li>
                            <li>
                                <a data-transition-type="backSlide" href="#apple" data-toggle="tab">apple</a>
                            </li>
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>

                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    @foreach($loai_food as $loai)
                                        <div class="item item-carousel">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html">
                                                                <img src="{{asset('template/assets/images/hinh_mon_an'.$loai->image)}}" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag new">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name">
                                                        <a href="detail.html">{{$loai->name}}</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $650.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                                        <i class="fa fa-retweet"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                    @endforeach
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="smartphone">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Apple Iphone 5s 32GB</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">LG Smart Phone LP68</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Nokia Lumia 520</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Sony Ericson Vaga</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="laptop">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Nokia Lumia 520</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">LG Smart Phone LP68</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Sony Ericson Vaga</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Apple Iphone 5s 32GB</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="apple">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Apple Iphone 5s 32GB</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Sony Ericson Vaga</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale">
                                                        <span>sale</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">LG Smart Phone LP68</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Nokia Lumia 520</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html">
                                                            <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot">
                                                        <span>hot</span>
                                                    </div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="detail.html">Samsung Galaxy S4</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            $650.99 </span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->    
            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Loại Sản Phẩm')
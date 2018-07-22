
<header class="header-style-1">
    <style>
        img{
            max-width: 100%;
        }
    </style>
    <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        @if(Auth::check())
                            <li>
                                <a href="">Chào bạn {{Auth::user()->name}}</a>
                            </li>
                            @if(Auth::user()->role == 3)
                            <li>
                                <a href="{{route('list-bill')}}">Đến trang quản lý</a>
                            </li>
                            @elseif(Auth::user()->role == 2)
                            <li>
                                <a href="{{route('list-bill')}}">Đến trang quản lý</a>
                            </li>
                            @elseif(Auth::user()->role == 1)
                            <li>
                                <a href="{{route('list-Bill')}}">Đến trang quản lý</a>
                            </li>
                            @else
                            <li>
                                <a href="{{route('List-bill',Auth::user()->email)}}">Đến trang quản lý</a>
                            </li>
                            @endif
                            <li><a class="dropdown-item" href="{{route('logout')}}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-lg"></i> Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        @else   
                            <li>
                                <a href="{{route('register')}}">Đăng kí</a>
                            </li>
                            <li>
                                <a href="{{route('login')}}">
                                    <i class="icon fa fa-sign-in"></i>Đăng nhập</a>
                            </li>
                        @endif  
                    </ul>
                </div>
                <!-- /.cnt-account -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
            </div>
        <!-- /.container -->
        </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
             <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{route('trang_chu')}}">
                            <img src="{{URL::asset('upload/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <div class="contact-row">
                        <div class="phone inline">
                            <i class="icon fa fa-phone"></i> (404) 888 888 868
                        </div>
                        <div class="contact inline">
                            <i class="icon fa fa-envelope"></i> ThienThong@gmail.com
                        </div>
                    </div>
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form method="get" action="{{route('search1')}}">
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown"  href="category.html">Tìm kiếm
                                            <b class="caret"></b>
                                        </a>
                                        {{-- <ul class="dropdown-menu" role="menu">
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1">Theo tên món ăn</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1">Theo giá</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                </ul>

                                
                                
                                 <input class="search-field"  name="key" placeholder="Tìm ở đây..."  />
                                {{-- <input class="search-field" placeholder="Giá min" value="Gía thấp nhất" name="pricemin"/>
                                <input class="search-field" placeholder="Giá max" value="Gía cao nhất" name="pricemax"/>  --}}  
                                 <button class="search-button" type="submit" id="searchsubmit"></button>



                                {{-- <a class="search-button"  href="{{route('search')}} " id="searchsubmit" > </a> --}}

                        {{--         <button class="fa fa-search" type="submit" id="searchsubmit"></button> --}}
                                
                              

                                {{-- <a class="search-button"  action="{{route('search')}}"> </a> --}}

                                


                             
                            </div>
                        </form>
                    </div>
                     

                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>

                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">Giỏ Hàng </span> 
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count">
                                <span class="count">
                                    @if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif
                                </span>
                                </div>

                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                @if(Session::has('cart'))
                                    @foreach($monan_cart as $food)
                                        <div class="cart-item product-summary">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="image" >
                                                        <a href="{{route('detail',$food['item']['id'])}}">
                                                            <img id="thong" src="{{URL::asset('upload')}}/{{$food['item']['image']}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">

                                                    <h3 class="name" >
                                                        <a  href="{{route('detail',$food['item']['id'])}}" >{{$food['item']['name']}}</a>
                                                    </h3>
                                                    {{-- <div class="price">{{$food['qty']}}<div>{{$food['item']['price']}}</div></div> --}}

                                                    <span class="cart-item-amount">{{$food['qty']}}*<span >{{$food['item']['price']}}</span></span>

                                                </div>
                                                <div class="col-xs-1 action">
                                                    <a href="{{route('xoagiohang',$food['item']['id'])}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach 
                                    <!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>

                                    <div class="clearfix cart-total">
                                        <div class="pull-right">
                                            <span class="text">Tổng tiền:</span>
                                           {{--  <span class='price'>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng</span> --}}

                                           <span class="cart-total-value">{{Session('cart')->totalPrice}}</span>
                                        </div>
                                        <div class="clearfix"></div>    

                                    <a href="{{route('dathang')}}" class="btn btn-upper btn-primary btn-block m-t-20">Chi tiết giỏ hàng</a>
                                    </div>
                                    <!-- /.cart-total-->
                                @endif
                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

             </div>
        <!-- /.container -->

        </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    {{-- <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a> --}}
                                    <a href="{{route('trang_chu')}}"> Trang chủ </a>
                                </li>
                                <li class="dropdown yamm">
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Danh Sách Món Ăn</a>
                                    <ul class="dropdown-menu">
                                        @foreach($dang_monan as $dang)
                                        <li>
                                            <a href="{{route('foodtype',$dang->id)}}">{{$dang->name}}</a>
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{route('priceship')}}"> Bảng giá ship </a>
                                </li>

                                <li class="dropdown">
                                    <a href="{{route('news')}}"> Tin tức </a>
                                </li>

                                <li class="dropdown">
                                    <a href="{{route('info')}}"> Giới thiệu </a>
                                </li>
                                <li class="dropdown">   
                                    <a href="{{route('contact')}}">Liên hệ</a>
                                </li>

                                
                            </ul>

                            {{-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 menu-right">
                             <span class="hotline"><p><font ont-family: aricolor="#CC0000"> <img class="transparent" alt="http://hstatic.net/813/1000035813/10/2016/2-23/goi_an_dem_sai_gon.png" src="http://hstatic.net/813/1000035813/10/2016/2-23/goi_an_dem_sai_gon.png" width="22" height="21"></font><b style="outline: none; list-style-type: none; box-sizing: border-box; font-weight: bold; color: #CC0000; fal, '\'Helvetica Neue\'', Helvetica, sans-serif, sans-serif; font-size: 12pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 38px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255)"> (028) 62 853 853  (18:45 - 1:30 sáng)</b></p></span>
                             </div> --}}
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>


                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->


                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

        </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->



</header>

<!-- ============================================== HEADER : END ============================================== -->
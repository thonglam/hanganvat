@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">
                    <h3 class="section-title">Menu món ăn</h3>
                  
                    <div class="sidebar-filter">
                        <!-- ============================================== Danh sách món ăn ============================================== -->
                        <div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
                            <div class="widget-header m-t-20">
                                <h4 class="widget-title">Danh sách món ăn</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <div class="accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
                                                Món ăn Chính
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('fooddetail',1)}}">Mì</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',2)}}">Cơm</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',3)}}">Nui</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.accordion-inner -->
                                        </div>
                                        <!-- /.accordion-body -->
                                    </div>
                                    <!-- /.accordion-group -->
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">
                                                Món ăn vặt
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('fooddetail',4)}}">Món rán</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',5)}}">Món nướng</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',6)}}">Món cuốn</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.accordion-inner -->
                                        </div>
                                        <!-- /.accordion-body -->
                                    </div>
                                    <!-- /.accordion-group -->

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">
                                                Chè và thức uống
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('fooddetail',7)}}">Chè </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',8)}}">Sinh tố</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',9)}}">Hoa quả tươi</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('fooddetail',10)}}">Nước ép</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.accordion-inner -->
                                        </div>
                                        <!-- /.accordion-body -->
                                    </div>
                                    <!-- /.accordion-group -->

                                </div>
                                <!-- /.accordion -->
                            </div>
                            <!-- /.sidebar-widget-body -->
                        </div>
                        <!-- /.sidebar-widget -->
                        <!-- ============================================== Giá ============================================== -->
                      {{--  <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <div class="widget-header">
                                <h4 class="widget-title"> MENU MÓN ĂN</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <ul class="list">

                                    @foreach($loai as $all)
                                    <li>
                                        <a href="{{route('foodtype',$all->id)}}">{{$all->name}}</a>
                                    </li>

                                    @endforeach
                                    
                                </ul>
                                <a href="#" class="lnk btn btn-primary">Show Now</a>
                            </div>
                            /.sidebar-widget-body
                        </div> --}}
                        <!-- /.sidebar-widget -->
                        <!-- ============================================== Kích thước món ăn ============================================== -->
                       {{--  <div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
                            <div class="widget-header">
                                <h4 class="widget-title">Kích thước</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <ul class="list">
                                    <li>
                                        <a href="#">Lớn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trung bình</a>
                                    </li>
                                    <li>
                                        <a href="#">Nhỏ</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.sidebar-widget-body -->
                        </div> --}}
                        <!-- /.sidebar-widget -->
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

                                <div class="item" style="background-image: url('../template/assets/images/advertisement/1.jpg');">

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
                    <!-- /.sidebar-filter -->
                </div>
                <!-- /.sidebar-module-container -->
            </div>
            <!-- /.sidebar -->
            <div class='col-md-9'>
                <!-- ========================================== SECTION – HERO ========================================= -->
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-2">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active">
                                        <a data-toggle="tab" href="#grid-container">
                                            <i class="icon fa fa-th-list"></i>Grid</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list-container">
                                            <i class="icon fa fa-th"></i>List</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.filter-tabs -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-12 col-md-6">
                            <div class="col col-sm-3 col-md-6 no-padding">
                                <div class="lbl-cnt">
                                    <span class="lbl">Sort by</span>
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                                Mới nhất
                                                <span class="caret"></span>
                                            </button>

                                            <ul role="menu" class="dropdown-menu">
                                                <li role="presentation">
                                                    <a href="#">Thêm bảng chữ cái</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#">Giá cao nhất</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#">Giá thấp nhất</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.fld -->
                                </div>
                                <!-- /.lbl-cnt -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="search-result-container">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product  inner-top-vs">
                                <div class="row">
                                    @foreach($allFood as $all)
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{route('detail',$all->id)}}">
                                                                <img src="upload/{{$all->image}}" alt="" width="250px" height="200px"> 
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
                                                        <a href="{{route('detail',$all->id)}}">{{$all->name}}</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            @if($all->promotion_price==0)
                                                                <span class="price">
                                                                        {{number_format($all->price)}} 
                                                                </span>
                                                            @else
                                                                <span class="price">
                                                                        {{number_format($all->price)}} 
                                                                </span>
                                                                <span class="price-before-discount">{{$all->promotion_price}}</span>
                                                            @endif
                                                        </div>
                                                        <!-- /.product-price -->

                                                        

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            

                                                            {{-- <button type="button" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-shopping-cart" style="color: #3498db;"></span> Thêm vào giỏ hàng

        </button> --}}

                                                                        <li class="add-cart-button btn-group">
                                                                           {{--  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> --}}
                                                                                {{-- <i class="fa fa-shopping-cart"></i> --}}

                                                                                <a class="add-to-cart pull-left" href="{{route('themgiohangone',$all->id)}}"><i class="fa fa-shopping-cart" ></i></a> 

                                                                            {{-- </button> --}}
                                                                            {{-- <a href="{{route('themgiohang',$all->id)}}"></a> --}}

                                                                        </li>
                                                                       
                                                                    
                                                                        {{-- <a class="add-to-cart pull-left" href="{{route('themgiohang',$all->id)}}"><i class="fa fa-shopping-cart" ></i></a> --}}

                                                               

                                                                    <a class="beta-btn primary" href="{{route('detail',$all->id)}}"> Chi tiết 
                                                                     <i class="fa fa-chevron-right"></i></a>

                                                                 

                                                                     <div class="clearfix"></div>

                                                                 

                                                                  {{--   </button> --}}
                                                                    {{-- <a href="{{route('themgiohang',$all->id)}}">Add to cart</a> --}}

                                                                    {{-- <a class="add-cart-button btn-group" href="{{route('themgiohang',$all->id)}}"><i class="fa fa-shopping-cart" ></i></a> --}}
                                                                {{-- </li> --}}
                                                                {{-- <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li> --}}

                                                                {{-- <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                                        <i class="fa fa-retweet"></i>
                                                                    </a>
                                                                </li> --}}
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
                                    @endforeach
                                </div>
                                <div class="row">
                                    {{$allFood->links()}}
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane " id="list-container">
                            <div class="category-product  inner-top-vs">
                                @foreach($allFood as $all)
                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="upload/{{$all->image}}" alt="">
                                                            </div>
                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name">
                                                             <a href="{{route('detail',$all->id)}}">{{$all->name}}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                    @if($all->promotion_price==0)
                                                                    <span class="price">
                                                                            {{number_format($all->price)}} 
                                                                    </span>
                                                                @else
                                                                    <span class="price">
                                                                            {{number_format($all->price)}} 
                                                                    </span>
                                                                    
                                                                @endif
                                                            </div>
                                                            <!-- /.product-price -->
                                                            <div class="description m-t-10">{{$all->detail}}</div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <li class="add-cart-button btn-group">
                                                                           {{--  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> --}}
                                                                                {{-- <i class="fa fa-shopping-cart"></i> --}}

                                                                                <a class="add-to-cart pull-left" href="{{route('themgiohangone',$all->id)}}"><i class="fa fa-shopping-cart" ></i></a> 

                                                                            {{-- </button> --}}
                                                                            {{-- <a href="{{route('themgiohang',$all->id)}}"></a> --}}

                                                                        </li>
                                                                       
                                                                    
                                                                        {{-- <a class="add-to-cart pull-left" href="{{route('themgiohang',$all->id)}}"><i class="fa fa-shopping-cart" ></i></a> --}}

                                                               

                                                                    <a class="beta-btn primary" href="{{route('detail',$all->id)}}"> Chi tiết 
                                                                     <i class="fa fa-chevron-right"></i></a>

                                                                 

                                                                     <div class="clearfix"></div>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-list-row -->
                                                <div class="tag new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <!-- /.product-list -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endforeach
                                <div class="row">
                                    {{$allFood->links()}}
                                </div>
                                <!-- /.category-product-inner -->
                            </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane #list-container -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.search-result-container -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</div>
<!-- /.body-content -->
@endsection
@section('title','Trang Chủ')
@extends('index')
@section('content')
{{-- <div class="body-content outer-top-bd">
    <div class="container">
        <div class="track-order-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thông tin sinh viên</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style=""><a href="https://www.facebook.com/nguyentran.phuocthien">
                        <img class="card-img-top" src="template/assets/images/1.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title">Nguyễn Thiện</h5>
                            <p class="card-text">
                               Quá dẹp trai thôi!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style=""><a href="https://www.facebook.com/chithong.lam.9/photos?lst=100004617722085%3A100011240169718%3A1527623000&source_ref=pb_friends_tl">
                        <img class="card-img-top" src="template/assets/images/2.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title">Lam^ Thông</h5>
                            <p class="card-text">
                                Thằng thông khùng
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
</div> --}}

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">
                    {{-- <h3 class="section-title">Menu món ăn</h3> --}}
                    <div class="sidebar-filter">

                         <h2 class="section-title"  style="color: green" >DANH SÁCH MÓN ĂN </h2>
                  
                    <div class="sidebar-filter">
                     <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            {{-- <div class="widget-header">
                                <h4 class="widget-title"> MENU MÓN ĂN</h4>
                            </div> --}}
                             @foreach($loai as $all)
                            <div class="sidebar-widget-body m-t-10">
                                <ul class="list">

                                    <li >
                                        <a href="{{route('foodtype',$all->id)}}"> {{$all->name}} </a>
                                    </li>

                                   
                                    
                                </ul>
                                {{-- <a href="#" class="lnk btn btn-primary">Show Now</a> --}}
                            </div>
                             @endforeach
                              </div>
                           
                        </div> 

                        <div class="widget-body">
                <h2 class="section-title"  style="color: green" > Món ăn mới</h2>
                            @foreach($new_food as $new)
                            {{-- div class="beta-sales beta-lists"> --}}

                                <div class="media beta-sales-item">
                                     <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{route('detail',$new->id)}}">
                                                                <img src="upload/{{$new->image}}" alt="" width="250px" height="200px"> 
                                                            </a>
                                                        </div>
                                                    
                                                        <!-- /.image -->

                                                        <div class="tag new">
                                                            <span>new</span>
                                                        </div>
                                         </div>

                                 </div>
                                        <div class="media-body">
                                         <b>  <mark style="color: red" > {{$new->name}} </mark> </b><br>
                                         <div class="product-price">
                                            <span class="price">
                                             {{number_format($new->price)}} 
                                            </span>
                                        </div>
                                            {{-- <span class="beta-sales-price">{{$matt->price}}</span> --}}
                                        </div>
                                </div>
                            {{-- </div> --}}
                            @endforeach
                            {{-- {{ $new_food->links() }} --}}
                        </div>

                         <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                            <div id="advertisement" class="advertisement">
                                <div class="item bg-color">
                                    
                                       

                                             <div class="item">
                                    
                                    <img src="upload/fast.jpg" width="430" height="460" >
                                    

                                </div>
                                            {{-- <div class="big-text">
                                                Save
                                                <span class="big">50%</span>
                                            </div>


                                            <div class="excerpt">
                                                on selected items
                                            </div> --}}
                                    
                                    <!-- /.container-fluid -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    
                                    <img src="upload/hehe.jpg" width="400" height="430" >
                                    

                                </div>
                                <!-- /.item -->

                                <div class="item bg-color">
                                    <div class="container-fluid">
                                        <div class="caption vertical-top text-left">
                                            <div class="big-text">
                                                Save
                                      <span class="big">20%</span>
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

                             </br>

                            
                             {{-- <a href="#"><img class="right-banner" src="upload/k.png" width="400" height="400"></a> --}}
                            
                            <!-- /.owl-carousel -->

                        </div>
                        
                      
                        <!-- ============================================== Danh sách món ăn ============================================== -->
                        
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
                       

                        <!-- ============================================== COLOR: END ============================================== -->

                  
                        <!-- ============================================== Danh sách món ăn ============================================== -->
                        {{-- <div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
                            <div class="widget-header m-t-20">
                                <h4 class="widget-title">Danh sách món ăn</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <div class="accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
                                                Món ăn khô
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="#">Gà</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Hải sản</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Thịt bò</a>
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
                                                Món ăn nước
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="#">Mì</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Bánh canh</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Súp</a>
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
                                                Nước giải khát
                                            </a>
                                        </div>
                                        <!-- /.accordion-heading -->
                                        <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <ul>
                                                    <li>
                                                        <a href="#">Nước ngọt</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nước khoáng</a>
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
                        </div> --}}
                        <!-- /.sidebar-widget -->
                        <!-- ============================================== Giá ============================================== -->
                       {{--  <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <div class="widget-header">
                                <h4 class="widget-title">Giá</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <ul class="list">

                                    @foreach($loai as $l)
                                    <li>
                                        <a href="{{route('foodtype',$l->id)}}">{{$l->name}}</a>
                                    </li>

                                    @endforeach
                                    
                                </ul>
                                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                            </div>
                            <!-- /.sidebar-widget-body -->
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
                       {{--  <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
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

                                <div class="item" style="background-image: url('template/assets/images/advertisement/1.jpg');">

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
                        </div> --}}

                        

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
                    
                       
                            
                                <div class="title-r"  >  
                                       <span style="font-size: 50px; color: red;"> Hình thức thanh toán   </span>
                                </div>

                                <br> 


                            
              
                                <span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong>Thanh toán khi giao hàng (COD).</strong></span>

                                <br> 

                                <br> 

                                Shipper của cửa hàng sẽ giao hàng và thu tiền tại nhà.

                            
                            <!-- /.filter-tabs -->
                       
                        <!-- /.col -->
                       
                    
                    <!-- /.row -->
                </div>
               
                <!-- /.search-result-container -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</div>


@endsection
@section('title','Hình thức thanh toán ')
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

                        <h2 class="section-title" style="color: red">DANH SÁCH MÓN ĂN</h2>
                  
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

                             </br>

                            
                             <a href="#"><img class="right-banner" src="upload/k.png" width="400" height="400"></a>
                            
                            <!-- /.owl-carousel -->

                        </div>
                        
                         {{-- <div class="sidebar-filter"> --}}
                        <!-- ============================================== Danh sách món ăn ============================================== -->
                       {{--  <div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
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
                        </div> --}}
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
                      {{--   <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
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
                        </div> --}}

                        <!-- ============================================== COLOR: END ============================================== -->

                   {{--  </div> --}}
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
                                       <span style="font-size: 50px; color: red;"> Bảng giá ship món ăn tại cửa hàng </span>

                                      <h2>(Bảng giá áp dụng trong nội thành Tp.Hồ Chí Minh)</h2> </br>
                                </div>

                                <br> 

                                <p><strong>• Q.3, Q.10:</strong>&nbsp;Miễn phí<br></p>

                                <div><strong style="font-size: 14px;">• Q.1:</strong > 10.000 VNĐ</div>

                                <div><strong style="font-size: 14px;">• Q.4, 5, 11, T.Bình, P.Nhuận, B.Thạnh:&nbsp;</strong>15.000 VNĐ</div>

                                <div><strong style="font-size: 14px;">• Q.6, T.Phú :</strong>&nbsp;20.000 VNĐ<br><strong style="font-size: 14px;">• Q.8, Gò Vấp :</strong>&nbsp;25.000 VNĐ (nhận giao đơn hàng trên 200.000đ)<br><br><strong style="font-size: 14px;">Miễn phí giao hàng</strong> đối với đơn hàng trên <strong style="font-size: 14px;">200.000 VNĐ </strong>(trừ khu vực Q.8 và Gò Vấp).<strong style="font-size: 14px;"><br><br></strong>Thời gian giao hàng từ <strong style="font-size: 14px;">25 - 40 phút</strong> (tùy khu vực xa gần).<br>

                                    <br>
                                    <br>

                                    <div><img " src="upload/nem.png" style="display: block; margin-left: auto; margin-right: auto;" data-mce-src="upload/nem.png" height="200px;" width="350px;" data-mce-style="display: block; margin-left: auto; margin-right: auto;"></div>

                                    <br>

                                    Đồ ăn tại cửa hàng được đảm bảo trong các hộp kín và giấy bạc, và luôn lúc nào cũng sẽ luôn tươi rói, an toàn cho từng bũa ăn bạn dùng

                                     <br>

                                     <br>

                                    <div style="text-align: center;" data-mce-style="text-align: center;"><img src="upload/mai.jpg" data-mce-src="upload/mai.jpg" height="200px;" width="350px;"><br></div>

                                    <p><br>Quý khách hàng có thể xem {{-- <a href="http://www.foodhero.vn/pages/menu-giao-do-an-dem-foodhero" title="menu đồ ăn đêm" data-mce-href="http://www.foodhero.vn/pages/menu-giao-do-an-dem-foodhero"> --}}menu đồ ăn {{-- </a>&nbsp; --}}bằng hình ảnh, hoặc đặt món ăn trực tiếp trên website. Cửa hàng sẽ giao trong thời gian sớm nhất.<br><br></p>



                                  <br><div style="text-align: center;" data-mce-style="text-align: center;"><span style="color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;" data-mce-style="color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;">• Đặt món:</span><span data-mce-style="color: #bf0606;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px; color: rgb(191, 6, 6);"><strong style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;">&nbsp;(0283) 83 83 011 </strong></span><span style="color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;" data-mce-style="color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;">&nbsp;- Hotline:&nbsp;</span><span data-mce-style="color: #bf0606;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px; color: rgb(191, 6, 6);"><strong style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;">01254547437</strong></span></div> </br>

                                  <p><br></p>

                                  <div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;">Hân hạnh được phục vụ quý khách!</div>

                                  <div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: #333333; font-family: 'Arial, \'Helvetica Neue\', Helvetica, sans-serif', sans-serif; font-size: 14px; line-height: 20px;"><br style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;"><div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;"><span data-mce-style="color: #000080;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: rgb(0, 0, 128);"><strong style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;">Cửa hàng ăn vặt</strong></span></div><div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;"><span data-mce-style="color: #a30505;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: rgb(163, 5, 5);">Địa chỉ:</span>&nbsp;80 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</div><div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;"><span data-mce-style="color: #a30505;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: rgb(163, 5, 5);">Website:</span>&nbsp;<a href="http://www.foodhero.vn/" data-mce-href="http://www.foodhero.vn" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;"></a>&nbsp;-&nbsp;<span data-mce-style="color: #a30505;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: rgb(163, 5, 5);">Email:</span>&nbsp;<a href="mailto:foodhero.vn@gmail.com" data-mce-href="mailto:foodhero.vn@gmail.com" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;">thonglam1176@gmail.com</a></div><div style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box;"><span data-mce-style="color: #a30505;" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; color: rgb(163, 5, 5);">Fanpage:</span>&nbsp;<a href="http://www.facebook.com/FoodheroVietnam" data-mce-href="http://www.facebook.com/FoodheroVietnam" style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;" data-mce-style="padding: 0px; margin: 0px; outline: none; list-style: none; box-sizing: border-box; white-space: nowrap; color: #403d3b; text-decoration: none !important; background-color: transparent;">www.facebook.com/</a></div></div>



                            


                            
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
@section('title','Bảng giá ship món ăn')
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

                    <div class="sidebar-filter">
                        <!-- ============================================== Danh sách món ăn ============================================== -->
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

                        <!-- ============================================== COLOR: END ============================================== -->
                    {{-- <h3 class="section-title">Menu món ăn</h3> --}}
                   
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
                                       <span style="font-size: 50px; color: red;"> Giới thiệu về cửa hàng  </span>
                                </div>

                                <br> 

                            <br>  <span style="font-size: 16px;">   Để mang đến cho quý khách hàng những giây phút thư giãn, thưởng thức những món ăn vặt  được thoải mái, thuận tiện và tuyệt vời nhất. </span> </br> 

                           <br>  <span style="font-size: 16px;"> Chúng tôi thành lập cửa hàng này là mô hình bán đồ Ăn vặt Online và phục vụ ăn tại cửa hàng, (Phục vụ cả hai hình thức là vừa bán hàng theo kiểu truyền thống là ăn tại chỗ và giao đến tận nơi cho khách hàng có nhu cầu khi đặt hàng qua số điện thoại đường dây nóng của chúng tôi). </span> </br> 

                           <br>  <span style="font-size: 16px;"> Quý khách cũng có hể chat, nhắn tin qua http://facebook.com/thonglam1176 , hoặc cũng có thể gọi trực tiếp vào cửa hàng website để đặt hàng. </span> </br> 

                            <br>  <span style="font-size: 16px;"> Với những nhà cung cấp có kinh nghiệm nấu ăn trong các nhà hàng lâu năm, cùng với những con người trẻ trung và năng động, đã tạo nên một thực đơn phong phú chất lượng với nhiều món ăn vặt ngon và hấp dẫn tất cả những tín đồ ăn vặt, cũng như tất cả mọi người không kể lứa tuổi và giới tính. </span> </br> 
                                
                                     
                            <br> <span style="font-size: 16px;"> Quà Vặt Việt với Slogan "Ăn Vặt Phong Cách Việt" đã thể hiện rõ nét những món ăn vặt truyền thống của người Việt Nam từ xa xưa kết hợp với hiện đại, theo kịp xu hướng mới để đáp ứng nhu cầu của các thực khách ngày nay! Đến với cửa hàng các bạn sẽ được phục vụ tận tình chu đáo từ khâu đóng gói, đến các vật dụng nhỏ nhất như cái tăm, giấy ăn...Các bạn sẽ cảm thấy thật sự hài lòng với dịch vụ của chúng tôi. </span> </br> 
                                
                            <br>  <span style="font-size: 16px;"> Quý khách đặt hàng vui lòng liên hệ theo địa chỉ sau:</span> </br> 
                                     
                                <br> ************************************************************************</br> 
                                <br> <b> <span style="font-size: 14px;"> 80 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh </span> </b></br> 
                                     
                               <br> <b> <span style="font-size: 14px;"> Email: thonglam1176@gmail.com.vn | info@thonglam.vn</span> </b></br>  
                                     
                               <br> <b> <span style="font-size: 14px;">  Website: {{-- http://www.quavatviet.com | www.quavatviet.vn</br>  --}}</span></b></br> 
                                     
                              <br> <b> <span style="font-size: 14px;">   Facebook: {{-- www.facebook.com/quavatviet</br>  --}}</span> </b></br> 
                                     
                               <br> <b> <span style="font-size: 14px;">   Điện thoại: 01254547437  /  083 83 83 011 </span> </b></br>                                      
                               <br> <b> <span style="font-size: 14px;">  Rất hân hạnh được phục vụ quý khách!</span> </b></br> 

                                </br>
              


                            
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
@section('title','Giới thiệu về cửa hàng ')
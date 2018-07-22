@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">
                    {{-- <h3 class="section-title">Menu món ăn</h3> --}}
                  
                    {{-- <div class="sidebar-filter">
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

                                                    <li>
                                                        <a href="{{route('fooddetail',1)}}">Miếng</a>
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
                       

                        <!-- ============================================== COLOR: END ============================================== -->

                    {{-- </div>  --}}
                    <!-- /.sidebar-filter -->
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
                                    
                                    <img src="../upload/fast.jpg" width="430" height="460" >
                                    

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
                                    
                                    <img src="../upload/hehe.jpg" width="400" height="430" >
                                    

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

                            
                             <a href="#"><img class="right-banner" src="../upload/k.png" width="400" height="400"></a>
                            
                            <!-- /.owl-carousel -->

                        </div>

                        <!-- ============================================== COLOR: END ============================================== -->

                    </div>


                </div>
                <!-- /.sidebar-module-container -->
            </div>

            <!-- /.sidebar -->

            {{--  --}}
            <div class='col-md-9'>
                <!-- ========================================== SECTION – HERO ========================================= -->
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                
               

                   

                <!-- Blog Post -->

                <!-- Title -->
                <h1 class="the-article-title cms-title">{{$newdetail->title}}</h1> </br>

                <h3 class="the-article-summary cms-desc">{{$newdetail->description}} </h3>
               
                


                <!-- Author -->
               {{--  <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p> --}}

                <!-- Preview Image -->
                <div>
                <img class="img-responsive" src="../upload/{{$newdetail->image}}" width="533" height="504">
                 </div>

                <!-- Date/Time -->
               {{--  <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr> --}}

                <!-- Post Content -->
                 </br>
                <p class="lead">{{$newdetail->content}}  </p> 

                 </br>
                  <h3 class="the-article-summary cms-desc">Tác giả: {{$newdetail->author}} </h3>

                    <h3 class="the-article-summary cms-desc"> Nguồn trang: <a href="{{$newdetail->sourepage}}"> https://news.zing.vn/bo-sung-nuoc-dung-cach-khi-troi-nang-nong-post860640.html</a> </h3>
               

                

                <!-- Blog Comments -->

                <!-- Comments Form -->
               {{--  <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div> --}}

               
                <!-- Posted Comments -->

                <!-- Comment -->
                {{-- <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div> --}}

                <!-- Comment -->
                {{-- <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div> --}}
               
            {{-- 
            @endforeach --}}
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
@section('title','Chi tiết tin')
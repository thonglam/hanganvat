@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">


                    <div class="sidebar-filter">
                        <!-- ============================================== Danh sách món ăn ============================================== -->
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

                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>
                    <!-- ========================================== SECTION – HERO ========================================= -->
                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                {{-- <div class="clearfix filters-container m-t-10">
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
                </div> --}}
                <div class="panel-heading" style="background-color:pink; color:white;">
                    <h4><b>Tin tức mỗi ngày</b></h4>
               </div> 

        
                   
                     @foreach($news as $new)

                    <div class="tie-indent">
                        <div class="wrapper">
                            <div class="fleft" style="width:70%">
                                <h2><a href="{{route('newdetail',$new->id)}}"><strong>{{$new->title}}</strong></a></h2>
                                
                                <div class="fleft" style="width:29%">
                                    <span class="image">
                                        <a href="{{route('newdetail',$new->id)}}"><img src="upload/{{$new->image}}"  width="173" height="129"></a>
                                    </span>
                                    <br clear="all">
                                </div>
                                <div>
                                    {{$new->description}}
                                    <a href="{{route('newdetail',$new->id)}}">..Xem thêm</a>
                                </div>
                                <br clear="all">
                            </div>
                        </div>
                    </div>
                    @endforeach  
                    
                {{ $news->links() }}
              {{-- <div class="row">{{$news->links()}} </div>  --}}
                  <!-- /.search-result-container -->

              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
     
      <!-- /.container -->

  </div>
  <!-- /.body-content -->
  @endsection
  @section('title','Tin tức')




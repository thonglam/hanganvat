@extends('index')
@section('content')
\

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">
                   
                    <div class="sidebar-filter">


                         <h2 class="section-title" style="color: red">DANH SÁCH MÓN ĂN</h2>
                  
                    <div class="sidebar-filter">
                     <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            
                             @foreach($loai as $all)
                            <div class="sidebar-widget-body m-t-10">
                                <ul class="list">

                                    <li >
                                        <a href="{{route('foodtype',$all->id)}}"> {{$all->name}} </a>
                                    </li>

                                   
                                    
                                </ul>
                              
                            </div>
                             @endforeach
                              </div>
                           
                        </div> 

                         <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                        <h2 class="section-title"  style="color: green" > Tìm theo giá</h2>
                        <div class="sidebar-widget-body m-t-10">
                            <form method="get" action="{{route('search')}}" id="testform">
                                <ul class="list">
                                    <li>
                                        {{-- <a href="">Nhỏ hơn 20k</a> --}}
                                        <input class="search-field" id="giamin"  placeholder="Giá tối thiểu"   value="giá thấp nhất" name="pricemin" type="number"  onblur="checkQuan()" onkeydown="javascript: return event.keyCode == 69 ? false : true"/> 

                                    </li>
                                    <li>
                                       <input class="search-field"   id="giamax" placeholder="Giá tối đa" value="giá tối đa" name="pricemax" type="number"  onblur="checkQuan()" onkeydown="javascript: return event.keyCode == 69 ? false : true"/> 
                                   </li>

                                   <a class="btn btn-success"  onclick="kiemtra()" id="searchsubmit"><i class="fa fa-search"></i></a>  





                               </ul>
                           </form>

                       </div>
                       <!-- /.sidebar-widget-body -->
                   </div>

                        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                            <div id="advertisement" class="advertisement">
                                <div class="item bg-color">
                                    
                                       

                                             <div class="item">
                                    
                                    <img src="upload/fast.jpg" width="430" height="460" >
                                    

                                </div>
                                            
                                    
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
                       
                        \

                    </div>
                    <!-- /.sidebar-filter -->
                </div>
                <!-- /.sidebar-module-container -->
            </div>
            <!-- /.sidebar -->

        
            <div class='col-md-9'>

                <div class="title-r"  >  
                                       <span style="font-size: 50px; color: red;"> Khu vực giao hàng </span>

                                     
                                </div>
                                <br>
                                <br>
                <!-- ========================================== SECTION – HERO ========================================= -->
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                <p>Cửa hàng nhận giao các quận trong nội thành Tp.Hồ Chí Minh.<br><br>Bao gồm các quận sau: Q.1, 3, 4, 5, 6, 10, 11, Tân Bình, Phú Nhuận, Bình Thạnh, Tân Phú.<br><br>Bảng giá giao hàng như sau:<br><br><strong>• Q.3, Q10:</strong>&nbsp;Miễn phí<br><strong>• Q.1:</strong> 10.000 VNĐ <br><strong>• Q.4, 5, 11, T.Bình, P.Nhuận, B.Thạnh:</strong> 15.000 VNĐ <br><strong>• Q.6, T.Phú:</strong> 20.000 VNĐ</p>

                <div><strong>• Q.8, G.Vấp:</strong><span> 25.000 VNĐ (nhận hóa đơn trên 200.000Đ)</span></div>

                <p><br>Free Ship đối với đơn hàng trên 200.000đ (áp dụng cho tất cả các quận, trừ quận GV).</p>
               
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
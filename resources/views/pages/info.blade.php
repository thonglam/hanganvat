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

                    <div class="widget-body">
                        <h2 class="section-title"  style="color: green" > Món ăn mới</h2>
                        @foreach($new_food as $new)
                        

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
                       
                   </div>
               </div>
               
               @endforeach
               
           </div>
           
           <!-- /.sidebar-widget -->
           <!-- ============================================== COLOR============================================== -->
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

</div>


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
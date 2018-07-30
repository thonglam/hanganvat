@extends('index')
@section('content')


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
       {{-- </div> --}}
       @endforeach

   </div>

   <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
    <div id="advertisement" class="advertisement">
        <div class="item bg-color">



           <div class="item">

            <img src="upload/fast.jpg" width="430" height="460" >


        </div>
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
@extends('index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title"> <a href="{{route('trang_chu')}}"> Trang chủ</a> </br> </br>
				<h1><span style="color: green">Thông tin chi tiết món ăn: </span></h1> 
			</div>


			
			 {{-- <div class="pull-right">
				
			</div>
			<div class="clearfix"></div> --}}
		</div>
</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<br>
			{{-- <br>
			<br>
					 --}}	
						<div class="col-sm-4">
							<img src="../upload/{{$food->image}}" width="320px" height="200px">

						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title" ><h2 style="color: red"> {{$food->name}} </h2></p>
							</div>

							<p class="single-item-price">
								
												@if($food->promotion_price==0)

                                                   <span class="flash-sale "><h3 style="color: black"> {{number_format($food->price)}}đ </h3></span> 
                                                @else
                                                    <span class="flash-del">{{number_format($food->price)}}đ </span>
                                                   
                                                @endif


							</p>
							{{-- <div class="space20">&nbsp;</div> --}}

							{{-- <p>Chọn lựa </p> --}}
							<div class="single-item-options">
								{{-- <select class="wc-select" name="size">
									<option>Kích thước</option>
									<option value="nho">Nhỏ</option>
									<option value="vua"> Vừa</option>
									<option value="lon">Lớn</option>
									
								</select> --}}

								{{-- <div class="space15">&nbsp;</div>  --}}
								
								{{-- <select class="wc-select" name="color"> --}}
									{{-- <option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option> --}}
								<form action="{{route('themgiohang',$food->id)}}" method="GET"> 
									<u style="color: blue"><b style="font-size: 25px" > Số lượng: </b> </u> <div class="space10">&nbsp;</div>  <p> <input type="text" class="qty" name="quantity" value="1" maxlength="3" size="5"> 

								{{-- </select> --}}
								<button type="submit">
								<a class="add-to-cart" href="{{route('themgiohang',$food->id)}}"><i class="fa fa-shopping-cart"></i></a>
								Thêm vào giỏ hàng
								</button> </p>

								
        					
								</form>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a style="font-size: 30px">Thông tin chi tiết:</a></li>
						</ul>
                		<p class="lead">{{$food->detail}} </p>
						{{-- <div class="panel" id="tab-description">
							<pre>{{}}</pre>

						</div> --}}
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>

					{{-- <div class="beta-products-list">
						<h4>Món ăn tương tự</h4>

						<div class="row">

							@foreach($sp_tuongtu as $matt)
								<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('detail',$matt->id)}}"><img src="../template/assets/images/hinh_mon_an/{{$matt->image}}" width="250px" height="200px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$matt->name}}</p>
										<p class="single-item-price">

											@if($matt->promotion_price==0)

                                                    <span class="flash-sale">{{$matt->price}}đ</span>
                                                @else
                                                    <span class="flash-del">{{$matt->price}}đ </span>
                                                    <span class="flash-sale">{{$matt->promotion_price}}đ</span>

                                                @endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"> </a>
										<a class="beta-btn primary" href="{{route('detail',$matt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
								</div>
							@endforeach
						</div>


						<div class="row">{{$sp_tuongtu->links()}}</div>
						
					</div> <!-- .beta-products-list --> --}}
				</div>


				<div class="col-sm-3 aside">
					<div class="widget">
						<h4 class="widget-title" style="color: green">Món ăn tương tự</h4>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($sp_tuongtu as $matt)
									<div class="media beta-sales-item">
									<a href="{{route('detail',$matt->id)}}"><img src="../upload/{{$matt->image}}" width="150" height="120" ></a>
										<div class="media-body">
											
											<b>  <mark style="color: red" > {{$matt->name}} </mark> </b><br>

											<b> {{number_format($matt->price)}} </b>

											{{-- <span class="beta-sales-price">{{$matt->price}}</span> --}}
										</div>
									</div>
								@endforeach
								<div class="row">{{$sp_tuongtu->links()}}</div>
							</div>
							
						</div>
						
					</div> 
				</div>

					<!-- best sellers widget -->

					{{-- <div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget --> --}}
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

@extends('index')
@section('content')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif

<style type="text/css">
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
	/* display: none; <- Crashes Chrome on hover */
	-webkit-appearance: none;
	margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}
</style>
<div class="container" style="margin-top: 30px">
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">THÔNG TIN KHÁCH HÀNG</div>
				
				
				<div class="panel-body">
					<form id="myForm" novalidate class="form-horizontal" method="post" action="{{ route('dathang') }}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Tên:</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" {{ (Auth::check()) ? "readonly='true'" : "" }} value="{{ (Auth::check()) ?  Auth::user()->name : ''}}" required autofocus >
							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label" >Email:</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" {{ (Auth::check()) ? "readonly='true'" : "" }} value="{{(Auth::check()) ?  Auth::user()->email : '' }}">

							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Địa chỉ:</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address"  required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="phone" class="col-md-4 control-label"> Số điện thoại:</label>

							<div class="col-md-6">
								<input id="phone" type="number" class="form-control" name="phone" value="" required autofocus
								onkeydown="javascript: return event.keyCode == 69 ? false : true">

							</div>
						</div>

						 <div class="form-group">
							<label class="col-md-4 control-label">Muốn người khác nhận hàng</label>

							<div class="col-md-6">
								<input class="checkbox_check" id="myCheck" type="checkbox" name="nguoinhan" value="yes" onclick="myFunction()">Có<br>
							</div>
						</div> 

					 <div id="nguoinhan" class="nguoinhan" style="display: none;">
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Tên người nhận</label>

							<div class="col-md-6">
								<input id="namegn" type="text" class="form-control" name="namenguoinhan" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Địa chỉ người nhận</label>

							<div class="col-md-6">
								<input id="addressgn" type="text" class="form-control" name="addressnguoinhan" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="phone" class="col-md-4 control-label"> Số điện thoại người nhận</label>

							<div class="col-md-6">
								<input id="phonegn" type="text" class="form-control" name="phonenguoinhan" value="" required autofocus>

							</div>
						</div>
					</div> 


					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="col-md-8 col-md-offset-2">
							

								<div class="panel panel-default">
									<div class="panel-heading">ĐƠN HÀNG CỦA BẠN</div>

									<div class="panel-body">
										<div>
											@if(Session::has('cart'))
											@foreach($monan_cart as $cart)
											<!--  one item	 -->
											<div class="media">
												<img width="25%" src="upload/{{$cart['item'][
													'image']}}" alt="" class="pull-left">

													<div class="media-body">
														<p class="font-large"><b style="color: red"><b style="font-size: 25px"> {{$cart['item']['name']}} </b></b></p>


														<span class="color-gray your-order-info"><u style="color: blue"><b style="font-size:19px ">Số lượng: </b></u> <b>{{$cart['qty']}}</b><span>
														<br>
														<span class="color-gray your-order-info"><u style="color: blue"> <b style="font-size: 19px">Đơn giá:</u> </b> {{-- {{number_format($cart['price'])}} --}} <b> 
															<?php if($cart['item']['promotion_price'] != 0){ echo number_format($cart['item']['promotion_price']); }else{ echo number_format($cart['item']['price']);}  ?>

														{{-- {{number_format($cart['item']['price'])}}  --}}

													</b>đồng</span>
													</div>


												</div>



												<!-- end one item -->
											</div>
											@endforeach
											@endif


											<div class="clearfix"></div><br>
											<div class="pull-left"><p class="your-order-f18"><b style="font-size: 30px">Tổng tiền:</b></p></div>
											<div class="pull-right"><h5 class="color-black" style="color: red;">{{-- @if(Session::has('cart')){{number_format($totalPrice)}}@endif --}} <b style="font-size: 30px">{{number_format($totalPrice)}}  đồng </b></h5></div>
											<div class="clearfix"></div>
										</div>
									</div>


									<div class="panel panel-default">
										
										<div class="panel-heading">Hình thức thanh toán</div>
										<div class="panel-body">
											<div class="your-order-body">
												<ul class="payment_methods methods">
													<li class="payment_method_bacs">
														<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text=""  >
														<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
														<div class="payment_box payment_method_bacs" style="display: block;">
															Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
														</div>						
													</li>

													

												</ul>
											</div>
										</div>
						

										<div style="text-align: center;"><a id="thong" onclick="validateForm()" class="btn btn-success">Đặt hàng</a></div>
									
									</div>

									
						</form>
								</div>

				</div> <!-- .your-order -->
		</div>

	@endsection
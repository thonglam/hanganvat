
@extends('index')
@section('content')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif


<div class="container" style="margin-top: 30px">
	{{-- <input type="text" name="_token" value="{{csrf_token()}}"> --}}
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">THÔNG TIN KHÁCH HÀNG</div>
				{{-- <div class="row">@if(Session::has('thongbao')){{Session::has['thongbao']}}@endif</div> --}}
				
				<div class="panel-body">
					<form id="myForm" novalidate class="form-horizontal" method="post" action="{{ route('dathang') }}" onsubmit="submitForm()">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Tên:</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" {{ (Auth::check()) ? "readonly='true'" : "" }} value="{{ (Auth::check()) ?  Auth::user()->name : ''}}" required autofocus >
							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Email:</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="email" {{ (Auth::check()) ? "readonly='true'" : "" }} value="{{(Auth::check()) ?  Auth::user()->email : '' }}" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Địa chỉ:</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="phone" class="col-md-4 control-label"> Số điện thoại:</label>

							<div class="col-md-6">
								<input id="phone" type="text" class="form-control" name="phone" value="" required autofocus>

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
								<input id="name" type="text" class="form-control" name="namenguoinhan" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Địa chỉ người nhận</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="addressnguoinhan" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="phone" class="col-md-4 control-label"> Số điện thoại người nhận</label>

							<div class="col-md-6">
								<input id="phone" type="text" class="form-control" name="phonenguoinhan" value="" required autofocus>

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
							{{-- <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px"> --}}

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
														<span class="color-gray your-order-info"><u style="color: blue"> <b style="font-size: 19px">Đơn giá:</u> </b> {{-- {{number_format($cart['price'])}} --}} <b> {{number_format($cart['item']['price'])}} </b>đồng</span>
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
						

										<div style="text-align: center;"><button id="thong" type="submit" class="btn btn-success">Đặt hàng</button></div>
									{{-- </form> --}}
									</div>

									{{-- <div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div> --}}
						</form>
								</div>

				</div> <!-- .your-order -->
		</div>

	@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	
// 	$(document).ready(function () {
// // 		$('#imageaddform').submit(function(e) {
// //     	e.preventDefault(); // don't submit multiple times
// //     	this.submit(); // use the native submit method of the form element
// //     	alert('aaa');
// // });
// 		if ($('input.checkbox_check').is(':checked')) {	
// 		alert("aaa");
// 	}

// 	});

// 	if ($('input.checkbox_check').is(':checked')) {	
// 		alert("aaa");
// 	}

	function myFunction() {
		var x = document.getElementById("myCheck").checked;
		if (x == true){
			document.getElementById("nguoinhan").style.display = "block";
		}else{
			document.getElementById("nguoinhan").style.display = "none";
		}
		// document.getElementById("demo").innerHTML = x;
	}

	


	function submitForm()
	{
		var a = "Đặt hàng thành công";
		alert(a);
	}
</script>


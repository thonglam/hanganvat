
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
				<div class="panel-heading">Đặt hàng</div>
				{{-- <div class="row">@if(Session::has('thongbao')){{Session::has['thongbao']}}@endif</div> --}}
				<div class="panel-body">
					<form class="form-horizontal" method="post" action="{{ route('dathang') }}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						{{ csrf_field() }}


						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="" required autofocus>

							</div>
						</div>


						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Địa chỉ</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address" value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="phone" class="col-md-4 control-label"> Số điện thoại</label>

							<div class="col-md-6">
								<input id="phone" type="text" class="form-control" name="phone" value="" required autofocus>

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
									<div class="panel-heading">Đơn hàng của bản</div>
									<div class="panel-body">
										<div>
											@if(Session::has('cart'))
											@foreach($monan_cart as $cart)
											<!--  one item	 -->
											<div class="media">
												<img width="25%" src="template/assets/images/hinh_mon_an/{{$cart['item'][
													'image']}}" alt="" class="pull-left">

													<div class="media-body">
														<p class="font-large"><b style="font-size: 15px"> {{$cart['item']['name']}} </b></p>


														<span class="color-gray your-order-info">Số lượng: <b>{{$cart['qty']}}</b></span>
														<br>
														<span class="color-gray your-order-info">Đơn giá: {{-- {{number_format($cart['price'])}} --}} <b> {{number_format($cart['item']['price'])}} </b>đồng</span>
													</div>


												</div>



												<!-- end one item -->
											</div>
											@endforeach
											@endif


											<div class="clearfix"></div><br>
											<div class="pull-left"><p class="your-order-f18"><b>Tổng tiền:</b></p></div>
											<div class="pull-right"><h5 class="color-black" style="color: red;">{{-- @if(Session::has('cart')){{number_format($totalPrice)}}@endif --}} {{number_format($totalPrice)}}  đồng</h5></div>
											<div class="clearfix"></div>
										</div>

										<div class="your-order-item">

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

													<li class="payment_method_cheque">
														<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="" >
														<label for="payment_method_cheque">Chuyển khoản </label>
														<div class="payment_box payment_method_cheque" style="display: none;">
															Chuyển tiền đến tài khoản sau:
															<br>- Số tài khoản: 123 456 789
															<br>- Chủ TK: Nguyễn A
															<br>- Ngân hàng ACB, Chi nhánh TPHCM
														</div>						
													</li>

												</ul>
											</div>
										</div>
						

										<div style="text-align: center;"><button type="submit" class="btn btn-success">Đặt hàng</button></div>
									</form>
									</div>

									{{-- <div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div> --}}

								</div>

							</div> <!-- .your-order -->
						</div>


						@endsection
@extends('index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				
				<h1><span style="color: green">Thông tin chi tiết món ăn: </span></h1> 
			</div>


			
		
		</div>
</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<br>
			
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
                                                    <span class="flash-del">{{number_format($food->promotion_price)}}đ </span>
                                                   
                                                @endif


							</p>
							

							<div class="single-item-options">
								

								
								<form action="{{route('themgiohang',$food->id)}}" method="GET" >
							
								<u style="color: blue"><b style="font-size: 25px" > Số lượng: </b> </u> <div class="space10">&nbsp;</div>  <p>
								 <input type="number" name="quantity" value="1" id="quantity" size="5" maxlength="3"  onblur="checkQuan()" > 
								<button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Đặt hàng </button> 

								
        					
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

										</div>
									</div>
								@endforeach
								<div class="row">{{$sp_tuongtu->links()}}</div>
							</div>
							
						</div>
						
					</div> 
				</div>

					
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

<script type="text/javascript">
	function checkQuan()
	{	
		var a = document.getElementById('quantity').value;
		if( a < 0 ){
			alert('Không được nhập số âm');
			document.getElementById('quantity').value = 1;
		}
	}
</script>
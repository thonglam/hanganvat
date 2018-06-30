@section('title', 'Chi tiết hóa đơn')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Tên khách hàng: {{$bills->name}}
  </h1>
  <h1><small>Ngày đặt: {{$bills->date_order}}</small></h1>
  <h1><small>Địa chỉ: {{$bills->address}}</small></h1>
  <h1><small>Số điện thoại: {{$bills->phone}}</small></h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên Món Ăn</th>
        <th>Hình ảnh</th>
        <th>Số Lượng</th>
        <th>Giá</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bills->billdetail as $bill)
      <tr>
        <th scope="row">{{$stt++}}</th>
        <td>{{ $bill->food->name }}</td>
        <td><img src="{{URL::asset('upload/'.$bill->food->image)}}" height="50px" width="80px"></td>
        <td>{{ $bill->quantity }}</td>
        <td>{{ $bill->price }}</td>
      </tr>
      @endforeach
      <tr>
        <th>Tổng cộng:</th>
        <th></th>
        <th></th>
        <th></th>
        <th>{{$bills->total}}</th>
      </tr>
  </tbody>
</table>
</div>
@endsection
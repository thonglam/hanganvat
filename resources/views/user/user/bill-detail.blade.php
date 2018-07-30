@section('title', 'Chi tiết hóa đơn')
@extends('user.masteruser')
@section('content_user')
<div class="col-lg-12">
  <h1 class="page-header">Tên khách hàng: {{$bills->name}}
  </h1>
  <div>Ngày đặt: {{$bills->date_order}}</div>
  <div>Địa chỉ: {{$bills->address}}</div>
  <div>Số điện thoại: {{$bills->phone}}</div>
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
        <td>{{ number_format($bill->price).' đ' }}</td>
      </tr>
      @endforeach
      <tr>
        <th>Tổng cộng:</th>
        <th></th>
        <th></th>
        <th></th>
        <th>{{number_format($bills->total).' đ'}}</th>
      </tr>
  </tbody>
</table>
</div>
@endsection
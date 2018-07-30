@section('title', 'Chi tiết hóa đơn')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Tên khách hàng: {{$bills->name}}
  </h1>
  <h4>Ngày đặt: {{$bills->date_order}}</h4>
  <h4>Địa chỉ: {{$bills->address}}</h4>
  <h4>Số điện thoại: {{$bills->phone}}</h4>
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
        <th>Đã bao gồm thuế VAT</th>
        <th>{{ number_format($bills->total).' đ'}}</th>
      </tr>
  </tbody>
</table>
</div>
@endsection
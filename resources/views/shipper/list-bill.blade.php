@section('title', 'Danh sách sản phẩm')
@extends('index_dbshipper')
@section('content_shipper')
<div class="content-wrapper">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Giá</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Hiện trạng</th>
    </tr>
  </thead>
 <!--  @foreach($bills as $bill) -->
  <tbody>
   <!--  <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$bill->name}}</td>
      <td>{{$bill->total}}</td>
      <td>{{$bill->date_order}}</td>
      <td>{{$bill->status}}</td>
    </tr> -->
  </tbody>
  @endforeach
</table>
</div>
@endsection
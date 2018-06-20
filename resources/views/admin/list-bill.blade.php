@section('title', 'Danh sách sản phẩm')
@extends('index_dbadmin')
@section('content_admin')
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
  @foreach($bill as $bill)
  <tbody>
    <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$food->name}}</td>
      <td><img src="template/assets/images/hinh_mon_an/{{$food->image}}" alt="" style="width: 50px; height: auto;"></td>
      <td>{{$bill->price}}</td>
      <td>{{$bill->promotion_price}}</td>
      <td>{{$bill->unit}}</td>
      <td>
        <a href="{{route('edit_food',$food->id)}}">Sửa</a>
        <button>Xóa</button>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@endsection
@section('title', 'Danh sách sản phẩm')
@extends('index_dbadmin')
@section('content_admin')
<div class="content-wrapper">
<table id="sampleTable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên món ăn</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Giá khuyến mãi</th>
      <th scope="col">Đơn vị tính</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  @foreach($foods as $food)
  <tbody>
    <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$food->name}}</td>
      <td><img src="template/assets/images/hinh_mon_an/{{$food->image}}" alt="" style="width: 50px; height: auto;"></td>
      <td>{{$food->price}}</td>
      <td>{{$food->promotion_price}}</td>
      <td>{{$food->unit}}</td>
      <td>
        <a href="{{route('edit_food',$food->id)}}">Sửa</a>
        <a href="{{route('listfood',$food->id)}}">Xóa</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@endsection
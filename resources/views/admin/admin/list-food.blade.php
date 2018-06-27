@section('title', 'Danh sách sản phẩm')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Món ăn</small>
  </h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên món ăn</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Giá khuyến mãi</th>
        <th scope="col">Đơn vị tính</th>
        <th scope="col">Khuyến mãi thêm</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach($foods as $food)
      <tr>
        <th scope="row">{{$stt++}}</th>
        <td>{{$food->name}}</td>
        <td><img src="template/assets/images/hinh_mon_an/{{$food->image}}" alt="" style="width: 50px; height: auto;"></td>
        <td>{{$food->price}}</td>
        <td>{{$food->promotion_price}}</td>
        <td>{{$food->unit}}</td>
        <td>{{$food->promotion}}</td>
        <td>
          <a href="{{route('edit_food',$food->id)}}">Sửa</a>
          &emsp;&emsp;
          <a href="{{route('listfood',$food->id)}}">Xóa</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
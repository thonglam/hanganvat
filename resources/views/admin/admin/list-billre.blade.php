@section('title', 'Hóa đơn đã nhận')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn đã nhận</small>
  </h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Giá</th>
        <th scope="col">Chi tiết</th>
      </tr>
    </thead>
    <tbody>
     @foreach($all as $bill)
     <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$bill->name}}</td>
      <td>{{$bill->date_order}}</td>
      <td>{{$bill->total}}</td>
      <td class="center"><i class="fa fa-building-o fa-fw"></i>
        <a href="{{ route('detail-bill',$bill->id) }}">Chi tiết hóa đơn</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
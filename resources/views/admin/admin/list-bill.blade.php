@section('title', 'Danh sách hóa đơn')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn</small>
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
        <th scope="col">Hiện trạng</th>
        <th scope="col">Shipper</th>
        <th scope="col">Chi tiết</th>
      </tr>
    </thead>
    <tbody>
     @foreach($all as $bill)
     <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$bill->name}}</td>
      <td>{{$bill->date_oder}}</td>
      <td>{{$bill->total}}</td>

      @if($bill->status == 0)

      <td>Đã nhận đơn hàng</td>

      @elseif($bill->status == 1)

      <td>Đang giao hàng</td>

      @elseif($bill->status == 2)

      <td>Đã giao hàng</td>

      @else

      <td>Đã hủy đơn hàng</td>

      @endif

      <td>Shipper</td>
      <td>
        <a href="#">Chi tiết hóa đơn</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
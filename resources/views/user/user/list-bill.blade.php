@section('title', 'Danh sách hóa đơn đã đặt')
@extends('admin.masteruser')
@section('content_user')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn đã đặt</small>
  </h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Shipper</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Giá</th>
        <th scope="col">Hiện trạng</th>
        <th scope="col">Chi tiết</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
@endsection
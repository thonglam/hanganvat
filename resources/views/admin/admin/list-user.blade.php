@section('title', 'Danh sách người dùng')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Người dùng</small>
  </h1>
</div>
<div class="content-wrapper">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Địa chỉ Email</th>
      <th scope="col">Phân Quyền</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
</tbody>
</table>
</div>
@endsection
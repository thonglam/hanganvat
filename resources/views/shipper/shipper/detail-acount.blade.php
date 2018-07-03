@section('title', 'Chi tiết người dùng')
@extends('shipper.mastershipper')
@section('content_shipper')
<div class="col-lg-12">
  <h1 class="page-header">Tên khách hàng: {{$user->name}}</h1>
  <h1><small>Tài khoản email: {{$user->email}}</small></h1>
</div>
@endsection
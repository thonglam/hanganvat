@section('title', 'Danh sách người dùng')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Người dùng</small>
  </h1>
</div>
<div class="col-lg-12">
  @if (Session::has('flash_massage'))
  <div class="alert alert-success">
    {!!  Session::get('flash_massage') !!}
  </div>
  @endif
</div>
<div class="content-wrapper">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$stt++}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <!-- Hien thi quyen -->
      @if($user->role == 0)
      <td>Quyền người dùng</td>
      @elseif($user->role == 1)
      <td>Quyền giao hàng</td>
      @else
      <td>Quyền quản lý</td>
      @endif
      <!-- Hien thi ai duoc sua quyen -->
      @if($user->role == 2)
      <td></td>
      @else
      <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('change_role',$user->id)}}">Cấp quyền khác</a></td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
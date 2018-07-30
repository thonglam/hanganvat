@section('title', 'Chi tiết người dùng')
@extends('shipper.mastershipper')
@section('content_shipper')
<div class="content-wrapper">
  <div class="panel panel-body">
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>Cập nhật thông tin người dùng: 
            <i>{{$user->name}}</i>
          </b>
        </div>
        <div class="col-lg-12">
          @if (Session::has('flash_massage'))
          <div class="alert alert-success">
            {!!  Session::get('flash_massage') !!}
          </div>
          @endif
        </div>
        <div class="panel-body">
          <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Tên người dùng:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="name" value="{{$user->name}}" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Địa chỉ Email:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Quyền được cấp:</label>
              <div class="col-sm-10">
                @if($user->role == 0)
                <input type="text" class="form-control" name="role" value="Quyền người dùng" readonly="readonly">
                @elseif($user->role == 1)
                <input type="text" class="form-control" name="role" value="Quyền giao hàng" readonly="readonly">
                @elseif($user->role == 2)
                <input type="text" class="form-control" name="role" value="Quyền Quản lý" readonly="readonly">
                @else
                <input type="text" class="form-control" name="role" value="Supper Admin" readonly="readonly">
                @endif
              </div>
            </div>
            <div style="text-align: center;">
              <a href="{{ route('changepass1',$user->id) }}">Bạn có muốn đổi mới mật khẩu ?</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
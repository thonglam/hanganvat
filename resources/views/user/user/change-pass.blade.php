@section('title', 'Thay đổi thông tin')
@extends('user.masteruser')
@section('content_user')
<div class="content-wrapper">
    <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Cập nhật thông tin người dùng: 
                        <i>{{$user->name}}</i>
                    </b>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    <form method="post" class="form-horizontal" action="{{route('change_pass',$user->id)}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Tên người dùng:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nhập tên người dùng mới" name="name" value="{{$user->name
                            }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Địa chỉ Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Mật khẩu mới:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Mật khẩu mới" name="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nhâp lại mật khẩu mới:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Nhâp lại mật khẩu mới" name="password_confirmation" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
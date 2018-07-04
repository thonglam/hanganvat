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
                        <label class="control-label col-sm-2" for="email">Quyền:</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control" readonly="readonly">
                                <option value="0">Người dùng</option>
                                <option value="1">Người giao hàng</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
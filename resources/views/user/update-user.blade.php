@section('title', $food->name) 
@extends('index_dbuser')
@section('content_user')
<div class="panel panel-body">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Cập nhật sản phẩm
                    <i>{{$user->name}}</i>
                </b>
            </div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{route('edit',['id'=>$food->id])}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Tên người dùng:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập tên sp" name="name" value="{{ $food->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Mật khẩu:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập giá khuyến mãi" name="promotion_price" value="{{ $food->promotion_price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nhập lại mật khẩu mới:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập đơn vị tính" name="unit" value="{{ $food->unit}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    {{@csrf_field()}}
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
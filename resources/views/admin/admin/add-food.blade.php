@section('title', 'Thêm món ăn mới')
@extends('admin.masteradmin')
@section('content_admin')
<div class="content-wrapper">
    <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Thêm món ăn mới</b>
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
                    <form method="post" class="form-horizontal" action="{{ route('addfood') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Tên sản phẩm:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập tên sp" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Tên loại:</label>
                                <div class="col-sm-9">
                                    <select name="id_type" class="form-control">
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Giá sản phẩm:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập giá sp" name="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Giá khuyến mãi :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập giá khuyến mãi" name="promotion_price" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Đơn vị tính:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập đơn vị tính" name="unit">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Mô tả đầy đủ:</label>
                                <div class="col-sm-9">
                                    <textarea id="detail" class="form-control" name="detail" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="today" value="1"> Hôm nay
                                        </label>
                                        &emsp;
                                        <label>
                                            <input type="checkbox" name="new" value="1"> Món mới
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="file" name="image" id="file">
                                            <div id="imgup" style="margin: 50px 0 0 -50px;"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                        {{@csrf_field()}}
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
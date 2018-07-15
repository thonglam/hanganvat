@section('title', 'Thêm tin tức mới')
@extends('admin.masteradmin')
@section('content_admin')
<div class="content-wrapper">
    <div class="panel panel-body">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Thêm tin tức mới</b>
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
                    <form method="post" class="form-horizontal" action="{{ route('addnews') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="title">Tiêu đề:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Mô tả:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập mô tả" name="price">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Nội dung:</label>
                                <div class="col-sm-9">
                                    <textarea id="detail" class="form-control" name="detail" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="file" name="image" id="file">
                                            <div id="imgup"></div>
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
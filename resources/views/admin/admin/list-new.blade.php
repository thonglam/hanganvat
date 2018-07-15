@section('title', 'Danh sách bài viết')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Bài viết</small>
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
        <th scope="col">Tiêu đề</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
    </thead>
    <tbody>
      @foreach($news as $new)
      <tr>
        <th scope="row">{{$stt++}}</th>
        <td>{{$new->title}}</td>
        <td><img src="upload/{{$new->image}}" alt="" style="width: 150px; height: 80px;"></td>
        <td>{{$new->description}}</td>
        <td>{{$new->content}}</td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ route('edit_new',$new->id) }}">Sửa</a></td>
        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là xóa không')" href="{{route('listnew',$new->id)}}">Xóa</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
@section('title', 'Danh sách hóa đơn')
@extends('user.masteruser')
@section('content_user')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn đã đặt</small>
  </h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên người nhận</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ nhận</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Giá</th>
        <th scope="col">Hiện trạng</th>
        <th scope="col">Shipper</th>
        <th scope="col">Chi tiết</th>
      </tr>
    </thead>
    <tbody>
     @foreach($all as $bill)
     <tr>
      <th scope="row">{{$stt++}}</th>
      @if ($bill->namenguoinhan == '')
      <td>{{ $bill->name }}</td>
      @else
      <td>{{ $bill->namenguoinhan }}</td>
      @endif

      @if ($bill->phonenguoinhan == '')
      <td>{{ $bill->phone }}</td>
      @else
      <td>{{ $bill->phonenguoinhan }}</td>
      @endif

      @if ($bill->addressnguoinhan == '')
      <td>{{ $bill->address }}</td>
      @else
      <td>{{ $bill->addressnguoinhan }}</td>
      @endif
      
      <td>{{$bill->date_order}}</td>
      <td>{{$bill->total}}</td>

      @if($bill->status == 0)

      <td>Đã nhận đơn hàng</td>

      @elseif($bill->status == 1)

      <td>Đang giao hàng</td>

      @else($bill->status == 2)

      <td>Đã giao hàng</td>

      @endif

      <td>{{ $bill->shipper }}</td>
      <td>
        <a href="{{ route('detailbill',$bill->id) }}">Chi tiết hóa đơn</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
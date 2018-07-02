@section('title', 'Danh sách hóa đơn đã đặt')
@extends('shipper.mastershipper')
@section('content_shipper')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn chưa giao hàng</small>
  </h1>
</div>
<div class="content-wrapper">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Giá</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bills as $bill)
      <tr>
        <th scope="row">{{$stt++}}</th>
        <td>{{ $bill->name }}</td>
        <td>{{ $bill->address }}</td> 
        <td>{{ $bill->phone }}</td>
        <td>{{ $bill->date_order }}</td>
        <td>{{ $bill->total }}</td>
        <td>
          <form action="{{ route('listBill',$bill->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="{{Auth::user()->name}}">
            <button>Nhận hóa đơn</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
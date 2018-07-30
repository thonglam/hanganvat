@section('title', 'Danh sách hóa đơn đã đặt')
@extends('shipper.mastershipper')
@section('content_shipper')
<div class="col-lg-12">
  <h1 class="page-header">Danh sách
    <small>Hóa đơn chưa giao hàng</small>
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
        <th scope="col">Tên người đặt</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Tên người nhận</th>
        <th scope="col">Sđt nhận</th>
        <th scope="col">Địa chỉ nhận</th>
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
        <td>{{ $bill->phone }}</td>

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

        <td>{{ $bill->date_order }}</td>
        <td>{{ number_format($bill->total).' đ'}}</td>
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
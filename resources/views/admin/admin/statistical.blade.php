@section('title', 'Thống kê')
@extends('admin.masteradmin')
@section('content_admin')
<div class="col-lg-12">
  <h1 class="page-header">Thống kê bán hàng</h1>
</div>
<div class="content-wrapper">
 <form action="{{ route('statistic') }}" method="get" class="time">
  <h3>Từ:
    <input type="date" value="{{  app('request')->input('time1') }}" name="time1" style="border: none;" >
    Đến:
    <input type="date" value="{{  app('request')->input('time2') }}" name="time2" style="border: none;" >
    <button type="submit" class="btn btn-primary"> Xem </button>
  </h3>
</form>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Giá</th>
      <th scope="col">Hiện trạng</th>
      <th scope="col">Shipper</th>
    </tr>
  </thead>
  <tbody>
    @php
      $total = 0;
    @endphp
   @foreach($all as $bill)
    @php
      $total += $bill->total;
    @endphp
   <tr>
    <th scope="row">{{$stt++}}</th>
    <td>{{$bill->name}}</td>
    <td>{{$bill->date_order}}</td>
    <td>{{number_format($bill->total).' đ'}}</td>

    @if($bill->status == 0)

    <td>Đã nhận đơn hàng</td>

    @elseif($bill->status == 1)

    <td>Đang giao hàng</td>

    @else($bill->status == 2)

    <td>Đã giao hàng</td>

    @endif

    <td>{{ $bill->shipper }}</td>
  </tr>
  @endforeach
</tbody>
<tfoot>
  <th colspan="5"> Tổng cộng:</th>
  <th >{{number_format($total).' đ'}}</th>
</tfoot>
</table>
</div>
@endsection
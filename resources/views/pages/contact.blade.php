@extends('index')
@section('content')
<div class="breadcrumb">
    <div class="container">
       

        <div class="pull-left">
                <h3 class="inner-title"> <a href="{{route('trang_chu')}}"> TRANG CHỦ</a> 
                <h1><span style="color: green">LIÊN HỆ: </span></h1> 
            </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="contact-page">
                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15679.654213247703!2d106.68219949999998!3d10.7411458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad13fbdfd9%3A0x31e4d76059405939!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgU8OgaSBHw7Ju!5e0!3m2!1svi!2s!4v1523086275711" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-9 contact-form">
                    <div class="col-md-12 contact-title">
                       <b> <h2>Thông tin liên hệ</h2> </b> </br>
                    </div>
                    
                        <form class="register-form" role="form" method="post" action="{{ route('lienhe') }}" onsubmit="submitForm()">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}

                        <div class="col-md-4 ">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <b><label class="info-title" for="exampleInputName" style="font-size: 20px">Họ tên</b>
                                    <span>*</span>
                                </label>
                                <input name="hoten" class="form-control unicase-form-control text-input" id="exampleInputName"  value="{{ old('name') }}"{{-- placeholder="Name" --}} required autofocus >
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1" style="font-size: 20px">Email của bạn
                                    <span>*</span>
                                </label>
                                <input name="email" type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" {{-- placeholder="admin@unicase.com" --}} required autofocus >
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputTitle" style="font-size: 20px">Tiêu đề
                                    <span>*</span>
                                </label>
                                <input name="tieude" class="form-control unicase-form-control text-input" id="exampleInputTitle" required autofocus {{-- placeholder="Title" --}}>
                            </div>
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputComments" style="font-size: 20px">Phản hồi
                                    <span>*</span>
                                </label>
                                <textarea name="phanhoi" class="form-control unicase-form-control" id="exampleInputComments" required autofocus></textarea>
                            </div>
                       
                    </div>
                    <div class="col-md-12 outer-bottom-small m-t-20">
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi</button>
                    </div>
                </div>
                 </form>
                <div class="col-md-3 contact-info">
                    <div class="contact-title">
                        <b> <h2>Thông tin liên lạc</h2> </b> </br>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i">
                            <i class="fa fa-map-marker"></i>
                        </span>
                      <b>  <span class="contact-span" style="font-size: 20px">80 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</span> </b>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i">
                            <i class="fa fa-mobile"></i>
                        </span>
                       <b> <span class="contact-span" style="font-size: 20px">01254547437
                            <br> <span class="contact-span" style="font-size: 20px"> (083) 83 83 011</span></span></b>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <b>  <span class="contact-span" style="font-size: 20px">thonglam1@gmail.com</span> </b>
                    </div>
                </div>
            </div>
            <!-- /.contact-page -->
        </div>
        
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Liên Hệ')
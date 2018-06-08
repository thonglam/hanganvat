@extends('index')
@section('content')
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">sign in</h4>
                    <p class="">Hello, Welcome to your account.</p>
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in">
                            <i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in">
                            <i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div>
                    @if($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        <br>
                        @endforeach
                    </div>
                    @endif
                    @if(Session::has('errror'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form class="register-form outer-top-xs" role="form" action="{{route('dang_nhap')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address
                                <span>*</span>
                            </label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password
                                <span>*</span>
                            </label>
                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                            </label>
                            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>
                </div>
                <!-- Sign-in -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.sigin-in-->
    </div>
    <!-- /.container -->
</div>
  
@endsection
@section('title','Đăng Nhập')
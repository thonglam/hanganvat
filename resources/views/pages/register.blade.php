@extends('index')
@section('content')
<style>
    .outer-top-bd{
        margin-top:unset;
    }
    input,label,button{
        margin: 10px;
    }
</style>
<div class="body-content outer-top-bd">
		<div class="container">
			<div class="sign-in-page inner-bottom-sm">
				<div class="row">
					<!-- Sign-in -->
					<div class="col-md-6 col-sm-6 sign-in">
						<h4 class="">Đăng kí</h4>
                        <div class="social-sign-in outer-top-xs">
                            <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}
                            <br>
                            @endforeach
                        </div>
                        @endif
                        <form class="register-form outer-top-xs" role="form" method="post">
                            @csrf
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                            @if($errors->has('username'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('username') as $err)
                                {{$err}}
                                <br>
                                @endforeach
                            </div>
                            @endif
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname" required value="{{old('fullname')}}">
                            <input type="email" name="email" class="form-control" placeholder="Email address" required>
                            <input type="date" name="birthdate" class="form-control" placeholder="Birthdate" required>
                            <label><input type="radio" name="gender" value="nam"> Nam</label>
                            <label><input type="radio" name="gender" value="nu"> Nữ</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign up</button>
                        </form>	
					</div>
					<!-- Sign-in -->

					<!-- create a new account -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.sigin-in-->
	<!-- /.container -->
	</div>
@endsection
@section('title','Đăng kí tài khoản')
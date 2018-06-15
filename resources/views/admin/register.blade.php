@extends('layout')
@section('content')
<style>
    .card-container.card{
        max-width:500px
    }
</style>
<div class="card card-container">
    <p id="profile-name" class="profile-name-card"></p>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}
        <br>
        @endforeach
    </div>
    @endif

    <form class="form-signin" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="username" class="form-control" placeholder="username" required>
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
@endsection

@section('title','Đăng kí tài khoản')
@extends('layout')
@section('content')
<style>
    .card-container.card{
        max-width:500px
    }
</style>
<div class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
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

        <input type="text" name="taikhoan" class="form-control" placeholder="Ten tai khoan" required>
        @if($errors->has('taikhoan'))
        <div class="alert alert-danger">
            @foreach($errors->get('taikhoan') as $err)
            {{$err}}
            <br>
            @endforeach
        </div>
        @endif
        
        <input type="text" name="hoten" class="form-control" placeholder="Ho va ten" required value="{{old('fullname')}}">

        <input type="email" name="email" class="form-control" placeholder="Dia chi Email" required>

        <label><input type="radio" name="gender" value="nam"> Nam</label>
        <label><input type="radio" name="gender" value="nu"> Nữ</label>
        
        <input type="text" name="diachi" class="form-control" placeholder="Dia chi" required>
        
        <input type="text" name="sodt" class="form-control" placeholder="So DT" required>
        
        <input type="password" name="matkhau" class="form-control" placeholder="Mat khau" required>
        <input type="password" name="nhaplai_matkhau" class="form-control" placeholder="Nhap lai mat khau" required>
        
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Dang ky</button>
    </form>
</div>
@endsection

@section('title','Đăng kí tài khoản')
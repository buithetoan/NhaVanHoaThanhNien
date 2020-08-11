@extends('client.shared.app')
@section('title', 'Đăng Ký')
@section('content')
<div class="client_lr_form">
    <form action="/register" method="post">
        <h2 class="text-center">Đăng ký</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Đăng ký</button>
        </div>
        <div class="text-center"><a href="{{ url('/c/login')}}">Đăng nhập</a></div>
    </form>
</div>
@endsection
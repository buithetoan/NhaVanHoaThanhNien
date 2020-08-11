@extends('client.shared.app')
@section('title', 'Đăng Nhập')
@section('content')
<div class="client_lr_form">
    <form action="/login" method="post">
        <h2 class="text-center">Đăng nhập</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Đăng nhập</button>
        </div>
        <div class="clearfix">
            <p class="text-center"><a href="{{ url('/c/register')}}">Đăng ký</a></p>
        </div>
    </form>
</div>
@endsection
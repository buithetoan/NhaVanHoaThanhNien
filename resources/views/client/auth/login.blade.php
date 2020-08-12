@extends('client.shared.app')
@section('title', 'Đăng Nhập')
@section('content')
<div class="client_lr_form">
    <form method="POST" action="{{ route('client.login') }}">
        @csrf
        <h2 class="text-center">Đăng nhập</h2>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Đăng nhập</button>
        </div>
        <div class="clearfix">
            <p class="text-center"><a href="{{ url('/register')}}">Đăng ký</a></p>
        </div>
    </form>
</div>
@endsection

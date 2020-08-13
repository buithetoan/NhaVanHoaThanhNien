@extends('client.shared.app')
@section('title', 'Hoạt động')
@section('content')
<!-- Page title -->
<h1 class="mt-4 mb-3">Hoạt động</h1>
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">hoạt động</li>
</ol>
<!-- Page -->
<div class="active_page">
    <!-- Loop -->
    @foreach($activities as $key => $active)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ url('/blog') }}">
                            <img class="img-fluid rounded" src="{{  asset('client/imgs/'.$active->image) }}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="card-title"><a href="#">{{$active->title}}</a></h2>
                        <p class="card-text">{!! Illuminate\Support\Str::limit($active->content, 100) !!}</p>
                        <a href="{{ url('/blog') }}" class="btn btn-success">Read More &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">Bắt đầu: {{$active->start_date}} - Kết thúc: {!! $active->end_date ? $active->end_date : '__:__:__' !!}</div>
        </div>
    @endforeach
</div>
@endsection

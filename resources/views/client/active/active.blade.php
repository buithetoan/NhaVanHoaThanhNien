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
        <div class="search-active">
            <form action="{{url('active')}}" method="GET" class="row col-md-12 mb-4">
                <input class="form-control col-md-3" value="{{old('keyword')}}" name="keyword" placeholder="Search here..." type="text">
                <button class="ml-2 btn btn-success" type="submit"> Search</button>
            </form>
        </div>
        <!-- Loop -->
        @foreach($activities as $key => $active)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ url('/active/detail?active_id='.$active->id) }}">
                                <img class="img-fluid rounded" src="{{  asset('images/'.$active->image) }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title"><a href="{{ url('/active/detail?active_id='.$active->id) }}">{{$active->title}}</a></h2>
                            <p class="card-text">{!! Illuminate\Support\Str::limit($active->content, 100) !!}</p>
                            <a href="{{ url('/active/detail?active_id='.$active->id) }}" class="btn btn-success">Xem thêm &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Bắt đầu: {{$active->start_date}} - Kết thúc: {!! $active->end_date ? $active->end_date : '__:__:__' !!}</div>
            </div>
        @endforeach
    </div>
@endsection

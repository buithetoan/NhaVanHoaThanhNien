@extends('client.shared.app')
@section('title', 'Các khóa học ngoại khóa')
@section('content')
@if(Session::has('err'))
    <div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-danger alert-dismissible show" role="alert" style="position: absolute;">
        <strong>{{ Session::get('err') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Page title -->
    <h1 class="mt-4 mb-3">Các khóa học ngoại khóa</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/home')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">các khóa học ngoại khóa</li>
    </ol>
    <!-- Page -->
    <div class="class_page">
        <div class="search-course">
            <form action="{{url('course')}}" method="GET" class="row col-md-12 mb-4">
                <input class="form-control col-md-3" value="{{old('keyword')}}" name="keyword" placeholder="Search here..." type="text">
                <button class="ml-2 btn btn-success" type="submit"> Search</button>
            </form>
        </div>
        <div class="row">
        @foreach($courses as $key => $course)
            <!-- Loop -->
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-image">
                            <a href="{{ url('/course/detail?course_id='.$course->id) }}"><img class="card-img-top" src="{{ asset('images/'.$course->image)}}" alt=""></a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ url('/course/detail?course_id='.$course->id) }}">{{$course->name}}</a>
                            </h4>
                            <div class="card-text">
                                <p>{{$course->title}}</p>
                            </div>
                            <div class="card-button">
                                <a href="{{ url('/course/detail?course_id='.$course->id) }}" class="btn btn-success">Chi tiết</a>
                                <a href="{{ url('/course/meet?course_id='.$course->id) }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Loop -->
            @endforeach
        </div>
    </div>
@endsection

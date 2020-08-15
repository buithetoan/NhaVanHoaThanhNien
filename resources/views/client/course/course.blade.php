@extends('client.shared.app')
@section('title', 'Các khóa học ngoại khóa')
@section('content')
    <!-- Page title -->
    <h1 class="mt-4 mb-3">Các khóa học ngoại khóa</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">các khóa học ngoại khóa</li>
    </ol>
    <!-- Page -->
    <div class="class_page">
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
                                <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Loop -->
            @endforeach
        </div>
    </div>
@endsection

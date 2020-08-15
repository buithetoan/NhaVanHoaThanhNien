@extends('client.shared.app')
@section('title', 'Chi tiết khóa học')
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
    <h1 class="mt-4 mb-3">Chi tiết khóa học</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/home')}}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('/course') }}">các khóa học ngoại khóa</a>
        </li>
        <li class="breadcrumb-item active">chi tiết khóa học</li>
    </ol>
    <!-- Page -->
    <div class="class_page">
        <!-- Loop -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="course_detail_image">
                            <img class="img-fluid rounded" src="{{ asset('client/imgs/'.$course->image) }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="card-title">{{$course->title}}</h2>
                        <div class="card-time">
                            <p><span class="start">{{$course->start_date}}</span> - <span class="end">{!! $course->end_date ? $course->end_date : '__:__:__' !!}</span></p>
                        </div>
                        <hr>
                        <p class="card-text">{!! Illuminate\Support\Str::limit($course->content, 100) !!}</p>
                        <p class="card-maximum font-weight-bold">Số lượng học viên một lớp: {{$course->maximum_student}}</p>

                        <span>{!! $course->discount ? ('| Discount: <span class="text-danger font-weight-bold">'.$course->discount).'%</span>' : "" !!}</span>
                        <p class="text-danger font-weight-bold">{{$course->discount ? ($course->price - ($course->discount/100)*$course->price) : $course->price }} VND {!! $course->discount ? ('<strike class="text-secondary">'.$course->price.' VNĐ </strike>') : "" !!}</p>
                        <div class="card-button">
                            <a href="{{url('course/register?course_id='.$course->id)}}" class="btn btn-success">Đăng ký khóa học</a>
                            <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
    </div>
@endsection

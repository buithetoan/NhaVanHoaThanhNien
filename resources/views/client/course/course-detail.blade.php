@extends('client.shared.app')
@section('title', 'Chi tiết khóa học')
@section('content')
<!-- Page title -->
<h1 class="mt-4 mb-3">Chi tiết khóa học</h1>
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
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
                    <a href="{{ url('/blog') }}">
                        <img class="img-fluid rounded" src="{{ asset('client/imgs/class1.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h2 class="card-title">Khai giảng lớp Nói trước công chúng – K132</h2>
                    <div class="card-time">
                        <p><span class="start">01/ 01/ 2020</span> - <span class="end">30/ 03/ 2020</span></p>
                    </div>
                    <hr>
                    <p class="card-text">Khóa Người dẫn chương trình cuối cùng của năm 2019 đã khai giảng. Khóa học đã thu hút hơn 50 bạn học viên, đủ mọi lứa tuổi nhưng các bạn có chung 1 niềm đam mê là sẽ trở thành một người dẫn chương trình chuyên nghiệp, tự tin, duyên dáng.</p>
                    <p class="card-maximum font-weight-bold">Số lượng học viên hiện tại: 30</p>
                    <p class="card-maximum">tình trạng: còn slot/ hết slot</p>
                    <p class="text-danger font-weight-bold">300.000 VND</p>
                    <div class="card-button">
                        <a href="#" class="btn btn-success">Đăng ký khóa học</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Loop -->
</div>
@endsection
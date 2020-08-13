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
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class1.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">MC-K98 với chuyên đề hoạt náo</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa học giúp bạn có thêm những kỹ năng cần thiết để tổ chức các trò chơi trên sân khấu hay cách để sinh hoạt tập thể đầu giờ trước khi diễn ra các chương trình</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class2.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">Khai giảng lớp Nói trước công chúng – K132</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa Người dẫn chương trình cuối cùng của năm 2019 đã khai giảng.
                        Khóa học đã thu hút hơn 50 bạn học viên, đủ mọi lứa tuổi nhưng các bạn có chung 1 niềm đam mê là sẽ trở thành một người dẫn chương trình chuyên nghiệp, tự tin, duyên dáng.</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class1.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">MC-K98 với chuyên đề hoạt náo</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa học giúp bạn có thêm những kỹ năng cần thiết để tổ chức các trò chơi trên sân khấu hay cách để sinh hoạt tập thể đầu giờ trước khi diễn ra các chương trình</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class2.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">Khai giảng lớp Nói trước công chúng – K132</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa Người dẫn chương trình cuối cùng của năm 2019 đã khai giảng.
                        Khóa học đã thu hút hơn 50 bạn học viên, đủ mọi lứa tuổi nhưng các bạn có chung 1 niềm đam mê là sẽ trở thành một người dẫn chương trình chuyên nghiệp, tự tin, duyên dáng.</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class1.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">MC-K98 với chuyên đề hoạt náo</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa học giúp bạn có thêm những kỹ năng cần thiết để tổ chức các trò chơi trên sân khấu hay cách để sinh hoạt tập thể đầu giờ trước khi diễn ra các chương trình</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{ url('/course/detail') }}"><img class="card-img-top" src="{{ asset('client/imgs/class2.jpg') }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ url('/course/detail') }}">Khai giảng lớp Nói trước công chúng – K132</a>
                    </h4>
                    <div class="card-text">
                        <p>Khóa Người dẫn chương trình cuối cùng của năm 2019 đã khai giảng.
                        Khóa học đã thu hút hơn 50 bạn học viên, đủ mọi lứa tuổi nhưng các bạn có chung 1 niềm đam mê là sẽ trở thành một người dẫn chương trình chuyên nghiệp, tự tin, duyên dáng.</p>
                    </div>
                    <div class="card-button">
                        <a href="{{ url('/course/detail') }}" class="btn btn-success">Chi tiết</a>
                        <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
    </div>
</div>
@endsection
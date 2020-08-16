@extends('client.shared.main')
@section('title', 'Web nhà văn hóa thiếu nhi')
@section('content')
    <!-- Section Giới thiệu -->
    <section class="about">
        <div class="about_title" data-aos="fade-up">
            <h2>Về trang web nhà văn hóa thiếu nhi</h2>
        </div>
        <div class="about_content">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="about_content_box" data-aos="fade-up">
                        <div class="card h-100">
                            <div class="card-image">
                                <img class="card-img-top" src="{{ asset('images/icon-active.png') }}" alt="hd">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Thông tin về các hoạt động sự kiện
                                </h4>
                                <p class="card-text">Chúng tôi luôn cập nhật các thông tin về các hoạt động sự kiện nhanh và chính xác nhất</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="about_content_box" data-aos="fade-up">
                        <div class="card h-100">
                            <div class="card-image">
                                <img class="card-img-top" src="{{ asset('images/icon-course.png') }}" alt="hd">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Các khóa học ngoại khóa
                                </h4>
                                <p class="card-text">Chúng tôi cung cấp các khóa ngoại khóa về kỹ năng cho con em</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="about_content_box" data-aos="fade-up">
                        <div class="card h-100">
                            <div class="card-image">
                                <img class="card-img-top" src="{{ asset('images/icon-info.png') }}" alt="hd">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Lưu trữ và quản lý thông tin người dùng
                                </h4>
                                <p class="card-text">Người dùng có thể tin tưởng về quản lý thông tin người dùng, về các khóa học của con em</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Giới thiệu -->
    <!-- =========================== -->
    <!-- Section -->
    <section class="vhnt">
        <!-- Section title -->
        <div class="section_title d-flex-bettwen" data-aos="fade-up">
            <h2>
                <a class="section_title_box" href="{{ url('/active') }}">Hoạt động và sự kiện</a>
            </h2>
            <a class="section_title_more" href="{{ url('/active') }}">Xem thêm các hoạt động &rarr;</a>
        </div>
        <!-- List -->
        <div class="row">
            <!-- Loop -->
            @foreach($activities as $key => $active)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100" data-aos="fade-up">
                        <div class="card-image">
                            <a href="{{url('active/detail?active_id='.$active->id)}}"><img class="card-img-top" src="{{ asset('images/'.$active->image) }}" alt="hd"></a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$active->title}}</a>
                            </h4>
                            <p class="card-text">{!! Illuminate\Support\Str::limit($active->content, 100) !!}</p>
                            <div class="card-button">
                                <a href="{{url('active/detail?active_id='.$active->id)}}" class="btn btn-success">Xem thêm &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- End Loop -->
        </div>
    </section>
    <!-- End Section -->
@endsection

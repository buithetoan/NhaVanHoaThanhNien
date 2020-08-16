@extends('client.shared.app')
@section('title', 'Ấn tượng chương trình Côn Đảo – Hồn thiêng Tổ quốc')
@section('content')
    <div class="post-page-content">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/active') }}">hoạt động</a>
            </li>
            <li class="breadcrumb-item active">{{$active->name}}</li>
        </ol>
        <!-- Post title -->
        <h1 class="post-title">{{$active->title}}</h1>
        <!-- Page -->
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-sm-8 col-12">
                <div class="post-content">
                    <!-- Post Main Image -->
                    <div class="post-content-main-image">
                        <img class="img-fluid rounded" src="{{ asset('images/'.$active->image) }}" alt="">
                    </div>
                    <!-- Date/Time -->
                    <div class="post-content-time">
                        <p>Bắt đầu: {{$active->start_date}} - Kết thúc: {{$active->end_date}}</p>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content-desc">
                        <p>{!! $active->content !!}</p>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-sm-4 col-12">
                <div class="sidebar">
                    <div class="sidebar_inner">
                        <p class="sidebar_title">
                            <span>Các hoạt động khác</span>
                        </p>
                        <div class="sidebar_content">
                            <!-- Loop -->
                            @if(count($activities) > 0)
                                @foreach($activities as $ac)
                                    <div class="sidebar_content_box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="sidebar_content_box_image">
                                                    <a href="{{ url('/active/detail?active_id='.$ac->id) }}"><img src="{{ asset('images/'.$ac->image) }}" alt="image"></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="sidebar_content_box_title">
                                                    <a href="{{ url('/active/detail?active_id='.$ac->id) }}">{!! Illuminate\Support\Str::limit($ac->title, 100) !!}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="sidebar_banner">
                        <div class="sidebar_banner_box">
                            <a href="#" target="_blank">
                                <img src="{{ asset('images/banner-1.jpg') }}">
                            </a>
                        </div>
                        <div class="sidebar_banner_box">
                            <a href="#" target="_blank">
                                <img src="{{ asset('images/banner-2.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

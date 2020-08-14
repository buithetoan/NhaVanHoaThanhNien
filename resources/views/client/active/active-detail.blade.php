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
	    <li class="breadcrumb-item active">Ấn tượng chương trình Côn Đảo – Hồn thiêng Tổ quốc</li>
	</ol>
	<!-- Post title -->
    <h1 class="post-title">Ấn tượng chương trình "Côn Đảo – Hồn thiêng Tổ quốc"</h1>
	<!-- Page -->
	<div class="row">
	    <!-- Post Content Column -->
	    <div class="col-sm-8 col-12">
	        <div class="post-content">
	            <!-- Post Main Image -->
	            <div class="post-content-main-image">
	                <img class="img-fluid rounded" src="{{ asset('images/hd2.jpg') }}" alt="">
	            </div>
	            <!-- Date/Time -->
	            <div class="post-content-time">
	                <p>Bắt đầu: 01-01-2020 - Kết thúc: 01-01-2020</p>
	            </div>
	            <!-- Post Content -->
	            <div class="post-content-desc">
	                <p>Content bài viết ở đây</p>
	            </div>
	        </div>
	    </div>
	    <!-- Sidebar Widgets Column -->
	    <div class="col-sm-4 col-12">
	        <div class="sidebar">
	            <p class="sidebar_title">
	                <span>Các hoạt động khác</span>
	            </p>
	            <div class="sidebar_content">
	                <!-- Loop -->
	                <div class="sidebar_content_box">
	                    <div class="row">
	                        <div class="col-sm-4">
	                            <div class="sidebar_content_box_image">
	                                <a href="{{ url('/active/detail') }}"><img src="{{ asset('images/hd2.jpg') }}" alt="image"></a>
	                            </div>
	                        </div>
	                        <div class="col-sm-8">
	                            <div class="sidebar_content_box_title">
	                                <a href="{{ url('/active/detail') }}">Thay áo mới cho những con hẻm</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- End Loop -->
	                <!-- Loop -->
	                <div class="sidebar_content_box">
	                    <div class="row">
	                        <div class="col-sm-4">
	                            <div class="sidebar_content_box_image">
	                                <a href="{{ url('/active/detail') }}"><img src="{{ asset('images/hd2.jpg') }}" alt="image"></a>
	                            </div>
	                        </div>
	                        <div class="col-sm-8">
	                            <div class="sidebar_content_box_title">
	                                <a href="{{ url('/active/detail') }}">Thay áo mới cho những con hẻm</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- End Loop -->
	                <!-- Loop -->
	                <div class="sidebar_content_box">
	                    <div class="row">
	                        <div class="col-sm-4">
	                            <div class="sidebar_content_box_image">
	                                <a href="{{ url('/active/detail') }}"><img src="{{ asset('images/hd2.jpg') }}" alt="image"></a>
	                            </div>
	                        </div>
	                        <div class="col-sm-8">
	                            <div class="sidebar_content_box_title">
	                                <a href="{{ url('/active/detail') }}">Thay áo mới cho những con hẻm</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- End Loop -->
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection

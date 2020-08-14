@extends('client.shared.app')
@section('title', 'Thông tin người dùng')
@section('content')
    <!-- Page title -->
    <h1 class="mt-4 mb-3">Thông tin người dùng</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/home')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">thông tin người dùng</li>
    </ol>
    <!-- Page -->
    <div class="profile_page">
    	<div class="row">
    		<div class="col-sm-6 col-12">
    			<!-- Parent Area -->
    			<div class="parent_area">
		    		<div class="card h-100">
		                <div class="card-body">
		                    <h4 class="card-title text-success font-weight-bold text-uppercase">
		                        Thông tin phụ huynh
		                    </h4>
		                    <hr>
		                    <div class="card-text">
		                        <p><span class="font-weight-bold">Họ và Tên: </span> Nguyễn Văn A</p>
		                        <p><span class="font-weight-bold">Địa chỉ: </span> 12 Ngô Quyền</p>
		                        <p><span class="font-weight-bold">Số điện thoại: </span> 0123456789</p>
		                        <p><span class="font-weight-bold">E-Mail: </span> NguyenVanA@gmail.com</p>
		                    </div>
		                </div>
		            </div>
		    	</div>
		    	<!-- End Parent Area -->
		    	<!-- ======================== -->
		    	<!-- Child Area -->
    			<div class="child_area">
    				<div class="card h-100">
		                <div class="card-body">
		                    <h4 class="card-title text-success font-weight-bold text-uppercase">
		                        Thông tin con cái
		                    </h4>
		                    <hr>
		                    <!-- Loop -->
		                    <div class="card-text">
		                        <p><span class="font-weight-bold">Họ và Tên: </span> Nguyễn Văn A-B</p>
		                        <p><span class="font-weight-bold">Tuổi: </span> 12</p>
		                        <hr>
		                    </div>
		                    <!-- End Loop -->
		                    <!-- Loop -->
		                    <div class="card-text">
		                        <p><span class="font-weight-bold">Họ và Tên: </span> Nguyễn Thị B-V</p>
		                        <p><span class="font-weight-bold">Tuổi: </span> 10</p>
		                        <hr>
		                    </div>
		                    <!-- End Loop -->
		                </div>
		            </div>
    			</div>
    			<!-- End Child Area -->
    		</div>
    		<div class="col-sm-6 col-12">
				<!-- Course Area -->
				<div class="course_area">
					<div class="card h-100">
		                <div class="card-body">
		                    <h4 class="card-title text-success font-weight-bold text-uppercase">
		                        Lớp học đã đăng ký
		                    </h4>
		                    <hr>
		                    <!-- Loop -->
		                    <div class="card-text">
		                        <h5 class="font-weight-bold">Kỹ thuật bơi cơ bản</h5>
		                        <p class="text-danger font-weight-bold text-price">150000 VND</p>
		                        <hr>
		                    </div>
		                    <!-- End Loop -->
		                    <!-- Loop -->
		                    <div class="card-text">
		                        <h5 class="font-weight-bold">Võ thuật cơ bản</h5>
		                        <p class="text-danger font-weight-bold text-price">180000 VND</p>
		                        <hr>
		                    </div>
		                    <!-- End Loop -->
		                </div>
		            </div>
				</div>
				<!-- End Course Area -->
    		</div>
    	</div>
    </div>
@endsection

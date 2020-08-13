@extends('client.shared.app')
@section('title', 'Đặt lịch hẹn')
@section('content')
<!-- Page title -->
<h1 class="mt-4 mb-3">Đặt lịch hẹn</h1>
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/course') }}">các khóa học ngoại khóa</a>
    </li>
    <li class="breadcrumb-item active">đặt lịch hẹn</li>
</ol>
<!-- Page -->
<div class="meet_page">
    <form action="?" method="?">
        <div class="row reverse">
            <!-- Image col -->
            <div class="col-sm-6 col-12">
                <div class="image_col">
                    <img src="{{ asset('client/imgs/class1.jpg') }}" alt="img">
                </div>
            </div>
            <!-- End Image col -->
            <!-- Infomation Col -->
            <div class="col-sm-6 col-12">
                <div class="profile_col">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Name</label>
                        </div>
                        <div class="col-sm-8">
                            <h6>Name</h6>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>E-Mail Address</label>
                        </div>
                        <div class="col-sm-8">
                            <h6>lorem@gmail.com</h6>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Phone</label>
                        </div>
                        <div class="col-sm-8">
                            <h6>0123456789</h6>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="course_col">
                    <h3 class="course">Khai giảng lớp Nói trước công chúng – K132</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">Chọn thời gian hẹn</label>
                        <input type="text" data-provide="datepicker" class="form-control">
                    </div>
                </div>
                <div class="form_submit">
                    <button type="submit" class="btn btn-success">Đặt lịch hẹn</button>
                </div>
            </div>
            <!-- End Infomation Col -->
        </div>
    </form>
</div>
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker();
</script>
@endsection
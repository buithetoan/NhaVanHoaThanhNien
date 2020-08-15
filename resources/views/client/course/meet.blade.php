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
        <form action="" method="post">
            @csrf
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
                                @if($parent->full_name)
                                    {!! Form::text('full_name', $parent->full_name, [
                                        'class' => 'form-control',
                                        'readonly'=>'readonly',
                                        'placeholder'=>"Full name"
                                    ])
                                    !!}
                                @else
                                    {!! Form::text('full_name', null, [
                                        'class' => 'form-control',
                                        'placeholder'=>"Full name"
                                    ])
                                    !!}
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>E-Mail Address</label>
                            </div>
                            <div class="col-sm-8">
                                @if($parent->email)
                                    {!! Form::text('email', $parent->email, [
                                        'class' => 'form-control',
                                        'readonly'=>'readonly',
                                        'placeholder'=>"Địa chỉ Email"
                                    ])
                                    !!}
                                @else
                                    {!! Form::text('email', null, [
                                        'class' => 'form-control',
                                        'placeholder'=>"Địa chỉ Email"
                                    ])
                                    !!}
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Phone</label>
                            </div>
                            <div class="col-sm-8">
                                @if($parent->phone_no)
                                    {!! Form::text('phone_no', $parent->phone_no, [
                                        'class' => 'form-control',
                                        'readonly'=>'readonly',
                                        'placeholder'=>"Số điện thoại"
                                    ])
                                    !!}
                                @else
                                    {!! Form::text('phone_no', null, [
                                        'class' => 'form-control',
                                        'placeholder'=>"Số điện thoại"
                                    ])
                                    !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="course_col">
                        <h3 class="course">Khai giảng lớp Nói trước công chúng – K132</h3>
                        <hr>
                        <div class="form-group">
                            <!-- start date -->

                                <h1>Chọn Thời Gian Hẹn</h1>
                                  <label>Date</label>
                                  <div class="input-group date" id="datepicker">
                                    <input class="form-control" placeholder="MM/DD/YYYY"/><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-calendar"></i></span></span>
                                  </div>
                                  <label>Time</label>
                                  <div class="input-group time" id="timepicker">
                                    <input class="form-control" placeholder="HH:MM AM/PM"/><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock"></i></span></span>
                                </div>

                            <!-- end date -->
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
    <!-- partial -->
    <script defer src="{{ asset('client/js/all.js') }}"></script> <!--load all styles -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>
<script  src="{{ asset('client/js/script.js') }}"></script>
@endsection

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
            <!-- Parent Area -->
            <div class="parent_area col-lg-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title text-success font-weight-bold text-uppercase">
                            Thông tin phụ huynh
                        </h4>
                        <hr>
                        <div class="card-text">
                            <p><span class="font-weight-bold">Họ và Tên: </span>{{$parentUser->full_name}}</p>
                            <p><span class="font-weight-bold">Địa chỉ: </span> {{$parentUser->address}}</p>
                            <p><span class="font-weight-bold">Số điện thoại: </span> {{$parentUser->phone_no}}</p>
                            <p><span class="font-weight-bold">E-Mail: </span> {{$parentUser->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Parent Area -->
            <!-- ======================== -->
            <!-- Child Area -->
            <div class="child_area col-lg-7">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title text-success font-weight-bold text-uppercase">
                            Thông tin con cái
                        </h4>
                        <hr>
                        <!-- Loop -->
                        @foreach($childs as $child)
                            <div class="row">
                                <div class="card-text col-lg-5">
                                    <p><span class="font-weight-bold">Họ và Tên: </span> {{$child->name}}</p>
                                    <p><span class="font-weight-bold">Tuổi: </span> {{$child->year_old}}</p>
                                </div>
                                <div class="card-text col-lg-7">
                                    @foreach($classChilds as $cc)
                                        @if($child->id == $cc->child_id)
                                            @foreach($rooms as $room)
                                                @if($cc->class_id == $room->id)
                                                    @foreach($courses as $course)
                                                        @if($room->course_id == $course->id)
                                                            <p><span class="font-weight-bold">{{$room->name}}: </span>{{$room->description}}</p>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <!-- End Loop -->
                    </div>
                </div>
            </div>
            <!-- End Child Area -->
        </div>
    </div>
@endsection

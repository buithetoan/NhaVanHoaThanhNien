@extends('admin.shared.main')
@section('title')
    Nhà văn hóa Thanh niên - Trang chủ
@endsection
@section('content')
    <div class="content_yield">
        <h2 class="title">Trang chủ</h2>
        <div class="col-xs-12 col-sm-4">
            <div class="total product_total">
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <div class="info">
                    <h6>Tổng khóa học</h6>
                    <h3>{{$total_course}}</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="total customer_total">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="info">
                    <h6>Tổng số học viên</h6>
                    <h3>{{$total_child}}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

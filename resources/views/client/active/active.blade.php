@extends('client.shared.app')
@section('title', 'Hoạt động')
@section('content')
<!-- Page title -->
<h1 class="mt-4 mb-3">Hoạt động</h1>
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">hoạt động</li>
</ol>
<!-- Page -->
<div class="active_page">
    <!-- Loop -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ url('/blog') }}">
                        <img class="img-fluid rounded" src="{{ asset('client/imgs/hd1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h2 class="card-title">Thay áo mới cho những con hẻm</h2>
                    <p class="card-text">Đó là công trình thanh niên trong chiến dịch tình nguyện Mùa hè xanh mà các bạn trẻ Đoàn phường 4 (Q.Gò Vấp) đã phối hợp cùng Đoàn khoa quản trị kinh doanh (ĐH Công nghiệp TP.HCM) tỉ mẩn vẽ trong suốt hơn hai tuần qua. </p>
                    <a href="{{ url('/blog') }}" class="btn btn-success">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">01 / 01 / 2017</div>
    </div>
    <!-- End Loop -->
    <!-- Loop -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ url('/blog') }}">
                        <img class="img-fluid rounded" src="{{ asset('client/imgs/hd2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h2 class="card-title">Ấn tượng chương trình "Côn Đảo – Hồn thiêng Tổ quốc"</h2>
                    <p class="card-text">Chương trình nghệ thuật đặc biệt kỷ niệm 73 năm ngày thương binh liệt sĩ với chủ đề “Côn Đảo- Hồn thiêng Tổ quốc”, vừa diễn ra vào tối 18-7 tại sân khấu trước trụ sở UBND huyện Côn Đảo – Cầu tàu 914, Nghĩa trang Liệt sĩ Hàng Dương.</p>
                    <a href="{{ url('/blog') }}" class="btn btn-success">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">01 / 01 / 2017</div>
    </div>
    <!-- End Loop -->
    <!-- Loop -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ url('/blog') }}">
                        <img class="img-fluid rounded" src="{{ asset('client/imgs/hd1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h2 class="card-title">Hai sản phẩm âm nhạc đặc biệt chào mừng 45 năm ngày thống nhất đất nước</h2>
                    <p class="card-text">Dịp kỷ niệm 45 năm ngày thống nhất đất nước (30/4/1975 – 30/4/2020) diễn ra trong bối cảnh vô cùng đặc biệt khi cuộc chiến chống dịch Covid-19 của cả nước đã đi đến chặng quyết định.</p>
                    <a href="{{ url('/blog') }}" class="btn btn-success">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">01 / 01 / 2017</div>
    </div>
    <!-- End Loop -->
    <!-- Loop -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ url('/blog') }}">
                        <img class="img-fluid rounded" src="{{ asset('client/imgs/hd4.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h2 class="card-title">Những địa điểm lịch sử của Sài Gòn 45 năm trước và bây giờ</h2>
                    <p class="card-text">Cùng xem lại hình ảnh của Sài Gòn 45 năm trước, ngày thống nhất đất nước. Đúng vị trí đó, năm xưa là những giờ phút kết thúc cuộc chiến và nay là sự phát triển năng động, hiện đại của đô thị lớn nhất nước.</p>
                    <a href="{{ url('/blog') }}" class="btn btn-success">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">01 / 01 / 2017</div>
    </div>
    <!-- End Loop -->
</div>
@endsection
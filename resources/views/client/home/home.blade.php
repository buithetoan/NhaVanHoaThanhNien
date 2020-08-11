@extends('client.shared.main')
@section('title', 'Web thanh niên')
@section('content')
<!-- Section -->
<section class="vhnt">
    <!-- Section title -->
    <h2 class="section_title">
        <a href="{{ url('/active') }}">Hoạt động và sự kiện</a>
    </h2>
    <!-- List -->
    <div class="row">
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd1.jpg') }}" alt="hd"></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Thay áo mới cho những con hẻm</a>
                    </h4>
                    <p class="card-text">Đó là công trình thanh niên trong chiến dịch tình nguyện Mùa hè xanh mà các bạn trẻ Đoàn phường 4 (Q.Gò Vấp) đã phối hợp cùng Đoàn khoa quản trị kinh doanh (ĐH Công nghiệp TP.HCM) tỉ mẩn vẽ trong suốt hơn hai tuần qua. </p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd2.jpg') }}" alt=""></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Ấn tượng chương trình "Côn Đảo – Hồn thiêng Tổ quốc"</a>
                    </h4>
                    <p class="card-text">Chương trình nghệ thuật đặc biệt kỷ niệm 73 năm ngày thương binh liệt sĩ với chủ đề “Côn Đảo- Hồn thiêng Tổ quốc”, vừa diễn ra vào tối 18-7 tại sân khấu trước trụ sở UBND huyện Côn Đảo – Cầu tàu 914, Nghĩa trang Liệt sĩ Hàng Dương.</p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd1.jpg') }}" alt=""></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Hai sản phẩm âm nhạc đặc biệt chào mừng 45 năm ngày thống nhất đất nước</a>
                    </h4>
                    <p class="card-text">Dịp kỷ niệm 45 năm ngày thống nhất đất nước (30/4/1975 – 30/4/2020) diễn ra trong bối cảnh vô cùng đặc biệt khi cuộc chiến chống dịch Covid-19 của cả nước đã đi đến chặng quyết định.</p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd4.jpg') }}" alt=""></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Những địa điểm lịch sử của Sài Gòn 45 năm trước và bây giờ</a>
                    </h4>
                    <p class="card-text">Cùng xem lại hình ảnh của Sài Gòn 45 năm trước, ngày thống nhất đất nước. Đúng vị trí đó, năm xưa là những giờ phút kết thúc cuộc chiến và nay là sự phát triển năng động, hiện đại của đô thị lớn nhất nước.</p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd5.png') }}" alt=""></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Google Doodle tôn vinh bánh mì Việt Nam: Tiệm bánh mì Sài Gòn đầu tiên ở đâu?</a>
                    </h4>
                    <p class="card-text">Kỷ niệm 9 năm từ ‘banh mi’ có trong từ điển Oxford English Dictionary, Google Doodle đã xuất hiện hình bánh mì ở Việt Nam và 11 quốc gia khác trên thế giới. Vậy tiệm bánh mì Sài Gòn đầu tiên ở đâu?</p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <!-- Loop -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-image">
                    <a href="post.html"><img class="card-img-top" src="{{ asset('client/imgs/hd6.jpeg') }}" alt=""></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="post.html">Ở nhà cách ly xã hội hãy đọc sách y học để tăng cường phòng chữa bệnh</a>
                    </h4>
                    <p class="card-text">Có lẽ trước đại dịch COVID-19, nhiều người mãi bận rộn để dành thời gian nghiền ngẫm sách y học. Nhưng khi thế giới chao đảo vì một chủng virus mới, bạn đọc hơn lúc nào hết cần tự trang bị cho mình những kiến thức phòng bệnh.</p>
                    <div class="card-button">
                        <a href="post.html" class="btn btn-success">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Loop -->
    </div>
</section>
<!-- End Section -->
@endsection
@extends('client.shared.app')
@section('title', 'Tên bài viết')
@section('content')
<div class="post-page-content">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/home') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">ấn tượng chương trình côn đảo hồn thiêng tổ quốc</li>
    </ol>
    <!-- Post title -->
    <h1 class="post-title">Ấn tượng chương trình "Côn Đảo – Hồn thiêng Tổ quốc"</h1>
    <!-- Post -->
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-sm-8 col-12">
            <div class="post-content">
                <!-- Post Main Image -->
                <div class="post-content-main-image">
                    <img class="img-fluid rounded" src="{{ asset('client/imgs/hd2.jpg') }}" alt="">
                </div>
                <!-- Date/Time -->
                <div class="post-content-time">
                    <p>01 / 01 / 2020</p>
                </div>
                <!-- Post Content -->
                <div class="post-content-desc">
                    <p>Chương trình nghệ thuật Côn Đảo – Hồn thiêng Tổ quốc chinh phục người nghe bởi cách tiếp cận đặc biệt của nhạc truyền thống cách mạng với thế hệ khán giả trẻ</p>
                    <p>Chương trình nghệ thuật đặc biệt kỷ niệm 73 năm ngày thương binh liệt sĩ (27.7.1947- 27.7.2020) với chủ đề “Côn Đảo- Hồn thiêng Tổ quốc”, vừa diễn ra vào tối 18-7 tại sân khấu trước trụ sở UBND huyện Côn Đảo – Cầu tàu 914, Nghĩa trang Liệt sĩ Hàng Dương, thu hút sự chú ý của hơn 2.000 khán giả ở huyện đảo tham dự. Không chỉ thu hút người xem, chương trình còn gây ấn tượng bởi chất nghệ thuật được xây dựng ở mỗi tiết mục trong tổng thể chương trình.</p>
                    <p>Chương trình được xây dựng thành 3 chương, lần lượt với tên gọi: “Việt Nam – những tượng đài bất tử”, “Côn Đảo – khúc tráng ca oai hùng”, “Côn Đảo – Địa chỉ đỏ và khát vọng xanh”, khắc họa rõ nét cả một hành trình anh dũng chiến đấu chống giặc ngoại xâm, với những hi sinh, mất mát không gì đo đếm nổi của biết bao thế hệ cha ông. </p>
                    <p>Suốt chiều dài lịch sử, đất nước còn là hình ảnh những người mẹ Việt Nam tần tảo, hi sinh cả cuộc đời, “ba lần tiễn con đi, hai lần khóc thầm lặng lẽ”, hiến dâng cho Tổ quốc những người thân yêu nhất, những biểu tượng đầy tự hào của ý chí anh hùng, bất khuất, kiên trung, góp phần viết nên những trang sử vàng chói lọi của lịch sử dân tộc. </p>
                    <p>Tất cả những điều đó, tinh thần đó, hình ảnh đó được vẽ lên đậm nét trong chương trình bằng những khúc ca, những hồi ức của những người từng là một phần của cuộc chiến, tham dự chương trình. Chính điều đó khiến cho chương trình thêm phần cảm xúc, chạm vào tận đáy sâu trái tim người yêu nhạc. Người xem không thể cầm lòng với những hình ảnh được tái dựng trong chương trình, những người chưa từng có trải nghiệm với cuộc chiến gian khổ ấy cũng thấy bùi ngùi với sự hi sinh của hàng ngàn vị anh hùng liệt sĩ vì tình yêu đất nước. </p>
                    <p>Bên cạnh ý nghĩa thiêng liêng của chương trình, những tiết mục biểu diễn, xét ở khía cạnh nghệ thuật, thực sự là một cú đột phá bất ngờ cho người xem. Khán giả không khỏi bất ngờ với giọng hát của NSƯT Tạ Minh Tâm, Thế Vĩ, Anh Bằng, Quốc Đại, Võ Hạ Trâm, Thanh Nguyên,… Đó là những giọng ca quá đỗi đặc biệt và dù họ có là những giọng ca bị mặc định “nhạc đỏ”, “nhạc cổ điển” kén khán giả,…nhưng lần này, họ chinh phục khán giả một cách tuyệt đối. Những ca khúc “Đất nước”, “Côn Đảo”, “Kể chuyện người cộng sản”, “Lời ghi trên vách đá”, “Biết ơn chị Võ Thị Sáu”, “Bài ca hi vọng”, “Giải phóng miền Nam- Đất nước trọn niềm vui”, “Linh thiêng Việt Nam”, “Tự nguyện”, “Người là niềm tin chiến thắng”, “Bình minh Côn Sơn”, …vẫn vẹn nguyên tính hào hùng nhưng cũng nhẹ nhàng như một bản tình ca, thấm sâu lòng người. </p>
                </div>
            </div>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-sm-4 col-12">
            <div class="sidebar">
                <p class="sidebar_title">
                    <span>Cùng thể loại</span>
                </p>
                <div class="sidebar_content">
                    <!-- Sidebar Content Box -->
                    <div class="sidebar_content_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="sidebar_content_box_image">
                                    <a href="{{ url('/blog') }}"><img src="{{ asset('client/imgs/hd1.jpg') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="sidebar_content_box_title">
                                    <a href="{{ url('/blog') }}">Thay áo mới cho những con hẻm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Content Box -->
                    <!-- Sidebar Content Box -->
                    <div class="sidebar_content_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="sidebar_content_box_image">
                                    <a href="{{ url('/blog') }}"><img src="{{ asset('client/imgs/hd4.jpg') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="sidebar_content_box_title">
                                    <a href="{{ url('/blog') }}">Những địa điểm lịch sử của Sài Gòn 45 năm trước và bây giờ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Content Box -->
                    <!-- Sidebar Content Box -->
                    <div class="sidebar_content_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="sidebar_content_box_image">
                                    <a href="{{ url('/blog') }}"><img src="{{ asset('client/imgs/hd5.png') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="sidebar_content_box_title">
                                    <a href="{{ url('/blog') }}">Google Doodle tôn vinh bánh mì Việt Nam: Tiệm bánh mì Sài Gòn đầu tiên ở đâu?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Content Box -->
                    <!-- Sidebar Content Box -->
                    <div class="sidebar_content_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="sidebar_content_box_image">
                                    <a href="{{ url('/blog') }}"><img src="{{ asset('client/imgs/hd6.jpeg') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="sidebar_content_box_title">
                                    <a href="{{ url('/blog') }}">Ở nhà cách ly xã hội hãy đọc sách y học để tăng cường phòng chữa bệnh</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Content Box -->
                    <!-- Sidebar Content Box -->
                    <div class="sidebar_content_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="sidebar_content_box_image">
                                    <a href="{{ url('/blog') }}"><img src="{{ asset('client/imgs/hd1.jpg') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="sidebar_content_box_title">
                                    <a href="{{ url('/blog') }}">Hai sản phẩm âm nhạc đặc biệt chào mừng 45 năm ngày thống nhất đất nước</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Content Box -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
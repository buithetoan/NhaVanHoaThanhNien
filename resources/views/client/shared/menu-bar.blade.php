<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">Web thanh niên</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/active') }}">Hoạt động và sự kiện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course') }}">Các khóa học ngoại khóa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/c/login') }}">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/c/register') }}">Đăng ký</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
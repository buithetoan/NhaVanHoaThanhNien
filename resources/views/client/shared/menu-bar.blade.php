<nav class="navbar fixed-top navbar-expand-lg navbar-dark menu-bar fixed-top">
    <div class="container">
        <div class="menu-logo">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ asset('images/logo-thieunhi.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/active') }}">Hoạt động và sự kiện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course') }}">Các khóa học ngoại khóa</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('client.login') }}">Đăng nhập</a>
                    </li>
                    @if (Route::has('client.register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('client.register') }}">Đăng ký</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/profile') }}">
                                Thông tin người dùng
                            </a>
                            <a class="dropdown-item" href="{{ route('client.logout') }}">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{route('client.logout')}}}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

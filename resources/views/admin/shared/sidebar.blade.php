<ul class="sidebar" >
    <!-- Dash board -->
    <div class="dash_board">
        <div class="dash_board_ava">
            <img src="{{ asset('images/sunflower.png') }}" alt="#">
        </div>
        <a class="dash_board_link" href="{{ url('admin/dashboard') }}"> Dashboard </a>
    </div>
    <!-- Manage list -->
    <li class="list_item">
        <a class="item_link" href="{{ route('appointment.index') }}">Cuộc hẹn</a>
    </li>
    <li class="list_item">
        <a class="item_link" href="{{ route('course.index') }}">Khóa học</a>
    </li>
    <li class="list_item">
        <a class="item_link" href="{{ route('class.index') }}">Lớp học</a>
    </li>
    <li class="list_item">
        <a class="item_link" href="{{ route('child.index') }}">Học viên</a>
    </li>
    <li class="list_item">
        <a class="item_link" href="{{ route('active.index') }}">Hoạt động</a>
    </li>
    <li class="list_item">
        <a class="item_link" href="{{ route('parent.index') }}">Phụ huynh</a>
    </li>
</ul>

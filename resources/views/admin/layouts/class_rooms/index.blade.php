@extends('admin.shared.main')
@section('title')
    Nhà văn hóa Thanh niên
@endsection
@section('content')
    <div class="content_yield">
        <div class="row">
            <h3 class="page_title">Lớp học</h3>
            <div class="col-md-12">
                @if(Session::has('message'))
                    <div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-success alert-dismissible show" role="alert" style="position: absolute;">
                        <strong>{{ Session::get('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(Session::has('err'))
                    <div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-success alert-dismissible show" role="alert" style="position: absolute;">
                        <strong>{{ Session::get('err') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>

        </div>
        <a href="{{ route('class.store') }}" class="btn bg-color-green add_new_button"><i class="fas fa-plus"></i> Thêm mới</a>

        <table class="table table_xk table-hover table-bordered">
            <thead class="thead_green">
            <tr>
                <th class="text-center" style="width: 50px;">STT</th>
                <th class="text-center">Tên lớp học</th>
                <th class="text-center">Mô tả</th>
                <th class="text-center">Khóa học</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Date</th>
                <th class="text-center">#</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop -->
            @foreach($rooms as $key => $room)
                <tr>
                    <td class="text-center">{{++$key}}</td>
                    <td class="text-center">
                        <a href="">
                            <h4>{{ $room->name }}</h4>
                        </a>
                    </td>
                    <td>{{$room->description}}</td>
                    @foreach($courses as $course)
                        @if($course->id == $room->course_id)
                            <td>{{$course->name}}</td>
                        @endif
                    @endforeach
                    <td>{!! (($result = $room->class_member - $listChillOfClass->where('class_id',$room->id)->count()) > 0 )? '<span class="text-success">Còn: '.$result.' vị trí</span>' : '<span class="text-danger">Full</span>' !!}</td>
                    <td>{{$room->start_date}} - {{$room->end_date}}</td>
                    <td class="text-center action_icon">
                        <a href="{{route('class.edit',$room->id)}}"><i class="far fa-edit edit"></i></a>
                        <a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$room->id}}" data-toggle="modal" data-target="#Modal"></a>
                    </td>
                </tr>
            @endforeach
            <!-- End loop -->
            </tbody>
        </table>
    </div>
    {{Form::open(['route' => ['class.delete'], 'method' => 'DELETE'])}}
    @include('admin.modal.modaldelete')
    {{ Form::close() }}
    <script>
        $(document).on('click','.deletebutton',function(){
            var id=$(this).attr('data-id');
            console.log(id);
            $('#id').val(id);
        });
    </script>
    <script>
        setTimeout(function() {
            var element = document.getElementById("div-alert");
            element.classList.add("fade");
        }, 2000)
    </script>
@endsection

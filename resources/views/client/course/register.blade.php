@extends('client.shared.app')
@section('title', 'Chi tiết khóa học')
@section('content')
    <!-- Page title -->
    <h1 class="mt-4 mb-3">Chi tiết khóa học</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/home')}}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('/course') }}">các khóa học ngoại khóa</a>
        </li>
        <li class="breadcrumb-item active">chi tiết khóa học</li>
    </ol>
    <!-- Page -->
    <div class="class_page">
        <!-- Loop -->
        <div class="card col-md-12">
            <div class="card-body">
                <div class="col-lg-12">
                    <h2 class="card-title">{{$course->title}}</h2>
                    <input id="course_id" hidden value="{{$course->id}}">
                    <div class="card-time">
                        <p><span class="start">{{$course->start_date}}</span> - <span class="end">{!! $course->end_date ? $course->end_date : '__:__:__' !!}</span></p>
                    </div>
                    <hr>
                    <form method="POST" action="{{route('course.register')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-lg-4">
                                {{ Form::label('Chọn học viên có sẵn: ','',['class' => 'font-weight-bold']) }}
                                <select class="form-control" name="child_id">
                                    <option value="0">Chọn học viên</option>
                                    @foreach($childs as $child)
                                        <option value="{{$child->id}}">{{$child->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                {{ Form::label('Thêm học viên mới: ','',['class' => 'font-weight-bold']) }}
                                {!! Form::text('child_name', null, [
                                    'class' => 'form-control',
                                    'id'=>'name',
                                    'required'=>'required',
                                    'placeholder'=>"Thêm học viên mới"
                                ])
                                !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {{ Form::label('Tuổi: ','',['class' => 'font-weight-bold']) }}
                                {!! Form::text('year_old', null, [
                                    'class' => 'form-control',
                                    'id'=>'year',
                                    'required'=>'required',
                                    'placeholder'=>"Tuổi"
                                ])
                                !!}
                                <span class="text-danger">{{ $errors->first('year_old')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('Lớp học: ','',['class' => 'font-weight-bold']) }}
                            <select class="form-control" style="margin-bottom: 20px;" name="rooms[]" multiple="multiple" id="rooms" required>
                                @foreach($rooms as $room)
                                    @if($result = $room->class_member - $listChillOfClass->where('class_id',$room->id)->count()) > 0 ))
                                        <option value="{{ $room->id }}">{{ $room->name }} - {{$room->description}}</option>
                                    @else
                                        <option disabled class="text-danger" value="">Hiện không có lớp học nào trống cho khóa học này</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="card-button">
                            <button type="submit" class="btn btn-success">Đăng ký khóa học</button>
                            <a href="{{ url('/course/meet') }}" class="btn btn-outline-success">Đặt lịch hẹn</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Loop -->
        <div id="txtHint"></div>
    </div>
    <script>
        setTimeout(function() {
            var element = document.getElementById("div-alert");
            element.classList.add("fade");
        }, 2000)
    </script>
    <script type="text/javascript">
        $("select[name='child_id']").change(function(){
            var child = $(this).val();
            var course = document.getElementById('course_id').value
            if (child==0){
                $("#name").val("");
                document.getElementById("name").readOnly = false;
                $("#year").val("");
                document.getElementById("year").readOnly = false;
            }
            var url = "{{ route('course.showValueChild') }}";
            var token = $("input[name='_token']").val();
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    child_id: child,
                    course_id: course,
                    _token: token
                },
                success: function(data) {
                    var childValue = data[1];
                    var classChill = data[0];
                    var select = $('#rooms');
                    select.empty();
                    if (classChill.length > 0){
                        $.each(classChill, function(key, value){
                            select.append(
                                "<option value="+ value.id+ ">"+value.name+ " - "+value.description+"</option>"
                            );
                        });
                    }else {
                        select.append(
                            '<option disabled class="text-danger" value="">Hiện không có lớp học nào trống cho khóa học này</option>'
                        );
                    }
                    $.each(childValue, function(key, value){
                        $("#name").val(value.name);
                        document.getElementById("name").readOnly = true;
                        $("#year").val(value.year_old);
                        document.getElementById("year").readOnly = true;

                    });
                }
            });
        });
    </script>
@endsection

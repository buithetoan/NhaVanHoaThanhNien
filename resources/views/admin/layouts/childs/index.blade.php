@extends('admin.shared.main')
@section('title')
    Nhà văn hóa Thanh niên - Học viên
@endsection
@section('content')
    <div class="content_yield">
        <div class="row">
            <h3 class="page_title">Học viên</h3>
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
        <a href="{{ route('child.store') }}" class="btn bg-color-green add_new_button"><i class="fas fa-plus"></i> Thêm mới</a>
        <table class="table table_xk table-hover table-bordered">
            <thead class="thead_green">
            <tr>
                <th class="text-center" style="width: 50px;">STT</th>
                <th class="text-center">Tên học viên</th>
                <th class="text-center">#</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop -->
            @foreach($childs as $key => $child)
                <tr>
                    <td class="text-center">{{++$key}}</td>
                    <td class="text-center">
                        <a href="">
                            <h4>{{ $child->name }}</h4>
                        </a>
                    </td>
                    <td class="text-center action_icon">
                        <a href="{{route('child.edit',$child->id)}}"><i class="far fa-edit edit"></i></a>
                        <a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$child->id}}" data-toggle="modal" data-target="#Modal"></a>
                    </td>
                </tr>
            @endforeach
            <!-- End loop -->
            </tbody>
        </table>
    </div>
    {{Form::open(['route' => ['child.delete'], 'method' => 'DELETE'])}}
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

@extends('admin.shared.main')
@section('title')
    Thêm mới
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route' => 'active.store', 'method' => 'post','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 class="mb-5 font-weight-bold">Hoạt động</h3>
            <div class="col-lg-12 col-md-12 col-sm-12 row">
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('Tên hoạt động: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::text('name', null, [
                            'class' => 'form-control',
                            'placeholder'=>"Tên hoạt động"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('Tiêu đề: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::text('title', null, [
                            'class' => 'form-control',
                            'placeholder'=>"Tiêu đề"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('title')}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('Ngày bắt đầu: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::date('start_date', null, [
                        'class' => 'form-control',
                        'placeholder'=>"Ngày bắt đầu dự kiến"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('start_date')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('Ngày kết thúc: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::date('end_date', null, [
                        'class' => 'form-control',
                        'placeholder'=>"Ngày kết thúc dự kiến"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('end_date')}}</span>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Hình ảnh: ','',['class' => 'font-weight-bold']) }}
                    {{ Form::file('url_image', null, ['class' => 'form-control' ]) }}
                    <br>
                    <span class="text-danger">{{ $errors->first('url_image')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Nội dung: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::textarea('txtcontent', null, [
                    'class' => 'form-control',
                    'id'=>'editor1',
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('txtcontent')}}</span>
                </div>
                <div class="form-group text-right">
                    <a class="btn btn-info mt-3" href="{{ route('active.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
                    {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
    <script language='javascript'>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor1'); </script>
@endsection

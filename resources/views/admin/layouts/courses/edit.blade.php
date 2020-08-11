@extends('admin.shared.main')
@section('title')
    Chỉnh sủa
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route'=>['course.update',$course->id],'method'=>'put','enctype '=>'multipart/form-data','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 class="mb-5 font-weight-bold">Khóa học</h3>
            <div class="col-lg-12 col-md-12 col-sm-12 row">
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('Tên khóa học: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::text('name', $course->name, [
                            'class' => 'form-control',
                            'placeholder'=>"Tên khóa học"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('Tiêu đề: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::text('title', $course->title, [
                            'class' => 'form-control',
                            'placeholder'=>"Tiêu đề"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('title')}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        {{ Form::label('Giá: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::number('price', $course->price, [
                        'class' => 'form-control','onKeyPress'=>'return isNumberKey(event)',
                        'placeholder'=>"Giá"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('price')}}</span>
                    </div>
                    <div class="form-group col-md-2">
                        {{ Form::label('Giảm giá: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::number('discount', $course->discount, [
                        'class' => 'form-control','onKeyPress'=>'return isNumberKey(event)',
                        'placeholder'=>"ex: 10%"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('discount')}}</span>
                    </div>
                    <div class="form-group col-md-2">
                        {{ Form::label('Số lượng học viên: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::number('maximum_student', $course->maximum_student, [
                        'class' => 'form-control','onKeyPress'=>'return isNumberKey(event)',
                        'placeholder'=>"Số lượng học viên tối đa trong lớp"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('maximum_student')}}</span>
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('Ngày bắt đầu: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::date('start_date', $course->start_date, [
                        'class' => 'form-control',
                        'placeholder'=>"Ngày bắt đầu dự kiến"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('start_date')}}</span>
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('Ngày kết thúc: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::date('end_date', $course->end_date, [
                        'class' => 'form-control',
                        'placeholder'=>"Ngày kết thúc dự kiến"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('end_date')}}</span>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Hình ảnh: ','',['class' => 'font-weight-bold']) }}
                    {{ Form::file('url_image', ['class' => 'form-control' ]) }}
                    <input type="hidden" value="{{$course->image}}" name="image"><br>
                    <br>
                    <span class="text-danger">{{ $errors->first('url_image')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Nội dung: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::textarea('txtContent', $course->content, [
                    'class' => 'form-control','id'=>'editor1',
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('description')}}</span>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-info mt-3" href="{{ route('course.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
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

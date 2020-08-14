@extends('admin.shared.main')
@section('title')
    Thêm mới
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route' => 'class.store', 'method' => 'post','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 class="mb-5 font-weight-bold">Lớp học</h3>
            <div class="col-lg-12 col-md-12 col-sm-12 row">
                <div class="row">
                    <div class="form-group col-lg-3 col-md-3 col-sm-12">
                        {{ Form::label('Tên lớp học: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::text('name', null, [
                            'class' => 'form-control',
                            'placeholder'=>"Tên lớp học"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm-12">
                        {{ Form::label('Khóa học: ','',['class' => 'font-weight-bold']) }}
                        {{ Form::select('course_id', $courses, null,['class' => 'form-control','placeholder'=>"Chọn khóa học"]) }}

                        <span class="text-danger">{{ $errors->first('course_id')}}</span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
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
                </div>
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        {{ Form::label('Mô tả: ','',['class' => 'font-weight-bold']) }}
                        {!! Form::textArea('description', '(Thứ 2 - 6) : 17h00 - 19h00', [
                            'class' => 'form-control',
                            'placeholder'=>"Mô tả: (Thứ 2 - 6) : 17h00 - 19h00"
                        ])
                        !!}
                        <span class="text-danger">{{ $errors->first('description')}}</span>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-info mt-3" href="{{ route('class.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
                    {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

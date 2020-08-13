@extends('admin.shared.main')
@section('title')
    Cập nhật
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route'=>['parent.update',$parent->id],'method'=>'put','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 class="mb-5 font-weight-bold">Phụ huynh</h3>
            <div class="col-lg-10 col-md-10 col-sm-12 row">
                <div class="form-group">
                    {{ Form::label('Tên phụ huynh: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('full_name', $parent->full_name, [
                        'class' => 'form-control',
                        'placeholder'=>"Tên phụ huynh"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('full_name')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Địa chỉ: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('address', $parent->address, [
                        'class' => 'form-control',
                        'placeholder'=>"Địa chỉ"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('address')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Địa chỉ Email: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('email', $parent->email, [
                        'class' => 'form-control',
                        'placeholder'=>"Địa chỉ Email"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('email')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Số điện thoại: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('phone_no', $parent->phone_no, [
                        'class' => 'form-control',
                        'placeholder'=>"Số điện thoại"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('phone_no')}}</span>
                </div>
                <div class="form-group text-right">
                    <a class="btn btn-info mt-3" href="{{ route('parent.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
                    {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

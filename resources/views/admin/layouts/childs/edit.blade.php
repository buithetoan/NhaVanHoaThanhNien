@extends('admin.shared.main')
@section('title')
    Cập nhật
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route'=>['child.update',$child->id],'method'=>'put','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 class="mb-5 font-weight-bold">Học viên</h3>
            <div class="col-lg-10 col-md-10 col-sm-12 row">
                <div class="form-group">
                    {{ Form::label('Tên học viên: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('name', $child->name, [
                        'class' => 'form-control',
                        'placeholder'=>"Tên học viên"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Tuổi: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('year_old', $child->year_old, [
                        'class' => 'form-control',
                        'placeholder'=>"Tuổi"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('year_old')}}</span>
                </div>
                <div class="form-group">
                    {{ Form::label('Phụ huynh: ','',['class' => 'font-weight-bold']) }}
                    {{ Form::select('parent_id', $parents, $child->parent_id,['class' => 'form-control','placeholder'=>"Chọn phụ huynh"]) }}

                    <span class="text-danger">{{ $errors->first('parent_id')}}</span>
                </div>
                <select class="form-control" style="margin-bottom: 20px;" name="courses[]" multiple="multiple">
                    @foreach($courses as $course)
                        <option
                            {{ $listCourseOfChild->contains($course->id) ? 'selected' : '' }}
                            value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
                <div class="form-group text-right">
                    <a class="btn btn-info mt-3" href="{{ route('child.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
                    {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

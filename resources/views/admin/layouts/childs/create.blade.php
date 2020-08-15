@extends('admin.shared.main')
@section('title')
    Thêm mới
@endsection
@section('content')
    <div class="content_yield">
        {{ Form::open(['route' => 'child.store', 'method' => 'post','class' => 'col-md-12 row']) }}
        <div class="col-md-12 m-auto">
            <h3 >Thông tin phụ huynh</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
                        <div class="col-md-8">
                            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                        <div class="col-md-8">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>
                        <div class="col-md-8">
                            <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus>
                            @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mb-5 font-weight-bold">Thông tin học viên</h3>
            <div class="row">
                <div class="form-group col-lg-6">
                    {{ Form::label('Tên học viên: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::text('name', null, [
                        'class' => 'form-control',
                        'placeholder'=>"Tên học viên"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                </div>
                <div class="form-group col-lg-6">
                    {{ Form::label('Tuổi: ','',['class' => 'font-weight-bold']) }}
                    {!! Form::number('year_old', null, [
                        'class' => 'form-control',
                        'placeholder'=>"Tuổi"
                    ])
                    !!}
                    <span class="text-danger">{{ $errors->first('year_old')}}</span>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('Lớp học: ','',['class' => 'font-weight-bold']) }}
                <select class="form-control" style="margin-bottom: 20px;" name="rooms[]" multiple="multiple">
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group text-right">
                <a class="btn btn-info mt-3" href="{{ route('child.index') }}" title="back"><i class="fas fa-arrow-left"> Back to list</i></a>
                {{ Form::submit('Save',['class' => 'font-weight-bold text-white btn bg-color-green mt-3']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

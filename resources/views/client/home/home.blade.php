@extends('client.shared.main')
@section('title', 'Web thanh niên')
@section('content')
<!-- Section -->
<section class="vhnt">
    <!-- Section title -->
    <h2 class="section_title">
        <a href="{{ url('/active') }}">Hoạt động và sự kiện</a>
    </h2>
    <!-- List -->
    <div class="row">
        <!-- Loop -->
        @foreach($activities as $key => $active)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-image">
                        <a href="{{ url('/active/detail') }}"><img class="card-img-top" src="{{ asset('images/'.$active->image) }}" alt="hd"></a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ url('/active/detail') }}">{{$active->title}}</a>
                        </h4>
                        <p class="card-text">{!! Illuminate\Support\Str::limit($active->content, 100) !!}</p>
                        <div class="card-button">
                            <a href="{{ url('/active/detail') }}" class="btn btn-success">Xem thêm &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End Loop -->
    </div>
</section>
<!-- End Section -->
@endsection

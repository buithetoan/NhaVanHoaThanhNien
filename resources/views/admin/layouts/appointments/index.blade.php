@extends('admin.shared.main')
@section('title')
    Nhà văn hóa Thanh niên
@endsection
@section('content')
    <div class="content_yield">
        <h3 class="page_title">Cuộc hẹn</h3>
        <table class="table table_xk table-hover table-bordered">
            <thead class="thead_green">
            <tr>
                <th class="text-center" style="width: 50px;">STT</th>
                <th class="text-center">Phụ huynh</th>
                <th class="text-center">Số điện thoại</th>
                <th class="text-center" >Nội dung cuộc hẹn</th>
                <th class="text-center">Bắt giờ</th>
                <th class="text-center">Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop -->
            @foreach($appointments as $key => $appointment)
                <tr>
                    <td class="text-center">{{++$key}}</td>
                    @foreach($parents as $parent)
                        @if($parent->id == $appointment->parent_id)
                            <td class="text-center">{{$parent->full_name}}</td>
                            <td class="text-center">{{$parent->phone_no}}</td>
                        @endif
                    @endforeach
                    <td class="text-center">{{ $appointment->description }}</td>
                    <td class="text-center">{{ $appointment->start_date }} </td>
                    @if($appointment->status == 0)
                        <td class="text-center"><a class="btn btn-danger" type="submit" href="{{url('admin/appointment/edit/'.$appointment->id)}}">Chưa gặp</a></td>
                    @else
                        <td class="text-center"><a class="btn btn-success disabled">Đã gặp</a></td>
                    @endif
                </tr>
            @endforeach
            <!-- End loop -->
            </tbody>
        </table>
    </div>
@endsection

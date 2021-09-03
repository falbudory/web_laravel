@if(Auth::check())
    @extends('layouts.home.index')
@section('content')
    <br>
    <br>
<div class="container">
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Ngày mua</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $index => $item)
            <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{number_format($item->total)}} VND</td>
                @if($item->status === '1')
                <td>Đã thanh toán</td>
                @elseif($item->status === '0')
                    <td>Đang giao hàng</td>
                @endif
                <td>{{$item->date_order}}</td>
                <td>
                    <button class="btn btn-primary">
                        <a style="color:#FFFFFF;" href="{{route('home.historyDetail',$item->id)}}">Chi tiết</a>
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    <br><br>
@endsection
@endif

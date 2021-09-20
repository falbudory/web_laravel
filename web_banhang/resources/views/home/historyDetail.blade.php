@if(Auth::check())
    @extends('layouts.home.index')
@section('content')

    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <br>
                            <br>
                            <div class="container">
                                <div>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Ảnh</th>
                                            <th scope="col">Tên hàng</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Đơn giá</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $index => $item)
                                            <tr>
                                                <th scope="row">{{$index+1}}</th>
                                                <td><img src="http://localhost:8000/images/{{$item->image}}" alt="" style="height: 100px;width: 100px"></td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>{{number_format($item->price)}} VND</td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <!-- //fourth section -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@endif

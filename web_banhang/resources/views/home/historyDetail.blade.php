@if(Auth::check())
    @extends('layouts.home.index')
@section('content')
<title>Lịch sử mua hàng</title>
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">


                            <div class="container">
                                <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                                    <span style="font-size: inherit;">CHI TIẾT ĐƠN HÀNG</span>
                                </h3>

                                <div>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" >Tên khách hàng: <span style="color: blue;">{{$customer->name}}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" >Số điện thoại: <span style="color: blue;">{{$customer->phone}}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" >Địa chỉ: <span style="color: blue;">{{$customer->address}}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" >Đơn hàng: <span style="color: blue;">{{number_format($bill->total)}} VND <span></span></label>
                                        </div>

                                    </form>
                                </div>
                                <br>
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
                                                <td><img src="{{ asset('/images/'.$item->image) }}" alt="" style="width: 150px"></td>
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

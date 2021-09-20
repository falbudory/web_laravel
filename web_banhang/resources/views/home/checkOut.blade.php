@if(Auth::check())
    @extends("layouts.home.index")

@section("content")


    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <div class="row">
                                <div class="container">
                                    <br>
                                    <br>
                                    <div style="color: blue;font-size: x-large;font-weight: bold;padding-left: 100px;">
                                        Đơn hàng: {{number_format($money)}} VND
                                    </div>
                                    <div class="modal-body">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="list-group">
                                                    @foreach($errors->all() as $error)
                                                        <li class="list-group-item">
                                                            {{ $error }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('home.createDB') }}">
                                            {{ csrf_field() }}
                                            @if(Session::has('TTF'))
                                                <script>
                                                    alert('Không đủ số dư để thanh toán!');
                                                </script>
                                            @endif
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Tên khách hàng</label>
                                                <input type="text" class="form-control" placeholder=" " name="name" required="">
                                            </div>
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Địa chỉ nhận hàng</label>
                                                <input type="text" class="form-control" placeholder=" " name="address" required="">
                                            </div>
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Số điện thoại</label>
                                                <input type="text" class="form-control" placeholder=" " name="phone" required="">
                                            </div>
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Ghi chú</label>
                                                <input type="text" class="form-control" placeholder=" " name="note" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" style="color: red;">Hình thức thanh toán</label>
                                            </div>
                                            <div class="form-group">
                                                <input required="" name="thanhToan" type="radio" id="tienmat" value="tienMat"/><label for="tienmat">Tiền mặt</label>
                                            </div>
                                            <div class="right-w3l">
                                                <input type="submit" class="form-control" value="Thanh toán">
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //fourth section -->
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
@endif

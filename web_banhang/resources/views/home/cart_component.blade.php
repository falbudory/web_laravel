<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">

        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-12">
                <div class="wrapper">
                    <!-- first section -->
                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">

                        <div class="cart_wrapper">
                            <div style="height: 100px;width: 100%;">
                                <h1>Giỏ hàng của bạn</h1>
                            </div>
                            <div class="cart delete_cart_url" data-url="{{route('home.deleteCart')}}">
                                <div class="container">
                                    @if($cart != null)
                                        <div class="row">

                                            <table class="table update_cart_url"
                                                   data-url="{{route('home.updateCart')}}">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Ảnh</th>
                                                    <th scope="col">Tên sản phẩm</th>
                                                    <th scope="col">Đơn giá</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Thành tiền</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach($cart as $id => $item)
                                                    @php
                                                        $total += $item['price']*$item['quantity'];
                                                    @endphp
                                                    <tr>
                                                        <td><img src="images/{{$item['image']}}" alt=""
                                                                 style="height: 100px;width: 100px"></td>
                                                        <td>{{$item['name']}}</td>
                                                        <td>{{number_format($item['price'])}}</td>
                                                        <td><input type="number" style="width: 70px;"
                                                                   value="{{$item['quantity']}}" min="1"
                                                                   class="quatity">
                                                        </td>
                                                        <td>{{number_format($item['price']*$item['quantity'])}}</td>
                                                        <td>

                                                            <a href="#" data-id="{{$id}}"
                                                               class="btn btn-primary cart-update">Cập nhật</a>
                                                            <a href="#" data-id="{{$id}}"
                                                               class="btn btn-danger cart-delete">Xóa</a>
                                                            <a href="{{ url('product/'.$id) }}"
                                                               class="btn btn-primary">Chi tiết sản phẩm</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            style="color: blue;font-weight: bold;font-size: x-large;padding-left: 623px;">
                                            Tổng tiền : {{number_format($total)}} VND
                                        </div>
                                        <br>
                                        @if(Auth::check())
                                            <div style="padding-left: 765px;">
                                                <button class="btn btn-primary"><a href="{{route('checkOut')}}"
                                                                                   style="color: #FFFFFF">Thanh
                                                        toán</a></button>
                                            </div>
                                        @else
                                            <div style="color: red;font-size: large;text-align: center;">
                                                Bạn cần <a href="#" data-toggle="modal" data-target="#exampleModal">Đăng
                                                    nhập</a> để thanh toán giỏ hàng !
                                            </div>
                                        @endif
                                    @else
                                        <div><h2>Giỏ hàng trống !</h2></div>
                                    @endif
                                    <br>
                                    <br>
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

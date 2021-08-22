@extends('layouts.admin.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Hóa đơn</a> <a href="#" class="current">Tất cả hóa đơn</a> </div>
            <h1>Products</h1>

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Chi tiết hóa đơn</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Mã Khách hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Hình thức thanh toán</th>
                                    <th>Địa chỉ gửi hàng</th>
                                    <th>Created at</th>
                                    <th>Edited at</th>
                                    <th>Lưu ý</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--              	@foreach($products as $product)--}}
                                <tr class="gradeX">
                                    <td>{{--{{ $product->id }}--}}</td>
                                    <td>{{--{{ $product->brand }}--}}</td>
                                    <td>{{--{{ $product->name }}--}}</td>
                                    <td>{{--{{ $product->code }}--}}</td>
                                    <td>{{--{{ $product->color }}--}}</td>
                                    <td>{{--{{ $product->price }}--}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{--@if(!empty($product->image))--}}
                                        <img src="{{--{{ asset('/img/products/'.$product->image) }}--}}" style="width:60px;">
                                        {{--@endif--}}
                                    </td>
                                    <td class="center"><a href="#myModal{{--{{ $product->id }}--}}" data-toggle="modal" class="btn btn-success btn-mini">View</a> <a href="{{--{{ url('/admin/edit-products/'.$product->id) }}--}}" class="btn btn-primary btn-mini">Edit</a> <a id="delCat" href="{{--{{ url('/admin/delete-product/'.$product->id) }}--}}" class="btn btn-danger btn-mini">Delete</a> </td>
                                </tr>
                                <div id="myModal{{--{{ $product->id }}--}}" class="modal hide">
                                    <div class="modal-header">
                                        <button data-dismiss="modal" class="close" type="button">×</button>
                                        <h3>{{--{{ $product->product_name }}--}} Full Details</h3>
                                    </div>
                                    <div class="modal-body">
                                        <p>Product ID: {{--{{ $product->id }}--}}</p>
                                        <p>Category ID:{{-- {{ $product->category_id }}--}}</p>
                                        <p>Product Code: {{--{{ $product->product_code }}--}}</p>
                                        <p>Product Color: {{--{{ $product->product_color }}--}}</p>
                                        <p>Price:{{-- {{ $product->price }}--}}</p>
                                        <p>Fabric: </p>
                                        <p>Material: </p>
                                        <p>Description: {{--{{ $product->description }}--}}</p>
                                    </div>
                                </div>
                                {{--                @endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

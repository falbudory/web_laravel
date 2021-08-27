@extends('layouts.admin.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{--{{ url('/admin/') }}--}}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Home</a> <a href="{{url('/admin/products')}}">Sản phẩm</a> <a href="#" class="current">Add
                    Product</a></div>
            <h1>Products</h1>

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Thêm sản phẩm</h5>
                        </div>
                        <div class="widget-content nopadding">
                            {{--          @include('flash_message')--}}

                            <form enctype="multipart/form-data" class="form-horizontal" method="post"
                                  action="{{--{{ url('/admin/insert-products') }}--}}" name="add_product"
                                  id="add_product" novalidate="novalidate"> {{--{{ csrf_field() }}--}}
                                <div class="control-group">
                                    <label class="control-label">Nhà sản xuất</label>
                                    <div class="controls">
                                        <select name="brand" id="brand" style="width: 220px;">
                                            <option value='' selected disabled style="display: none"></option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->code}}">{{$brand->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Loại sản phẩm</label>
                                    <div class="controls">
                                        <select name="type_product" id="type_product" style="width: 220px;">
                                            <option value='' selected disabled style="display: none"></option>
                                            @foreach($type_products as $type_product)
                                                <option value="{{$type_product->code}}">{{$type_product->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                    <div class="controls">
                                        <input type="text" name="product_name" id="product_name" required/>
                                    </div>
                                </div>
{{--                                <div class="control-group">--}}
{{--                                    <label class="control-label">Product Code</label>--}}
{{--                                    <div class="controls">--}}
{{--                                        <input type="text" name="product_code" id="product_code" required/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="control-group">--}}
{{--                                    <label class="control-label">Product Color</label>--}}
{{--                                    <div class="controls">--}}
{{--                                        <input type="text" name="product_color" id="product_color" required/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="control-group">
                                    <label class="control-label">Hệ điều hành</label>
                                    <div class="controls">
                                        <input type="text" name="system" id="system" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Màn hình</label>
                                    <div class="controls">
                                        <input type="text" name="screen" id="screen" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ram</label>
                                    <div class="controls">
                                        <input type="text" name="ram" id="ram" required/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Ổ cứng</label>
                                    <div class="controls">
                                        <input type="text" name="hard_drive" id="hard_drive" required/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Giá</label>
                                    <div class="controls">
                                        <input type="text" name="price" id="price" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Số lượng</label>
                                    <div class="controls">
                                        <input type="text" name="discount" id="discount" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mô tả</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"  style="height: 300px; width: 500px;resize: none;" required></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ảnh</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" required/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="Add Product" class="btn btn-success">Add Product
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

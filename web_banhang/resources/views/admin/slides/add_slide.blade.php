@extends('layouts.admin.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{--{{ url('/admin') }}--}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">AddUser</a> <a href="#" class="current">Add Brand</a> </div>
            <h1>Loại sản phẩm</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Chỉnh sửa</h5>
                        </div>
                        <div class="widget-content nopadding">
                            @include('flash_message')

                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/slides/insert/') }}" name="add_slide" id="add_slide" novalidate="novalidate">
                                {{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label">Tên Slide</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Dành cho sản phẩm</label>
                                    <div class="controls">
                                        <select name="product_id" id="product_id" style="width: 220px;">
                                            <option value='' selected disabled style="display: none"></option>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Trạng thái</label>
                                    <div class="controls">
                                        <select name="status" id="status" style="width: 220px;">
                                            <option value='' selected disabled style="display: none"></option>
                                            <option value = '1'>On</option>
                                            <option value = '0'>Off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Mô tả</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="height: 300px; width: 500px;resize: none;" required>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" value="Thêm" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

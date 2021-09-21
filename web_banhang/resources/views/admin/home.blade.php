@extends('layouts.admin.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{--{{ url('/admin') }}--}}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i>Trang chủ</a>
            <h1>Trang chủ</h1>

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                            <h5>Thống kê</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Tổng đơn hàng</th>
                                    <th>Đơn chưa xử lý</th>
                                    <th>Đang vận chuyển</th>
                                    <th>Đã Giao hàng</th>
                                    <th>Đơn hủy</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td><a href="{{ url('/admin/bills/') }}">{{ $count_bill }} Đơn hàng</a></td>
                                        <td><a href="{{ url('/admin/bills/0') }}">{{ $bill_0 }} Đơn hàng</a></td>
                                        <td><a href="{{ url('/admin/bills/1') }}">{{ $bill_1 }} Đơn hàng</a></td>
                                        <td><a href="{{ url('/admin/bills/2') }}">{{ $bill_2 }} Đơn hàng</a></td>
                                        <td><a href="{{ url('/admin/bills/3') }}">{{ $bill_3 }} Đơn hàng</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

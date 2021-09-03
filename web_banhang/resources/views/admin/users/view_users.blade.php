@extends('layouts.admin.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{--{{ url('/admin') }}--}}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Home</a> <a href="#">User</a> <a href="#" class="current">Tất cả tài
                    khoản</a></div>
            <h1>Tài khoản</h1>

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                            <h5>Tất cả User</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                {{--`id` int(11) NOT NULL,
                                        `name` varchar(30) NOT NULL,
                                        `email` varchar(30) NOT NULL,
                                        `password` varchar(255) NOT NULL,
                                        `role_id` int(11) NOT NULL,
                                        `money` int(11) NOT NULL,
                                        `remember_token` varchar(255) NOT NULL,
                                        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                                        `updated_at` timestamp NOT NULL DEFAULT current_timestamp()--}}
                                <tr>
                                    <th>ID User</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Tiền</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Lựa chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="gradeX">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach($roles as $role)
                                                @if($role->id == $user->role_id)
                                                    {{ $role->name }}
                                                @endif
                                            @endforeach

                                        </td>
                                        <td>{{ $user->money }}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td class="center"><a href="#myModal{{--{{ $product->id }}--}}"
                                                              data-toggle="modal"
                                                              class="btn btn-success btn-mini">View</a> <a
                                                href="{{ url('admin/users/edit/'.$user->id) }}"
                                                class="btn btn-primary btn-mini">Edit</a> <a id="delCat"
                                                                                             href="{{--{{ url('/admin/delete-product/'.$product->id) }}--}}"
                                                                                             class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@extends('layouts.admin.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{--{{ url('/admin/') }}--}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Người dùng</a> <a href="#" class="current">Thêm người dùng</a> </div>
            <h1>Người dùng</h1>

        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Thêm người dùng</h5>
                        </div>
                        <div class="widget-content nopadding">
                                      @include('flash_message')

                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{--{{ url('/admin/insert-products') }}--}}" name="add_user" id="add_user" novalidate="novalidate"> {{--{{ csrf_field() }}--}}
                                <div class="control-group">
                                    <label class="control-label">Vai trò</label>
                                    <div class="controls">
                                        {{--`id` int(11) NOT NULL,
                                        `name` varchar(30) NOT NULL,
                                        `email` varchar(30) NOT NULL,
                                        `password` varchar(255) NOT NULL,
                                        `role_id` int(11) NOT NULL,
                                        `money` int(11) NOT NULL,
                                        `remember_token` varchar(255) NOT NULL,
                                        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                                        `updated_at` timestamp NOT NULL DEFAULT current_timestamp()--}}
                                        <select name="role" id="role" style="width: 220px;" onchange="getPermissionByRole(this)">
                                            <option value='' selected disabled>Select</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Quyền người dùng</label>
                                    <div class="controls" id="permission">
                                        <input type="checkbox" name="permission" id="view" value="" required /> <label for="">{{--{{$permission->name}}--}}</label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tên người dùng</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mật khẩu</label>
                                    <div class="controls">
                                        <input type="password" name="password" id="password" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Lặp lại mật khẩu</label>
                                    <div class="controls">
                                        <input type="password" name="repeat_pass" id="repeat_pass" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" required />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="" class="btn btn-success">Thêm người dùng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

{{--<script src="{{ asset('js\admin\Users\addUser.js') }}"></script>--}}

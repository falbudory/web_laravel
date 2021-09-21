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

                            <form class="form-horizontal" method="post" action="{{ url('admin/users/insert') }}" name="add_user" id="add_user" novalidate="novalidate"> {{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label">Vai trò</label>
                                    <div class="controls">
                                        <select name="role_id" id="role_id" style="width: 220px;">
                                            <option value='' selected disabled>Select</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
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
                                        <p id="regex_pass" style="display: none">Mật khẩu phải có độ dài 8 ký tự</p>
                                        <p id="different" style="display: none">Mật khẩu và nhập lại mật khẩu không giống nhau</p>
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
                                    <label class="control-label"></label>
                                    <div class="controls">
                                        <div style="display: flex">
                                            <input type="checkbox" name="show-pass"
                                                   id="show-pass" value=""/>
                                            <label for="show-pass">Hiện mật khẩu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" required />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" id="btn_add_user" value="" class="btn btn-success" disabled>Thêm người dùng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

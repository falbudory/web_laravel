@if(Auth::check())
    @extends("layouts.home.index")

@section("content")
<title>Đổi mật khẩu</title>
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">

                                <div class="container">
                                    <br>
                                    <br>
                                    <div style="color: blue;font-size: x-large;font-weight: bold;padding-left: 15px;">
                                        Đổi mật khẩu
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
                                        <form method="POST" action="{{ route('home.postChangePass') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Mật khẩu cũ</label>
                                                <input type="password" class="form-control" placeholder=" " name="password" required="">
                                            </div>
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Mật khẩu mới</label>
                                                <input type="password" class="form-control" placeholder=" " name="passwordNew" required="">
                                            </div>
                                            <div class="form-group">

                                                <label class="col-form-label" style="color: red;">Nhập lại mật khẩu mới</label>
                                                <input type="password" class="form-control" placeholder=" " name="re_passwordNew" required="">
                                            </div>

                                            <div class="right-w3l">
                                                <input type="submit" class="form-control" value="Đổi mật khẩu">
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
@endsection
@endif

@if(Auth::check())
    @extends("layouts.home.index")

@section("content")
    <div class="container">
        <br>
        <br>
        <div style="color: blue;font-size: x-large;font-weight: bold;padding-left: 100px;">
            Đổi mật khẩu
        </div>
        <div class="modal-body">
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
@endsection
@endif

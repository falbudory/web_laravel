<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords"
          content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <link rel="icon" href="{{asset('images/logo2.png')}}">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/popuo-box.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('/css/checkOut.css') }}" rel="stylesheet">--}}
<!-- web fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web fonts -->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossOrigin="anonymous"
    />
    <style>
        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }
        /* thiết lập style cho class active */
        .pagination a.active {
            background-color: dodgerblue;
            color: white;
        }
        /* thêm màu nền khi người dùng hover vào class không active */
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>
<!-- top-header -->
@if(session()->has('newSucc'))
    <script>
        alert('Đổi mật khẩu thành công !')
    </script>
@endif
@if(session()->has('newFailed'))
    <script>
        alert('Mật khẩu nhập lại không đúng !')
    </script>
@endif
@if(session()->has('oldFailed'))
    <script>
        alert('Mật khẩu cũ không đúng !')
    </script>
@endif
@if(session()->has('emailFailed'))
    <script>
        alert('Email không tồn tại !')
    </script>
@endif
@if(session()->has('trung'))
    <script>
        alert('Mật khẩu mới trung mật khẩu cũ !')
    </script>
@endif
<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Siêu ưu đãi và giảm giá
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right">
                <!-- header lists -->
                <ul>
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 0853914191
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="text-center border-right text-white">
                            <a href="{{route('home.logout')}}" class="text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i> Đăng xuất</a>
                        </li>
                        <li class="text-center border-right text-white">
                            <a href="{{route('home.history')}}" class="text-white">
                                Chào {{Auth::user()->name}}</a>
                        </li>
                    @else
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập</a>
                        </li>
                        <li class="text-center text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                <i class="fas fa-sign-in-alt mr-2"></i> Đăng kí </a>
                        </li>
                    @endif
                    @if(Session::has('flag'))
                        <script>
                            alert('Đăng kí tài khoản thành công');
                        </script>
                    @endif
                    @if(Session::has('false'))
                        <script>
                            alert('Đăng kí tài khoản không thành công. Email đã tồn tại');
                        </script>
                    @endif
                    @if(Session::has('loginF'))
                        <script>
                            alert('Đăng nhập không thành công. Email hoặc mật khẩu không đúng !');
                        </script>
                    @endif
                    @if(Session::has('moneyF'))
                        <script>
                            alert('Mật khẩu không đúng!');
                        </script>
                    @endif

                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--@if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                <form method="POST" action="{{ route('home.login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">

                        <label class="col-form-label">Email</label>
                        <input type="text" class="form-control" placeholder=" " name="email" required="">
                    </div>
                    <div class="form-group">

                        <label class="col-form-label">Password</label>
                        <input type="password" minlength="8" class="form-control" placeholder=" " id="pass_login" name="password" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Đăng nhập">
                    </div>
                    <div class="sub-w3l">
                        {{--                        <div class="custom-control custom-checkbox mr-sm-2">--}}
                        {{--                            <input type="checkbox" class="custom-control-input" name="remember"--}}
                        {{--                                   id="customControlAutosizing">--}}
                        {{--                            <label class="custom-control-label" for="customControlAutosizing">Nhớ mật khẩu?</label>--}}
                        {{--                        </div>--}}
{{--                        <a href="{{route('home.returnPass')}}">Quên mật khẩu</a>--}}
                    </div>
                    <p class="text-center dont-do mt-3">Bạn không có tài khoản?
                        <a href="#" data-toggle="modal" data-target="#exampleModal2">
                            Đăng ký ngay</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- register -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng kí</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--@if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                <form action="{{ route('store')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-form-label">Tên của bạn</label>
                        <input type="text" class="form-control" placeholder=" " name="name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder=" " name="email" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Mật khẩu</label>
                        <input type="password" minlength="8" class="form-control" placeholder=" " name="password" id="password1"
                               required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Xác nhận mật khẩu</label>
                        <input type="password" minlength="8" class="form-control" placeholder=" " name="password_re"
                               id="password2" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Đăng ký">
                    </div>
                    {{--                    <div class="sub-w3l">--}}
                    {{--                        <div class="custom-control custom-checkbox mr-sm-2">--}}
                    {{--                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">--}}
                    {{--                            <label class="custom-control-label" for="customControlAutosizing2">Tôi chấp nhận các điều--}}
                    {{--                                khoản và điều kiện</label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
</div>

{{--naptien--}}
{{--@if(Auth::check())--}}
{{--    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title text-center">Nạp tiền</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form method="POST" action="{{ route('home.update',Auth::user()->id) }}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group">--}}

{{--                            <label class="col-form-label">Nhập số tiền</label>--}}
{{--                            <input type="text" class="form-control" placeholder=" " name="money" required="">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}

{{--                            <label class="col-form-label">Password</label>--}}
{{--                            <input type="password" class="form-control" placeholder=" " name="password" required="">--}}
{{--                        </div>--}}
{{--                        <div class="right-w3l">--}}
{{--                            <input type="submit" class="form-control" value="Nạp">--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
<!-- //modal -->
<!-- //top-header -->

<!-- header-bottom-->
<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center" style="font-size: 30px !important;">
                    <a href="{{route('index')}}" class="font-weight-bold font-italic" style="font-size: 25px">
                        <img style="width: 60px;" src="{{asset('images/logo2.png')}}" alt=" " class="{{--img-fluid--}}">THAKHA SHOP
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="{{route('home.search')}}">
                            <input class="form-control mr-sm-2" type="search" name="searchP" placeholder=" Từ khóa"
                                   aria-label="Search" autocomplete="off"
                                   required>
                            <button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        {{--                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">--}}
                        {{--                            <form action="{{route('checkOut')}}" method="post" class="last">--}}
                        {{--                                <input type="hidden" name="cmd" value="_cart">--}}
                        {{--                                <input type="hidden" name="display" value="1">--}}
                        {{--                                <button class="btn w3view-cart" type="submit" name="submit" value="">--}}
                        {{--                                    <i class="fas fa-cart-arrow-down"></i>--}}
                        {{--                                </button>--}}
                        {{--                            </form>--}}
                        {{--                        </div>--}}
                        <div class="row">
                            @if(session()->has('cart'))
                            <div class="col-md-12" id="quantityCart">
                                {{--                                @if(session::has('cart'))--}}

{{--                                <div id="quantityCart"></div>--}}
                                {{--                                @else--}}
                                {{--                                    <a class="btn btn-primary"><i class="fas fa-cart-arrow-down"></i></a>--}}
                                {{--                                @endif--}}
                                {{--                                    @php--}}
                                {{--                                        $a = count(Session::get('cart'));--}}
                                {{--                                    @endphp--}}
                                {{--                                    @if(session()->has('cart'))--}}
                                {{--                                    @endif--}}
                            </div>
                            @else
                                <div class="col-md-12" id="quantityCart">
                                    {{--                                @if(session::has('cart'))--}}

                                    {{--                                <div id="quantityCart"></div>--}}
                                    {{--                                @else--}}
                                    <a class="btn btn-primary"><i class="fas fa-cart-arrow-down"></i></a>
                                    {{--                                @endif--}}
                                    {{--                                    @php--}}
                                    {{--                                        $a = count(Session::get('cart'));--}}
                                    {{--                                    @endphp--}}
                                    {{--                                    @if(session()->has('cart'))--}}
                                    {{--                                    @endif--}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- //cart details -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('index')}}">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link " href="{{route('home.typeProduct','1')}} ">
                            Máy tính
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link " href="{{route('home.typeProduct','2')}}">
                            Điện thoại
                        </a>

                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link " href="{{route('home.typeProduct','3')}}">
                            Phụ kiện
                        </a>

                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('aboutUs')}}">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}">Liên hệ</a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('home.history')}}">Lịch sử mua hàng</a>
                                <a class="dropdown-item" href="{{route('home.changePass')}}">Đổi mật khẩu</a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>

@yield('content')
<!--//footer-->
<footer>

    <!-- footer third section -->
    <div class="w3l-middlefooter-sec">
        <div class="container py-md-5 py-sm-4 py-3">
            <div class="row footer-info w3-agileits-info">
                <!-- footer categories -->
                <div class="col-md-3 col-sm-6 footer-grids">
                    <h3 class="text-white font-weight-bold mb-3">Sản phẩm</h3>
                    <ul>
                        <li class="mb-3">
                            <a href="{{route('home.typeProduct','1')}}">Laptop</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{route('home.typeProduct','2')}}">Điện thoại</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{route('home.typeProduct','3')}}">Phụ kiện</a>
                        </li>
                    </ul>
                </div>
                <!-- //footer categories -->
                <!-- quick links -->
                <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                    <h3 class="text-white font-weight-bold mb-3">Đường dẫn nhanh</h3>
                    <ul>
                        <li class="mb-3">
                            <a href="{{route('aboutUs')}}">Về chúng tôi</a>
                        </li>
                         <li class="mb-3">
                             <a href="{{route('contactUs')}}">Liên hệ</a>
                         </li>
                        {{--<li class="mb-3">
                            <a href="#">Help</a>
                        </li>
                        <li class="mb-3">
                            <a href="#">Faqs</a>
                        </li>
                        <li class="mb-3">
                            <a href="#">Terms of use</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>--}}
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                    <h3 class="text-white font-weight-bold mb-3">Liên hệ</h3>
                    <ul>
                        <li class="mb-3">
                            <i class="fas fa-map-marker"></i>141, Tân Triều, Thanh Trì.
                        </li>
                        <li class="mb-3">
                            <a href="tel:0337349565"><i class="fas fa-phone"></i> 0853914191</a>
                        </li>
                        <li class="mb-3">
                            <a href="tel:0337349565"><i class="fas fa-phone"></i> 0337349565</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope-open"></i>
                            <a href="mailto:thakhahelpme@gmail.com">thakhahelpme@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <a href="mailto:thakhahelpme@gmail.com">thakhahelpme@gmail.com</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                     <!-- newsletter -->
                     <h3 class="text-white font-weight-bold mb-3">Tin tức</h3>
                     <p class="mb-3">Giao hàng miễn phí cho đơn hàng đầu tiên của bạn!</p>
                     <form action="#" method="post">
                         <div class="form-group">
                             <input type="email" class="form-control" placeholder="Email" name="email" required="">
                             <input type="submit" value="Gửi">
                         </div>
                     </form>
                     <!-- //newsletter -->
                     <!-- social icons -->
                     <div class="footer-grids  w3l-socialmk mt-3">
                         <h3 class="text-white font-weight-bold mb-3">Theo dõi</h3>
                         <div class="social">
                             <ul>
                                 <li>
                                     <a class="icon fb" href="#">
                                         <i class="fab fa-facebook-f"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="icon tw" href="#">
                                         <i class="fab fa-twitter"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="icon gp" href="#">
                                         <i class="fab fa-google-plus-g"></i>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <!-- //social icons -->
                 </div>--}}
            </div>
        {{--            <div class="sub-some child-momu mt-4">--}}
        {{--                <h5 class="font-weight-bold mb-3" style="color: #FFFFFF">Payment Method</h5>--}}
        {{--                <ul>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay2.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay5.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay1.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay4.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay6.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay3.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay7.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay8.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                    <li>--}}
        {{--                        <img src="{{asset('images/pay9.png')}}" alt="">--}}
        {{--                    </li>--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        <!-- //quick links -->
        </div>
    </div>
    <!-- //footer third section -->


    <!-- //brands -->
    <!-- payment -->

    <!-- //payment -->

    </div>
    <!-- //footer fourth section (text) -->
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right py-3">
    <div class="container">
        <p class="text-center text-white">© 2021 THAKHA SHOP. All rights reserved
        </p>
    </div>
</div>
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->

<script src="{{ asset('/js/jquery-2.2.3.min.js') }}"></script>
<!-- //jquery -->

<!-- nav smooth scroll -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->

<script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        let inputElm = document.getElementsByTagName("input");
        for (let i=0; i<inputElm.length; i++) {
            inputElm[i].setAttribute("autocomplete", "off");
        }

    });
</script>

<!-- //popup modal (for location)-->

<!-- cart-js -->

<script src="{{ asset('/js/minicart.js') }}"></script>
<script>
    paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

    paypals.minicarts.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
        document.getElementById("pass_login").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        var pass_login = document.getElementById("pass_login").value;
        if(pass1.length<8)
            $("#password1")[0].setCustomValidity("Mật khẩu phải có độ dài tối thiểu 8 ký tự và ít hơn 20 ký tự");
        else
            $("#password1")[0].setCustomValidity("");
        if (pass1 != pass2)
           $("#password2")[0].setCustomValidity("Mật khẩu không giống nhau");
        else
            $("#password2")[0].setCustomValidity('');
        //empty string means no validation error
        if(pass_login.length < 8) {
            $("#pass_login")[0].setCustomValidity("Mật khẩu phải có độ dài tối thiểu 8 ký tự và ít hơn 20 ký tự");
        }else {
            $("#pass_login")[0].setCustomValidity("");
        }
    }
</script>
<!-- //password-script -->

<!-- scroll seller -->

<script src="{{ asset('/js/scroll.js') }}"></script>
<!-- //scroll seller -->


<script src="{{ asset('/js/SmoothScroll.min.js') }}"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->

<script src="{{ asset('/js/move-top.js') }}"></script>
<script src="{{ asset('/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!--cart-->
<script>
    function quantity_cart(){

        $.ajax({
            method: "GET",
            url:"{{url('quantityCart')}}",
            success: function (data) {
                $('#quantityCart').html(data);
            },
            error: function () {

            }
        });
    }
    function addToCart(event) {
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function (data) {
                if (data.code === 200) {
                    quantity_cart();
                    alert('Thêm sản phẩm thành công');
                } else if (data.code === 300) {
                    alert('Xin lỗi quý khách\nSản phẩm trong kho đã hết hàng')
                }
            },
            error: function () {

            }
        });

    }


    $(function () {
        $('.add-to-cart').on('click', addToCart);
        quantity_cart();
    });
</script>
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function (){--}}
{{--        quantity_cart();--}}
{{--        function quantity_cart(){--}}

{{--            $.ajax({--}}
{{--                method: "GET",--}}
{{--                url:'{{url('/quantityCart')}}',--}}
{{--                success: function (data) {--}}
{{--                    $('#quantityCart').html(data);--}}
{{--                },--}}
{{--                error: function () {--}}

{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
{{--<script src="js/bootstrap.js"></script>--}}
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->
</body>

</html>

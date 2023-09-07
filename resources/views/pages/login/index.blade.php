<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from php.spruko.com/spruha/spruha/pages/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 17:09:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - PHP Admin Panel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="php dashboard, php template, admin dashboard bootstrap, bootstrap admin theme, admin, php admin panel, bootstrap admin template, admin dashboard template, admin template bootstrap, php admin dashboard, dashboard template, dashboard template bootstrap, bootstrap admin, admin panel template, dashboard">

    <!-- TITLE -->
    <title> BANSTAL - Login </title>


    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('spruha/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{ asset('spruha/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('spruha/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('spruha/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('spruha/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('spruha/assets/css/plugins.css') }}" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="{{ asset('spruha/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('spruha/assets/switcher/demo.css') }}" rel="stylesheet">


</head>

<body class="ltr main-body leftmenu error-1">


    <!-- END PAGE -->

    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <!-- <img src="{{ asset('spruha/assets/img/brand/logo-light.png') }}" class="header-brand-img mb-4" alt="logo"> -->
                                <div class="clearfix"></div>
                                <img src="{{ asset('spruha/assets/img/logo-banstal-no-background.png') }}" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Selamat Datang di BANSTAL </h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="main-container container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="{{ asset('spruha/assets/img/brand/logo-light.png') }}" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
                                        <img src="{{ asset('spruha/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
                                        <div class="clearfix"></div>
                                        <form action="{{url('/login')}}" method="post">
                                            @csrf
                                            <h5 class="text-start mb-2">Masuk ke Akun Anda</h5>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover
                                                and connect with the global community</p>
                                            <div class="form-group text-start">
                                                <label>Email</label>
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{$massage}}
                                                </div>
                                                @enderror
                                                <input class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" type="text" name="email" autofocus required>
                                            </div>
                                            <div class="form-group text-start">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter your password" type="password" name="password" required>
                                            </div>
                                            <button type="submit" class="btn btn-main-primary btn-block text-white">Sign
                                                In</button>
                                        </form>
                                        <div class="text-start mt-5 ms-0">
                                            <div class="mb-1"><a href="forgot.html">Forgot password?</a></div>
                                            <div>Don't have an account? <a href="signup.html">Register Here</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->


    </div>
    <!-- END PAGE -->

    <!-- SCRIPTS -->

    <!-- JQUERY JS -->
    <script src="{{ asset('spruha/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('spruha/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- PERFECT SCROLLBAR JS -->
    <script src="{{ asset('spruha/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('spruha/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/select2.js') }}"></script>



    <!-- COLOR THEME JS -->
    <script src="{{ asset('spruha/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('spruha/assets/js/custom.js') }}"></script>

    <!-- SWITCHER JS -->
    <script src="{{ asset('spruha/assets/switcher/js/switcher.js') }}"></script>

    <!-- END SCRIPTS -->

</body>

<!-- Mirrored from php.spruko.com/spruha/spruha/pages/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 17:09:53 GMT -->

</html>
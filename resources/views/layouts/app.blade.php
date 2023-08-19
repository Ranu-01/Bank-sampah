<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>BANSTAL - @yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body class="ltr main-body leftmenu">
    <!-- PAGE -->
    <div class="page">
        @include('includes.header')
        @include('includes.sidebar')

        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
    <!-- END PAGE -->
    <!-- BACK TO TOP -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>

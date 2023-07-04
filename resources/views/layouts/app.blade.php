<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>BANSTAL - @yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>

    {{-- <div id="preloader">
        <div>
            <img src="{{ asset('yash/images/pre.gif') }}" alt="">
        </div>
    </div> --}}

    <div id="main-wrapper">
        @include('includes.header')
        @include('includes.sidebar')

        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        @include('includes.footer')

    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>

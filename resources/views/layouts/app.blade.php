<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body class="sb-nav-fixed">
    @include('includes.header')
    <div id="layoutSidenav">
        @include('includes.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            @include('includes.footer')
        </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')


</body>

</html>

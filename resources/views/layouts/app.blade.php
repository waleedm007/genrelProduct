<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="content-wrapper">
         
            @yield('content')
            @include('layouts.footer')
        </div>

    </div>
    @yield('themeConfigPanel')

    <!-- CORE PLUGINS-->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('js/app.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('js/scripts/dashboard_1_demo.js') }}" type="text/javascript"></script>
    @yield('script')

</body>

</html>
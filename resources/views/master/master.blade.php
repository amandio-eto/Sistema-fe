<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist-custom.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('loading/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    @yield('header')

</head>


<body>



    <!-- WRAPPER -->
    <div id="wrapper">

        @include('master.lanscape')

        @include('master.portail')
        <!-- MAIN -->
        <div class="main">
            <div class="row" style="margin-top:30px;">
                <div class="col">



                </div>
            </div>

            @yield('content')
        </div>
        <!-- END MAIN -->

        <footer>
            <div class="container-fluid">
                <p class="copyright">Created By<i class="fa fa-love"></i><a href="https://bootstrapthemes.co">
                        Esperanca Group IT</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> --}}
    <script src="{{asset('texteditor-js/js.js')}}"></script>


    {{-- ida nee mak Sweetaller --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>



    @yield('footer')

</body>
 @include('sweetalert::alert')
</html>

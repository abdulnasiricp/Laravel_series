<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin-panel/img/favicon.ico')}}" type="image/ico" />

    <title>E-Commerce</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin-panel/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('admin-panel/css/custom.min.css')}}" rel="stylesheet">

    @stack('style')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin-panel.layouts.sidbar')

            @include('admin-panel.layouts.navbar')

            @yield('content')

            @include('admin-panel.layouts.footer')

        </div>
    </div>


    <!-- jQuery -->
    <script src="{{asset('admin-panel/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin-panel/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin-panel/js/custom.min.js')}}"></script>

    @stack('scripts')

</body>

</html>
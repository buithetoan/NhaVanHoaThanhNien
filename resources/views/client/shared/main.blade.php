<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS =================================================== -->
    <link href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles =================================================== -->
    <link href="{{ asset('client/css/main-style.css') }}" rel="stylesheet">
    <!-- jQuery =================================================== -->
    <script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <!-- Menu -->
    @include('client.shared.menu-bar')
    <!-- End Menu -->
    <!-- ========================================================================================= -->
    <!-- Header -->
    @include('client.shared.header')
    <!-- End Header -->
    <!-- ========================================================================================= -->
    <!-- Page Content -->
    <div class="container">
        <div class="page-content">
            <!-- Section content -->
            @yield('content')
            <!-- End Section content -->
        </div>
    </div>
    <!-- End Page Content -->
    <!-- ========================================================================================= -->
    <!-- Footer -->
    @include('client.shared.footer')
    <!-- End Footer -->
    <!-- ========================================================================================= -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
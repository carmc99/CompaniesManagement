<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <title>{{ config('app.name', 'CompaniesManagement') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
    rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="page-top">
<div id="wrapper">
@include('layouts.sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
        @include('layouts.topbar')
        <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
            
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        @include('layouts.footer')
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('layouts.logoutModal')
<!-- /#wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

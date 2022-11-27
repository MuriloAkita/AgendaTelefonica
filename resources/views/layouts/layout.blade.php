<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Agenda Telefonica</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="NiceAdmin/img/favicon.png" rel="icon">
    <link href="NiceAdmin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('NiceAdmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="NiceAdmin/css/style.css" rel="stylesheet"> --}}

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    @yield('css')
    @livewireStyles
    @powerGridStyles
    <style>
        .appName {
            font-size: 26px;
            font-weight: 700;
            color: #012970;
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>

<body>

    <header id="header" class="header d-flex align-items-center mb-5">
        <span class="d-none d-lg-block appName">Agenda Telefonica</span>
        <nav class="">
        </nav>
    </header>

    @yield('content')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('NiceAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

    @livewireScripts
    @powerGridScripts

    <!-- Template Main JS File -->
    {{-- <script src="NiceAdmin/js/main.js"></script> --}}

    @yield('js')
</body>

</html>

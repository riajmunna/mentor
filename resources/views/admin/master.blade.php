<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin-Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('adminAsset')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('adminAsset')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('adminAsset')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('adminAsset')}}/assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
@include('admin.include.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('admin.include.side-bar')
<!-- End Sidebar-->

<!-- ======= Main Section ======= -->
<main id="main">
    @yield('content')
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('admin.include.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('adminAsset')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/chart.js/chart.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/echarts/echarts.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/quill/quill.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('adminAsset')}}/assets/js/main.js"></script>

</body>

</html>

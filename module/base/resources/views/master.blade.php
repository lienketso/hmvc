<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CMS Liên Kết Số</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('admin/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/apexcharts-bundle/css/apexcharts.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/dark-style.css')}}" />

    @yield('css')
    @stack('css')

</head>

<body>
<!-- wrapper -->
<div class="wrapper">
    <!--header-->
@include('wadmin-dashboard::header')
    <!--end header-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--sidebar-wrapper-->
    @include('wadmin-dashboard::sidebar')
        <!--end sidebar-wrapper-->
        <!--page-content-wrapper-->
        @yield('content')
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0">Lienketso @2020 | Developed By : <a href="http://lienketso.vn" target="_blank">Lienketso.vn</a>
        </p>
    </div>
    <!-- end footer -->
</div>
<!-- end wrapper -->

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bs-custom-file-input.min.js')}}"></script>
<script>
    // custom file
    $(document).ready(function () {
        bsCustomFileInput.init()
    });
</script>
<!--plugins-->
<script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

<!-- App JS -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>

@yield('js')
@yield('js-init')
@stack('js')
@stack('js-init')

</body>

</html>

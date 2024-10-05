<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Listian</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/./frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

    <!--==========================
        Navbar section
    ===========================-->
    @include('frontend.layouts.navbar')

    <!--==========================
        MENU PART END
    ===========================-->

    @yield('content')

    <!--==========================
        FOOTER PART START
    ===========================-->
    @include('frontend.layouts.footer')
    <!--==========================
        FOOTER PART END
    ===========================-->

    <!--=============SCROLL BTN==============-->
    <div class="scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--=============SCROLL BTN==============-->

    <!--jquery library js-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/assets/js/Font-Awesome.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('frontend/assets/js/venobox.min.js') }}"></script>
    <!--counter js-->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countup.min.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!--summer_note js-->
    <script src="{{ asset('frontend/assets/js/summernote.min.js') }}"></script>
    <!--select js-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!--main/custom js-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>

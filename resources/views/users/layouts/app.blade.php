<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sistem Infromasi Sekolah</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href='/img/logo_sma_dm[1].png' rel="icon">
    <link href='/img/logo_sma_dm[1].png'>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <!-- Poppins Font Only -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/selecao/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/selecao/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/selecao/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/selecao/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/selecao/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/selecao/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/selecao/assets/css/main.css') }}" rel="stylesheet">

    <!-- AOS: Animate On Scroll -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


    <!-- =======================================================
    * Template Name: Selecao
    * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">


    @include('users.layouts.components.header')

    <main class="main">
        @yield('content')
    </main>

    @include('users.layouts.components.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/selecao/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/selecao/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/selecao/assets/js/main.js') }}"></script>

    <!-- jQuery dan plugin animasi angka -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/counterup2@1.0.4/dist/index.js"></script>

    <!-- AOS: Animate On Scroll -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</body>

</html>

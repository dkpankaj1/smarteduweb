<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">

    <meta name="title" content="{{ $setting->meta_title }}" />
    <meta name="keywords" content="{{ $setting->meta_keywords }}" />
    <meta name="description" content="{{ $setting->meta_description }}" />

    <meta name="author" content="https://github.com/dkpankaj1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'SmartEduWeb') - {{ $setting->brand_name }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $setting->favicon }}" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate/animate.min.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <style>
        .scrollable-notices {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>

<body>

    <!--=================================
    Header -->
    @include('website.layouts._header')
    <!--=================================
    Header -->

    {{ $slot }}

    <!--=================================
    Footer-->
    @include('website.layouts._footer')
    <!--=================================
    Footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/select2/select2.full.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiperanimation/SwiperAnimation.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jarallax/jarallax.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/shuffle/shuffle.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

</body>

</html>

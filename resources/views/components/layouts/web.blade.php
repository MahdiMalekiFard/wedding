<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wedding</title>
    <meta name="description" content="Ovation - Wedding & Event Photography HTML Template">
    <meta name="keywords" content="Ovation - Wedding & Event Photography HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Prompt:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Odometer -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    @livewireStyles
</head>

<body>
<!--********************************
       Code Start From Here
******************************** -->


<!-- Cursor -->
<div class="cursor"></div>
<div class="cursor-follower"></div>
<!-- Cursor End -->

<!--==============================
 Preloader
==============================-->
<div class="preloader ">
    <div class="preloader-inner">
        <img src="assets/img/logo-white.svg" alt="ovation">
        <span class="loader"></span>
    </div>
</div>

<!--==============================
Header Area
==============================-->
@include('components.layouts.web.partials.header')

{{ $slot }}

<!--==============================
    Footer Area
==============================-->
@include('components.layouts.web.partials.footer')

<!--********************************
        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<!--==============================
All Js File
============================== -->
<!-- Jquery -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Slick Slider -->
<script src="assets/js/slick.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Range Slider -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- odometer -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>

<!-- Isotope Filter -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- gsap -->
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>

<!-- Main Js File -->
<script src="assets/js/main.js"></script>
@livewireScripts
</body>

</html>

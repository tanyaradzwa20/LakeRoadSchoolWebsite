<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" dir="{{ $dir ?? 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lake Road
        PTA School</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/lake-road-school-logo.jpg')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.min.css')}}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/magnific-popup.css')}}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/metismenu.css')}}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.css')}}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('css')
</head>
<body class="page index-sc">
<x-header/>
<!-- content block -->
{{$slot}}

{{--@include($components . 'blog-sc', ['class' => 'v_1 rts-section-padding'])--}}

{{--@include($components . 'offcanvase-sc')--}}
<x-footer/>
<!-- rts backto top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- rts back to top end -->
<div id="anywhere-home" class=""></div>
<!-- scripts -->
<!-- jquery js -->

<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
<!-- bootstrap 5.0.2 -->
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<!-- jquery ui js -->
<script src="{{asset('assets/js/vendor/jquery-ui.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/vendor/waw.js')}}"></script>
<!-- mobile menu -->
<script src="{{asset('assets/js/vendor/metismenu.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/js/vendor/magnifying-popup.js')}}"></script>
<!-- swiper JS 10.2.0 -->
<script src="{{asset('assets/js/plugins/swiper.js')}}"></script>
<!-- counterup -->
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoint.js')}}"></script>
<!-- isotop mesonary -->
<script src="{{asset('assets/js/plugins/isotop.js')}}"></script>
<script src="{{asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/sticky-sidebar.js')}}"></script>
<script src="{{asset('assets/js/plugins/resize-sensor.js')}}"></script>
<script src="{{asset('assets/js/plugins/twinmax.js')}}"></script>
<!-- dymanic Contact Form -->
<script src="{{asset('assets/js/plugins/nice-select.min.js')}}"></script>
<!-- main Js -->
<script src="{{asset('assets/js/main.js')}}"></script>

@yield('script')
</body>
</html>



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
    <style>
        .cart-drawer {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100%;
            background: #fff;
            z-index: 1000;
            box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }
        .cart-drawer.show {
            right: 0;
        }
        .cart-drawer-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-drawer-header .title { margin-bottom: 0; }
        .cart-drawer-header .close-cart-drawer {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
        .cart-drawer-body {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .cart-items-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .cart-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f9f9f9;
            position: relative;
        }
        .cart-item-image {
            width: 80px;
            height: 80px;
            background: #f9f9f9;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cart-item-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        .cart-item-info {
            flex: 1;
        }
        .cart-item-info .title {
            font-size: 16px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .cart-item-info .price {
            color: var(--rt-primary, #890C25);
            font-weight: 700;
        }
        .remove-cart-item {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            transition: 0.3s;
        }
        .remove-cart-item:hover { color: var(--rt-primary, #890C25); }
        .cart-drawer-footer {
            padding: 30px 20px;
            background: #f9f9f9;
        }
        .cart-drawer-footer .total-area {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 700;
        }
        .cart-drawer-footer .cart-total-amount {
            color: var(--rt-primary, #890C25);
        }
        .full-btn { width: 100%; text-align: center; }

        .cart-toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #333;
            color: #fff;
            padding: 15px 25px;
            border-radius: 5px;
            z-index: 2000;
            transform: translateY(100px);
            transition: all 0.3s ease;
            opacity: 0;
        }
        .cart-toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        @media screen and (max-width: 480px) {
            .cart-drawer {
                width: 100%;
                right: -100%;
            }
        }
    </style>
    @yield('css')
</head>
<body class="page index-sc">
<x-header/>
<!-- content block -->
{{$slot}}

{{--@include($components . 'blog-sc', ['class' => 'v_1 rts-section-padding'])--}}

{{--@include($components . 'offcanvase-sc')--}}
    <x-footer/>
<x-canvas/>
    <!-- Cart Drawer -->
    <div id="cart-drawer" class="cart-drawer">
        <div class="cart-drawer-header">
            <h4 class="title">Your Cart</h4>
            <button class="close-cart-drawer"><i class="fa-regular fa-xmark"></i></button>
        </div>
        <div class="cart-drawer-body">
            <ul id="cart-items-list" class="cart-items-list">
                <!-- Cart items will be rendered here -->
            </ul>
        </div>
        <div class="cart-drawer-footer">
            <div class="total-area">
                <span>Total:</span>
                <span class="cart-total-amount">K0.00</span>
            </div>
            <div class="action-buttons">
                <a href="#" class="rts-theme-btn btn-arrow full-btn">Checkout <span><i class="fa-thin fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
    <!-- Cart Drawer End -->

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
<script src="{{asset('assets/js/cart.js')}}"></script>

@yield('script')
</body>
</html>



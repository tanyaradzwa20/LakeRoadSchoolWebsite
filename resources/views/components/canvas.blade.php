<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{asset('assets/images/logo/lake-road-school-logo.jpg')}}" alt="Lake Road PTA School-university">
        </div>
        <div class="inner-content">
            <p class="disc">
                Lake Road PTA School is a non-profit learning institution which is wholly owned by Government of the
                Republic of Zambia but is run by the Parent and Teachers Association's (PTA) Board of Governors as
                provided for under the Education Act CAP 134 of the Laws of Zambia
            </p>
            <!-- offcanvase banner -->
            <div class="offcanvase__banner mt--50">
                <div class="offcanvase__banner--content">
                    <img src="{{asset('assets/images/offcanvase.jpg')}}" alt="offcanvase">
                    <a href="{{ route('about') }}" class="rts-theme-btn">Apply Now</a>
                </div>
            </div>
            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="callto:+260211263361"><span><i class="fa-sharp fa-light fa-phone"></i></span> +260 211 263 361</a>
                    <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span> Corner of Lake Road & Leopards Hill Road, Woodlands, Lusaka, Zambia</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                    <li class="navigation__menu--item">
                        <a href="{{ route('index') }}"
                           class="navigation__menu--item__link">Home</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('about') }}" class="navigation__menu--item__link">About</a>
                    </li>
                    <li class="navigation__menu--item has-child has-arrow">
                        <a href="#" class="navigation__menu--item__link">Primary School</a>
                        <ul class="submenu sub__style">
                            <li><a href="{{route('curriculum',['primary'])}}">Curriculum</a>
                            </li>
                            <li><a href="{{route('curricular',['primary'])}}">Extra
                                    Curricular</a></li>
                            <li><a href="{{route('fees',['primary'])}}">Fees</a></li>
                            <li><a href="{{route('circulars',['primary'])}}">Circulars</a></li>
                            <li><a href="{{route('results',['primary'])}}">Results</a></li>
                            <li><a href="{{route('sen',['primary'])}}">SEN</a></li>
                            {{--                                                           <li><a href="#">Calendar</a></li>--}}
                            <li><a href="{{route('teachers',['primary'])}}">Teachers</a></li>
                            <li><a href="{{route('counselling')}}">Counselling</a></li>
                            <li><a href="{{route('gallery',['primary'])}}">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="navigation__menu--item has-child has-arrow">
                        <a href="#" class="navigation__menu--item__link">Secondary School</a>
                        <ul class="submenu sub__style">
                            <li><a href="{{route('curriculum',['secondary'])}}">Curriculum</a>
                            </li>
                            <li><a href="{{route('curricular',['secondary'])}}">Extra
                                    Curricular</a></li>
                            <li><a href="{{route('fees',['secondary'])}}">Fees</a></li>
                            <li><a href="{{route('gec',['secondary'])}}">GEC</a></li>
                            <li><a href="{{route('circulars',['secondary'])}}">Circulars</a>
                            </li>
                            <li><a href="{{route('results',['secondary'])}}">Results</a></li>
                            <li><a href="{{route('sen',['secondary'])}}">SEN</a></li>
                            <li><a href="{{route('teachers',['secondary'])}}">Teachers</a></li>
                            <li><a href="{{route('counselling')}}">Counselling</a></li>
                            <li><a href="{{route('gallery',['secondary'])}}">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('store') }}" class="navigation__menu--item__link">Store</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('alumni') }}" class="navigation__menu--item__link">Alumni</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('calender') }}" class="navigation__menu--item__link">Calender</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('contact') }}" class="navigation__menu--item__link">Contact
                            Us</a>
                    </li>
                </ul>
        </nav>

        <div class="offcanvase__info--content mt--30">
            <a href="callto:+260211263361"><span><i class="fa-sharp fa-light fa-phone"></i></span> +260 211 263 361</a>
            <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span> Corner of Lake Road & Leopards Hill Road, Woodlands, Lusaka, Zambia</a>
            <div class="offcanvase__info--content--social">
                <p class="title">Follow Us:</p>
                <div class="social__links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>

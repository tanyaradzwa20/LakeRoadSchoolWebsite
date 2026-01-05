<div class="header rts__header v__6 header-sc">
     <div class="container">
          <div class="row">
               <div class="col-lg-12">
                    <div class="rts__header__wrapper">
                         <div class="rts__logo">
                              <a href="/" class="rts__logo--link">
                                   <img src="{{asset('assets/images/logo/lake-road-school-logo.jpg')}}" alt="Lake Road School">
                              </a>
                         </div>
                         <div class="header__content">
                              <div class="header__content__top">
                                   <div class="header__content__top__left">
                                        <a href="#"><i class="fa-classic fa-light fa-location-dot"></i> {{ contactData()['address'] }}</a>
                                   </div>
                                   <div class="header__content__top__right">
                                        <div class="follow_us">
                                             <span>Like Us On Facebook-</span>
                                             <div>
                                                  <a href="https://www.facebook.com/LRPTAS" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                             </div>
                                        </div>
                                        <div class="header__right--item">
                                             <div id="search-btn" class="search__trigger">
                                                  <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                              </div>
                                              <div id="cart-trigger" class="cart__trigger" style="margin-left: 20px; cursor: pointer; position: relative;">
                                                  <i class="fa-regular fa-cart-shopping"></i>
                                                  <span class="cart-count" style="position: absolute; top: -10px; right: -10px; background: var(--rt-primary, #890C25); color: #fff; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 700;">0</span>
                                              </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="header__content__bottom">
                                   <div class="menu ">
                                       <div class="navigation">
                                           <nav class="navigation__menu">
                                               <ul>
                                                   <li class="navigation__menu--item">
                                                       <a href="{{ route('index') }}" class="navigation__menu--item__link">Home</a>
                                                   </li>
                                                   <li class="navigation__menu--item">
                                                       <a href="{{ route('about') }}" class="navigation__menu--item__link">About</a>
                                                   </li>
                                                   <li class="navigation__menu--item has-child has-arrow">
                                                       <a href="#" class="navigation__menu--item__link">Primary School</a>
                                                       <ul class="submenu sub__style">
                                                           <li><a href="{{route('curriculum',['primary'])}}">Curriculum</a></li>
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
                                                           <li><a href="{{route('curriculum',['secondary'])}}">Curriculum</a></li>
                                                           <li><a href="{{route('fees',['secondary'])}}">Fees</a></li>
                                                           <li><a href="{{route('gec',['secondary'])}}">GEC</a></li>
                                                           <li><a href="{{route('circulars',['secondary'])}}">Circulars</a></li>
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
                                                       <a href="{{ route('contact') }}" class="navigation__menu--item__link">Contact Us</a>
                                                   </li>
                                               </ul>
                                           </nav>
                                       </div>
                                   </div>
                                   <div class="humberger">
                                        <div id="menu-btn" class="menu__trigger">
                                             <img src="{{asset('assets/images/icon/bar__line__black.svg')}}" alt="bar">
                                         </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

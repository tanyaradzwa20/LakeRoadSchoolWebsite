<div class="header rts__header v__6 {{$class ?? '' }}">
     <div class="container">
          <div class="row">
               <div class="col-lg-12">
                    <div class="rts__header__wrapper">
                         <div class="rts__logo">
                              <a href="{{ route('index-sc') }}" class="rts__logo--link">
                                   <img src="{{asset('assets/images/logo/lake-road-school-logo.jpg')}}" alt="Lake Road School">
                              </a>
                         </div>
                         <div class="header__content">
                              <div class="header__content__top">
                                   <div class="header__content__top__left">
                                        <a href="#"><i class="fa-classic fa-light fa-location-dot"></i> Corner of Lake Road & Leopards Hill Road, Woodlands, Lusaka, Zambia</a>
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
                                             <div id="langSwitcher" class="lang__trigger">
                                                  <span class="selected__lang">En</span>
                                                  <i class="fa-light fa-globe"></i>
                                                  <div class="translate__lang">
                                                      <ul>
                                                          <li><a href="#" class="active">En</a></li>
                                                          <li><a href="#">Fr</a></li>
                                                          <li><a href="#">Sp</a></li>
                                                          <li><a href="#">Ru</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              
                                        </div>
                                   </div>
                              </div>
                              <div class="header__content__bottom">
                                   <div class="menu ">
                                        @include($elements . 'nav__sc')
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
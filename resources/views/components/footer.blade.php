
<!-- footer -->
<footer class="footer {{ $class ?? 'sc' }} pt--80 pb--80">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="footer__widget">
                    <div class="footer__widget--logo mb--20">
                        <a href="{{ route('index') }}"><img src="{{asset('assets/images/logo/lake-road-school-logo.jpg')}}" alt="Lake Road School" style="max-height: 80px;"></a>
                    </div>
                    <p class="footer__widget--description mb--20">
                        A perfect place for the education of any child. We are passionate about education and dedicated to providing high-quality learning for all students.
                    </p>
                    <div class="footer__widget--contact">
                        <p class="mb--10"><i class="fa-light fa-location-dot me-2"></i> {{ contactData()['address'] }}</p>
                        <p class="mb--10"><i class="fa-light fa-phone me-2"></i> <a href="tel:{{ str_replace(' ', '', contactData()['phone'][0]) }}">{{ contactData()['phone'][0] }}</a></p>
                        <p class="mb--10"><i class="fa-light fa-envelope me-2"></i> <a href="mailto:{{ contactData()['email'][0] }}">{{ contactData()['email'][0] }}</a></p>
                    </div>
                    <div class="footer__widget--social mt--20">
                        <ul class="social d-flex list-unstyled gap-3">
                            <li class="social__link"><a href="https://www.facebook.com/LRPTAS" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Our Campus</h6>
                    <div class="footer__widget--menu">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">about</a></li>
                            <li><a href="{{ route('about') }}">Campus Life</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('about') }}">about</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Information</h6>
                    <div class="footer__widget--menu">
                        <ul class="list-unstyled">
                            <li><a href="#}">Admission</a></li>
                            <li><a href="#">Tuition Fees</a></li>
                            <li><a href="#">about Results</a></li>
                            <li><a href="#">Special Needs (SEN)</a></li>
                            <li><a href="#">Circulars</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Newsletter</h6>
                    <p class="mb--20">Subscribe to get latest updates and news.</p>
                    <div class="subscription__form">
                        <form action="#" class="d-flex">
                            <input type="email" placeholder="Email Address" required class="form-control" style="border-radius: 5px 0 0 5px; height: 50px;">
                            <button type="submit" class="cta__button" style="border-radius: 0 5px 5px 0; height: 50px; padding: 0 20px;"><i class="fa-regular fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer copyright -->
<div class="copyright sc py-4" style="background: #002147; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white">Copyright &copy; {{ date('Y') }} Lake Road PTA School. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <div class="footer__widget--menu">
                    <ul class="list-unstyled d-inline-flex gap-3 mb-0">
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer copyright end -->


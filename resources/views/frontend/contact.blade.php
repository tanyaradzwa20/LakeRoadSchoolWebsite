<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="Contact Us" page="Contact" />

    <!-- rts contact info -->
    <section class="rts-contact-info rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--40">
                    <h2 class="rts__section--title text-capitalize">General Contact Information</h2>
                </div>
            </div>
            <div class="contact-information">
                <div class="row justify-content-md-start  justify-content-sm-center g-5">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-contact">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-map-location-dot"></i>
                                </div>
                                <p class="--p-m">
                                    {{ $data['address'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-contact">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-phone"></i>
                                </div>
                                <div class="method">
                                    @foreach($data['phone'] as $phone)
                                        <a href="tel:{{ str_replace(' ', '', $phone) }}" class="phone">{{ $phone }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-contact">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-envelope"></i>
                                </div>
                                <div class="method">
                                    @foreach($data['email'] as $email)
                                        <a href="mailto:{{ $email }}" class="email">{{ $email }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rts contact info end -->

    <!-- other contact method -->
    <div class="rts-campus-contact pb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <div class="row g-5">
                         <div class="col-lg-6">
                             <div class="contact-method__single h-100">
                                 <div class="contact-text">
                                     <h3 class="contact-title">Opening Hours</h3>
                                     @foreach($data['opening_hours'] as $hours)
                                         <p class="description">{{ $hours }}</p>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="contact-method__single h-100">
                                 <div class="contact-text">
                                     <h3 class="contact-title">Social Media</h3>
                                     <p class="description">Follow us on social media to stay updated with the latest news and events.</p>
                                     <div class="contact-link">
                                         <a href="https://www.facebook.com/LRPTAS" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
            <div class="contact-map mt--60">
                <iframe class="contact-map" src="{{ $data['map_link'] }}" style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- other contact method end -->
</x-app>

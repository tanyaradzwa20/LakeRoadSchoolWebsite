<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Circulars" page="Circulars" />

    <!-- circulars section -->
    <div class="rts-circulars-section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section mb--50">
                    <h3 class="rts-section-title">School Circulars</h3>
                    <p class="desc">
                        Stay updated with the latest news, events, and important announcements from Lake Road PTA School. Below are our recent circulars available for download.
                    </p>
                </div>
            </div>
            <div class="row g-5">
                @foreach($data as $circular)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="rts-single-service-one circular-card" style="height: 100%; border: 1px solid #eee; padding: 30px; border-radius: 10px; transition: all .3s;">
                            <div class="icon mb--20">
                                <img src="{{ asset('assets/images/logo/lake-road-school-logo.jpg') }}" alt="School Logo" style="max-height: 80px; width: auto;">
                            </div>
                            <div class="service-content">
                                <h4 class="title mb--15">{{ $circular['title'] }}</h4>
                                @if(!empty($circular['information']))
                                    <ul class="list-unstyled mb--20">
                                        @foreach($circular['information'] as $info)
                                            <li><i class="far fa-check-circle me-2" style="color: #007bff;"></i> {{ $info }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                @if($circular['download'])
                                    <a href="#" class="rts-nbg-btn btn-arrow">Download Circular <span><i class="fa-sharp fa-regular fa-arrow-down"></i></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- circulars section end -->

    <style>
        .circular-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .circular-card ul li {
            margin-bottom: 8px;
            font-size: 14px;
        }
        .circular-card .title {
            font-size: 20px;
            line-height: 1.4;
        }
    </style>

</x-app>

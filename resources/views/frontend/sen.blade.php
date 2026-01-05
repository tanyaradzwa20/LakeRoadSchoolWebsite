<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="{{ ucfirst($type) }} Special Education Needs (SEN)" page="SEN" />

    <!-- sen section -->
    <div class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">

                    <div class="mb--50">
                        <h3 class="rts-section-title">{{ $data['what_is_sen']['title'] }}</h3>
                        @foreach($data['what_is_sen']['content'] as $paragraph)
                            <p class="desc">{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="mb--50">
                        <h4 class="title">{{ $data['objectives']['title'] }}</h4>
                        @foreach($data['objectives']['content'] as $paragraph)
                            <p class="desc">{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="mb--50">
                        <h4 class="title">{{ $data['program_offered']['title'] }}</h4>
                        @foreach($data['program_offered']['content'] as $paragraph)
                            <p class="desc">{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="mb--50">
                        <h4 class="title">{{ $data['provides']['title'] }}</h4>
                        <ul class="list-unstyled">
                            @foreach($data['provides']['items'] as $item)
                                <li class="mb--10"><i class="far fa-check-circle me-2"></i> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb--50">
                        <h4 class="title">{{ $data['categories']['title'] }}</h4>
                        <p class="desc">{{ $data['categories']['description'] }}</p>
                        <ul class="list-unstyled">
                            @foreach($data['categories']['items'] as $item)
                                <li class="mb--10"><i class="far fa-dot-circle me-2"></i> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt--80">
                        <h5 class="title">{{ $data['fees']['title'] }}</h5>
                        <p class="rt-regular">{{ $data['fees']['content'] }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- sen section end -->


</x-app>

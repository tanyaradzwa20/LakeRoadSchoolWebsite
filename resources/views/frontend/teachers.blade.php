<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="Our {{ ucfirst($type) }} Teachers" page="Teachers" />

    <!-- teacher section -->
    <div class="rts-faculty rts-section-padding">
        <div class="container">
            <div class="row g-5 gallery-area">
                @foreach($data as $teacher)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="rts__single--member">
                            <div class="rts__single--member--thumb rounded-10">
                                <a href="{{ asset('assets/images/speaker/teacher__1.jpg') }}" class="view-btn">
                                    <img src="{{ asset('assets/images/speaker/teacher__1.jpg') }}" alt="{{ $teacher['name'] }}">
                                </a>
                            </div>
                            <div class="rts__single--member--meta">
                                <h5 class="rts__single--member--meta--title">
                                    {{ $teacher['name'] }}
                                </h5>
                                <span class="rts__single--member--meta--designation">
                                    {{ $teacher['position'] }}
                                </span>
                                @if(isset($teacher['qualification']))
                                    <p class="mb-0 mt-2" style="font-size: 0.85rem; line-height: 1.2;">
                                        <strong>Qualification:</strong> {{ $teacher['qualification'] }}
                                    </p>
                                @endif
                                @if(isset($teacher['subjects']))
                                    <p class="mb-0" style="font-size: 0.85rem; line-height: 1.2;">
                                        <strong>Subjects:</strong> {{ $teacher['subjects'] }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- teacher section end -->

</x-app>

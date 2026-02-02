<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="Photo Gallery" page="Gallery" />

    <!-- gallery section -->
    <div class="rts-gallery-area rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-button-group button-group rts-gallery-filter">
                        <button class="active" data-filter="*">Show All</button>
                        @php
                            $categories = collect($data)->pluck('category_name', 'category')->unique();
                        @endphp
                        @foreach($categories as $slug => $name)
                            <button data-filter=".{{ $slug }}">{{ $name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row g-5 gallery-grid gallery-area">
                @foreach($data as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 grid-item {{ $item['category'] }}">
                        <div class="rts-single-gallery">
                            <div class="gallery-image">
                                <a href="{{ asset('assets/images/gallery/' . $item['image']) }}">
                                    <img src="{{ asset('assets/images/gallery/' . $item['image']) }}" alt="{{ $item['title'] }}">
                                    <span class="view-btn">
                                        <i class="far fa-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="gallery-title">
                                <h5 class="title">{{ $item['title'] }}</h5>
                                <span>{{ $item['category_name'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- gallery section end -->

    @section('css')
    <style>
        .rts-gallery-filter {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        .rts-gallery-filter button {
            display: inline-block;
            max-width: max-content;
            padding: 12px 25px;
            border: 1px solid var(--rt-primary-2, #890C25);
            background: transparent;
            color: var(--rt-primary-2, #890C25);
            border-radius: 0;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .rts-gallery-filter button.active,
        .rts-gallery-filter button:hover {
            background: var(--rt-primary-2, #890C25);
            color: #fff;
        }
        .rts-single-gallery {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            background: #fff;
            transition: all 0.3s ease;
            height: 100%;
        }
        .rts-single-gallery:hover {
            transform: translateY(-10px);
        }
        .gallery-image {
            position: relative;
            overflow: hidden;
        }
        .gallery-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        .rts-single-gallery:hover .gallery-image img {
            transform: scale(1.1);
        }
        .view-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 50px;
            height: 50px;
            background: var(--rt-primary-2, #890C25);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
            z-index: 2;
        }
        .view-btn i {
            font-size: 20px;
        }
        .rts-single-gallery:hover .view-btn {
            transform: translate(-50%, -50%) scale(1);
        }
        .gallery-title {
            padding: 20px;
            text-align: center;
        }
        .gallery-title .title {
            margin-bottom: 5px;
            font-size: 1.25rem;
        }
        .gallery-title span {
            color: var(--rt-primary-2, #890C25);
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
        }
    </style>
    @endsection

    @section('script')
    <script>
        $(document).ready(function() {
            // Initialize Isotope
            var $grid = $('.gallery-grid').imagesLoaded(function() {
                $grid.isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.grid-item'
                    }
                });
            });

            // Filter items on button click
            $('.filter-button-group').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });

                // Active class change
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    @endsection

</x-app>

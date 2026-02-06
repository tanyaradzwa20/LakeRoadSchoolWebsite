<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Store" page="Store" />

    <!-- shop area start -->
    <div class="rts-shop-section rts-section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- sidebar -->
                <div class="col-lg-3">
                    <div class="rts-shop-sidebar">
                        <!-- single widget -->
                        <div class="rts-shop-widget search">
                            <h5 class="widget-title">Search Items</h5>
                            <form action="#">
                                <input type="text" placeholder="Search..." required>
                                <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <!-- single widget end -->

                        <!-- single widget -->
                        <div class="rts-shop-widget category">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="category-list">
                                <li><a href="#">All Items <span class="count">(12)</span></a></li>
                                <li><a href="#">School Uniforms <span class="count">(05)</span></a></li>
                                <li><a href="#">Sports Wear <span class="count">(03)</span></a></li>
                                <li><a href="#">Academic Items <span class="count">(04)</span></a></li>
                            </ul>
                        </div>
                        <!-- single widget end -->

                        <!-- single widget -->
                        <div class="rts-shop-widget price-filter">
                            <h5 class="widget-title">Filter by Price</h5>
                            <div class="price-range-slider">
                                <div id="slider-range" class="range-bar"></div>
                                <div class="price-input">
                                    <input type="text" id="amount" readonly>
                                    <button class="rts-theme-btn">Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- single widget end -->
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- product area -->
                <div class="col-lg-9">
                    <div class="rts-shop-product-wrapper">
                        <div class="shop-filter-top">
                            <p>Showing 1–9 of 12 results</p>
                            <div class="sorting-select">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Default sorting</option>
                                    <option value="1">Sort by popularity</option>
                                    <option value="2">Sort by average rating</option>
                                    <option value="3">Sort by latest</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-5">


                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="rts-product-one">
                                    @php
                                        $productId = strtolower(str_replace([' ', '(', ')'], ['-', '', ''], $product['name']));
                                    @endphp
                                    <div class="product-image">
                                        <a href="#"><img src="{{ asset('assets/images/store/'.$product['image']) }}" alt="product"></a>
                                        @if($product['badge'])
                                            <span class="badge">{{ $product['badge'] }}</span>
                                        @endif
                                        <div class="product-actions">
                                            <a href="#" class="action-btn add-to-cart-btn"
                                               data-id="{{ $productId }}"
                                               data-name="{{ $product['name'] }}"
                                               data-price="{{ $product['price'] }}"
                                               data-image="{{ asset('assets/images/store/'.$product['image']) }}">
                                                <i class="fa-regular fa-cart-shopping"></i>
                                            </a>
                                            <a href="#" class="action-btn"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" class="action-btn"><i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <span class="category">{{ $product['category'] }}</span>
                                        <a href="#"><h5 class="title">{{ $product['name'] }}</h5></a>
                                        <div class="price-area">
                                            <span class="price">{{ $product['price'] }}</span>
{{--                                            <span class="stock-amount">({{ $product['stock'] }} in stock)</span>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- pagination -->
                        <div class="row">
                            <div class="col-12">
                                <div class="rts-pagination-area mt--50">
                                    <ul class="pagination">
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- pagination end -->
                    </div>
                </div>
                <!-- product area end -->
            </div>
        </div>
    </div>
    <!-- shop area end -->

    <style>
        .rts-product-one {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            border: 1px solid #eee;
            margin-bottom: 30px;
        }
        .rts-product-one:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transform: translateY(-5px);
        }
        .rts-product-one .product-image {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 20px;
            background: #f9f9f9;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .rts-product-one .product-image img {
            max-height: 100%;
            object-fit: contain;
            transition: all 0.5s ease;
        }
        .rts-product-one:hover .product-image img {
            transform: scale(1.1);
        }
        .rts-product-one .product-image .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--rt-primary, #890C25);
            color: #fff;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        .rts-product-one .product-actions {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            transition: all 0.3s ease;
        }
        .rts-product-one:hover .product-actions {
            bottom: 20px;
        }
        .rts-product-one .action-btn {
            width: 40px;
            height: 40px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #333;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .rts-product-one .action-btn:hover {
            background: var(--rt-primary, #890C25);
            color: #fff;
        }
        .rts-product-one .product-content .category {
            font-size: 13px;
            color: #777;
            margin-bottom: 8px;
            display: block;
        }
        .rts-product-one .product-content .title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 700;
            transition: 0.3s;
        }
        .rts-product-one .product-content .title:hover {
            color: var(--rt-primary, #890C25);
        }
        .rts-product-one .price-area .price {
            font-size: 18px;
            font-weight: 700;
            color: var(--rt-primary, #890C25);
        }
        .rts-product-one .price-area .stock-amount {
            font-size: 13px;
            color: #777;
            margin-left: 10px;
        }

        /* Sidebar Styles */
        .rts-shop-sidebar .rts-shop-widget {
            margin-bottom: 40px;
            padding: 30px;
            background: #f9f9f9;
            border-radius: 10px;
        }
        .rts-shop-sidebar .widget-title {
            font-size: 20px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
            font-weight: 700;
        }
        .rts-shop-sidebar .search form {
            position: relative;
        }
        .rts-shop-sidebar .search input {
            width: 100%;
            height: 50px;
            padding: 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .rts-shop-sidebar .search button {
            position: absolute;
            right: 0;
            top: 0;
            width: 50px;
            height: 50px;
            background: var(--rt-primary, #890C25);
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
        }
        .rts-shop-sidebar .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .rts-shop-sidebar .category-list li {
            margin-bottom: 15px;
        }
        .rts-shop-sidebar .category-list li a {
            display: flex;
            justify-content: space-between;
            color: #555;
            font-weight: 500;
            transition: 0.3s;
        }
        .rts-shop-sidebar .category-list li a:hover {
            color: var(--rt-primary, #890C25);
        }

        .shop-filter-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 15px 20px;
            background: #f9f9f9;
            border-radius: 5px;
        }
        .shop-filter-top p { margin-bottom: 0; }

        .rts-pagination-area ul {
            display: flex;
            list-style: none;
            gap: 10px;
            justify-content: center;
        }
        .rts-pagination-area ul li a {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-weight: 600;
            transition: 0.3s;
        }
        .rts-pagination-area ul li a.active,
        .rts-pagination-area ul li a:hover {
            background: var(--rt-primary, #890C25);
            color: #fff;
            border-color: var(--rt-primary, #890C25);
        }
    </style>
</x-app>

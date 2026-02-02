<x-master>
    <style>
        /* Page background like screenshot */
        body {
            background-color: #f5f5f5;
        }

        .store-wrapper {
            padding: 40px 0;
        }

        .store-sidebar-card,
        .store-product-card {
            border-radius: 10px;
            border: 1px solid #eeeeee;
            background-color: #ffffff;
        }

        .store-sidebar-card .card-header,
        .store-sidebar-card .card-body {
            background-color: #ffffff;
        }

        .store-search-input {
            border-radius: 4px 0 0 4px;
            border-right: 0;
        }

        .store-search-btn {
            background-color: #c8102e; /* deep red like screenshot */
            border-color: #c8102e;
            border-radius: 0 4px 4px 0;
        }

        .store-filter-btn {
            background-color: #a70016;
            border-color: #a70016;
            color: #ffffff;
        }

        .store-filter-btn:hover {
            background-color: #8c0012;
            border-color: #8c0012;
            color: #ffffff;
        }

        .store-product-card {
            transition: box-shadow 0.2s ease, transform 0.2s ease;
        }

        .store-product-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transform: translateY(-3px);
        }

        .store-product-image {
            height: 210px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .store-product-placeholder {
            height: 210px;
            border-radius: 10px 10px 0 0;
            background-color: #f8f9fa;
        }

        .store-price-main {
            color: #c8102e;
            font-weight: 700;
            font-size: 1rem;
        }

        .store-price-old {
            text-decoration: line-through;
            color: #999999;
            margin-left: 8px;
            font-size: 0.875rem;
        }

        .store-badge-new,
        .store-badge-sale {
            position: absolute;
            top: 12px;
            left: 14px;
            padding: 3px 9px;
            border-radius: 30px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .store-badge-new {
            background-color: #ff4b4b;
            color: #ffffff;
        }

        .store-badge-sale {
            background-color: #c8102e;
            color: #ffffff;
        }

        .store-category-link a {
            color: #333333;
            text-decoration: none;
        }

        .store-category-link a:hover {
            color: #c8102e;
            text-decoration: underline;
        }

        .store-category-count {
            color: #999999;
            font-size: 0.85rem;
        }

        .store-section-title {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #777777;
            margin-bottom: 12px;
        }

        .store-divider {
            border-top: 1px solid #e6e6e6;
            margin: 10px 0 15px;
        }

        .store-sort-select {
            max-width: 180px;
        }

        .store-stock-text {
            color: #777777;
            font-size: 0.85rem;
        }
    </style>

    <div class="container store-wrapper">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-lg-3 mb-4">
                {{-- Search Items --}}
                <div class="card store-sidebar-card mb-4">
                    <div class="card-body">
                        <div class="store-section-title">Search Items</div>
                        <form method="GET" action="{{ route('store.index') }}">
                            <div class="input-group">
                                <input type="text"
                                       name="q"
                                       class="form-control store-search-input"
                                       placeholder="Search..."
                                       value="{{ request('q') }}">
                                <button class="btn store-search-btn" type="submit">
                                    <i class="bi bi-search text-white"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Categories --}}
                <div class="card store-sidebar-card mb-4">
                    <div class="card-body">
                        <div class="store-section-title">Categories</div>
                        <div class="store-divider"></div>
                        <ul class="list-unstyled mb-0">
                            @php
                                $totalCount = $categories->sum('products_count');
                            @endphp
                            <li class="d-flex justify-content-between align-items-center mb-2 store-category-link">
                                <a href="{{ route('store.index') }}"
                                   class="{{ !isset($category) ? 'fw-semibold' : '' }}">
                                    All Items
                                </a>
                                <span class="store-category-count">
                                    ({{ str_pad($totalCount, 2, '0', STR_PAD_LEFT) }})
                                </span>
                            </li>
                            @foreach($categories as $cat)
                                <li class="d-flex justify-content-between align-items-center mb-2 store-category-link">
                                    <a href="{{ route('store.category', $cat->slug) }}"
                                       class="{{ isset($category) && $category->id === $cat->id ? 'fw-semibold' : '' }}">
                                        {{ $cat->name }}
                                    </a>
                                    <span class="store-category-count">
                                        ({{ str_pad($cat->products_count, 2, '0', STR_PAD_LEFT) }})
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Filter by Price --}}
                <div class="card store-sidebar-card">
                    <div class="card-body">
                        <div class="store-section-title">Filter by Price</div>
                        <div class="store-divider"></div>
                        <form method="GET" action="{{ url()->current() }}">
                            {{-- keep search + sort on filter submit --}}
                            <input type="hidden" name="q" value="{{ request('q') }}">
                            <input type="hidden" name="sort" value="{{ request('sort') }}">

                            <div class="mb-3">
                                <label class="form-label">Min</label>
                                <input type="number" step="0.01" name="min_price"
                                       class="form-control"
                                       value="{{ request('min_price') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Max</label>
                                <input type="number" step="0.01" name="max_price"
                                       class="form-control"
                                       value="{{ request('max_price') }}">
                            </div>
                            <button class="btn store-filter-btn w-100" type="submit">
                                Filter
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Main content --}}
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="small text-muted">
                        @if($products->total() > 0)
                            Showing {{ $products->firstItem() }}–{{ $products->lastItem() }}
                            of {{ $products->total() }} results
                        @else
                            No results found
                        @endif

                        @isset($category)
                            in <strong>{{ $category->name }}</strong>
                        @endisset
                    </div>
                    <form method="GET" class="d-flex align-items-center">
                        {{-- preserve query & filters when sorting --}}
                        <input type="hidden" name="q" value="{{ request('q') }}">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">

                        <select name="sort"
                                class="form-select form-select-sm store-sort-select"
                                onchange="this.form.submit()">
                            <option value="">Default sorting</option>
                            <option value="price_asc" {{ request('sort')=='price_asc' ? 'selected':'' }}>
                                Price: low to high
                            </option>
                            <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected':'' }}>
                                Price: high to low
                            </option>
                            <option value="newest" {{ request('sort')=='newest' ? 'selected':'' }}>
                                Newest
                            </option>
                        </select>
                    </form>
                </div>

                <div class="row g-4">
                    @forelse($products as $product)
                        <div class="col-md-4">
                            <div class="store-product-card position-relative h-100">
                                {{-- Badges --}}
                                @if($product->is_new)
                                    <span class="store-badge-new">New</span>
                                @elseif($product->on_sale)
                                    <span class="store-badge-sale">Sale</span>
                                @endif

                                {{-- Image --}}
                                @if($product->image)
                                    <a href="{{ route('store.product.show', $product->slug) }}">
                                        <img src="{{ asset('storage/'.$product->image) }}"
                                             class="w-100 store-product-image"
                                             alt="{{ $product->name }}">
                                    </a>
                                @else
                                    <a href="{{ route('store.product.show', $product->slug) }}"
                                       class="d-block store-product-placeholder d-flex align-items-center justify-content-center">
                                        <span class="text-muted">Product</span>
                                    </a>
                                @endif

                                {{-- Body --}}
                                <div class="p-3 d-flex flex-column">
                                    <small class="text-muted">
                                        {{ $product->category->name ?? 'Uncategorized' }}
                                    </small>

                                    <a href="{{ route('store.product.show', $product->slug) }}"
                                       class="mt-1 mb-2 text-decoration-none text-dark">
                                        <div class="fw-semibold" style="min-height: 38px;">
                                            {{ $product->name }}
                                        </div>
                                    </a>

                                    <div class="mt-auto">
                                        <div class="store-price-main">
                                            K{{ number_format($product->display_price, 2) }}
                                            @if($product->on_sale && $product->sale_price)
                                                <span class="store-price-old">
                                                    K{{ number_format($product->price, 2) }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="store-stock-text">
                                            ({{ $product->stock }} in stock)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-light border text-center">
                                No products found. Please adjust your search or filters.
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="mt-4 d-flex justify-content-end">
                    {{ $products->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</x-master>

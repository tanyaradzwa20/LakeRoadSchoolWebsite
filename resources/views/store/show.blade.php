<x-master>
    <style>
        .store-detail-wrapper {
            padding: 40px 0;
        }

        .store-detail-card {
            border-radius: 10px;
            border: 1px solid #eeeeee;
            background-color: #ffffff;
        }

        .store-detail-price {
            color: #c8102e;
            font-weight: 700;
            font-size: 1.3rem;
        }

        .store-detail-price-old {
            text-decoration: line-through;
            color: #999999;
            margin-left: 10px;
        }

        .store-detail-badge {
            padding: 4px 10px;
            border-radius: 30px;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .store-detail-badge-new {
            background-color: #ff4b4b;
            color: #ffffff;
        }

        .store-detail-badge-sale {
            background-color: #c8102e;
            color: #ffffff;
        }
    </style>

    <div class="container store-detail-wrapper">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card store-detail-card p-4">
                    <div class="row g-4">
                        <div class="col-md-5">
                            @if($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}"
                                     alt="{{ $product->name }}"
                                     class="img-fluid rounded">
                            @else
                                <div class="d-flex align-items-center justify-content-center border rounded"
                                     style="height:260px;background:#f8f9fa;">
                                    <span class="text-muted">Product Image</span>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-7">
                            <div class="d-flex align-items-center mb-2">
                                @if($product->is_new)
                                    <span class="store-detail-badge store-detail-badge-new me-2">New</span>
                                @endif
                                @if($product->on_sale)
                                    <span class="store-detail-badge store-detail-badge-sale">Sale</span>
                                @endif
                            </div>

                            <h3 class="mb-1">{{ $product->name }}</h3>
                            <div class="text-muted mb-3">
                                {{ $product->category->name ?? 'Uncategorized' }}
                            </div>

                            <div class="mb-3">
                                <span class="store-detail-price">
                                    K{{ number_format($product->display_price, 2) }}
                                </span>
                                @if($product->on_sale && $product->sale_price)
                                    <span class="store-detail-price-old">
                                        K{{ number_format($product->price, 2) }}
                                    </span>
                                @endif
                            </div>

                            <div class="mb-3 text-muted">
                                {{ $product->stock }} in stock
                            </div>

                            <p class="mb-4">
                                {{ $product->description ?: 'No description available for this product.' }}
                            </p>

                            {{-- Placeholder for "Add to Cart" / "Buy" button --}}
                            <button class="btn store-filter-btn px-4" type="button" disabled>
                                Add to Cart (demo)
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>

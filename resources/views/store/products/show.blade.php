<x-master>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Product Details</h5>
                    <div class="d-flex gap-2">
                        <a href="{{ route('products.index') }}" class="btn btn-light">Back</a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            @if($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}"
                                     alt="{{ $product->name }}"
                                     class="img-fluid rounded">
                            @else
                                <div class="d-flex align-items-center justify-content-center border rounded"
                                     style="height:180px;background:#f8f9fa;">
                                    <span>No Image</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $product->name }}</h4>
                            <p class="mb-1">
                                <strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}
                            </p>
                            <p class="mb-1">
                                <strong>Price:</strong> K{{ number_format($product->price, 2) }}
                            </p>
                            <p class="mb-1">
                                <strong>Sale Price:</strong>
                                @if($product->on_sale && $product->sale_price)
                                    K{{ number_format($product->sale_price, 2) }}
                                @else
                                    -
                                @endif
                            </p>
                            <p class="mb-1">
                                <strong>Stock:</strong> {{ $product->stock }}
                            </p>
                            <p class="mb-1">
                                <strong>Flags:</strong>
                                @if($product->is_new)
                                    <span class="badge bg-info">New</span>
                                @endif
                                @if($product->on_sale)
                                    <span class="badge bg-danger">Sale</span>
                                @endif
                                @if(!$product->is_new && !$product->on_sale)
                                    <span class="text-muted">None</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <hr>

                    <dl class="row mb-0">
                        <dt class="col-sm-3">Description</dt>
                        <dd class="col-sm-9">{{ $product->description ?: 'N/A' }}</dd>

                        <dt class="col-sm-3">Slug</dt>
                        <dd class="col-sm-9">{{ $product->slug }}</dd>

                        <dt class="col-sm-3">Created By</dt>
                        <dd class="col-sm-9">
                            {{ $product->creator->first_name ?? '' }} {{ $product->creator->last_name ?? '' }}
                        </dd>

                        <dt class="col-sm-3">Last Updated By</dt>
                        <dd class="col-sm-9">
                            {{ $product->lastModifier->first_name ?? '' }} {{ $product->lastModifier->last_name ?? '' }}
                        </dd>

                        <dt class="col-sm-3">Created At</dt>
                        <dd class="col-sm-9">{{ $product->created_at?->format('d M Y H:i') }}</dd>

                        <dt class="col-sm-3">Updated At</dt>
                        <dd class="col-sm-9">{{ $product->updated_at?->format('d M Y H:i') }}</dd>
                    </dl>
                </div>

            </div>
        </div>
    </div>
</x-master>

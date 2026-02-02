<x-master>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Edit Store Product</h5>
                    <div>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('products.update', [$product->id]) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name', $product->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Category <span class="text-danger">*</span></label>
                                <select name="category_id"
                                        class="form-select @error('category_id') is-invalid @enderror"
                                        required>
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Price (K) <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="price"
                                       class="form-control @error('price') is-invalid @enderror"
                                       value="{{ old('price', $product->price) }}" required>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" name="stock"
                                       class="form-control @error('stock') is-invalid @enderror"
                                       value="{{ old('stock', $product->stock) }}">
                                @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image"
                                       class="form-control @error('image') is-invalid @enderror"
                                       accept="image/*">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if($product->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/'.$product->image) }}"
                                             alt="{{ $product->name }}"
                                             style="width:80px;height:80px;object-fit:cover;border-radius:4px;">
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description"
                                          class="form-control @error('description') is-invalid @enderror"
                                          rows="3">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="is_new"
                                           id="isNew"
                                        {{ old('is_new', $product->is_new) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isNew">Mark as New</label>
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="on_sale"
                                           id="onSale"
                                        {{ old('on_sale', $product->on_sale) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="onSale">On Sale</label>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3" id="salePriceWrapper"
                                 style="{{ old('on_sale', $product->on_sale) ? '' : 'display:none;' }}">
                                <label class="form-label">Sale Price (K)</label>
                                <input type="number" step="0.01" name="sale_price"
                                       class="form-control @error('sale_price') is-invalid @enderror"
                                       value="{{ old('sale_price', $product->sale_price) }}">
                                @error('sale_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="regenerate_slug"
                                           id="regenerateSlug">
                                    <label class="form-check-label" for="regenerateSlug">
                                        Regenerate slug from name
                                    </label>
                                    <div class="form-text">
                                        Current slug: <code>{{ $product->slug }}</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hstack gap-2 justify-content-end">
                            <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const onSaleCheckbox = document.getElementById('onSale');
            const salePriceWrapper = document.getElementById('salePriceWrapper');

            onSaleCheckbox.addEventListener('change', function () {
                salePriceWrapper.style.display = this.checked ? '' : 'none';
            });
        });
    </script>
</x-master>

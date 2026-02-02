<x-master>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Add Store Product</h5>
                    <div>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}" required>
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
                                            {{ old('category_id') == $cat->id ? 'selected' : '' }}>
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
                                       value="{{ old('price') }}" required>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" name="stock"
                                       class="form-control @error('stock') is-invalid @enderror"
                                       value="{{ old('stock', 0) }}">
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
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description"
                                          class="form-control @error('description') is-invalid @enderror"
                                          rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="is_new"
                                           id="isNew" {{ old('is_new') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isNew">Mark as New</label>
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="on_sale"
                                           id="onSale" {{ old('on_sale') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="onSale">On Sale</label>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3" id="salePriceWrapper"
                                 style="{{ old('on_sale') ? '' : 'display:none;' }}">
                                <label class="form-label">Sale Price (K)</label>
                                <input type="number" step="0.01" name="sale_price"
                                       class="form-control @error('sale_price') is-invalid @enderror"
                                       value="{{ old('sale_price') }}">
                                @error('sale_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="hstack gap-2 justify-content-end">
                            <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-success">Save Product</button>
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

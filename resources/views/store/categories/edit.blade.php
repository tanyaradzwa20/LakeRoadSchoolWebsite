<x-master>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Edit Store Category</h5>
                    <div>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('categories.update', [$category->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Category Name <span class="text-danger">*</span></label>
                            <input type="text" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $category->name) }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"
                                      class="form-control @error('description') is-invalid @enderror"
                                      rows="3">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="regenerate_slug"
                                   id="regenerateSlug">
                            <label class="form-check-label" for="regenerateSlug">
                                Regenerate slug from name
                            </label>
                            <div class="form-text">
                                Current slug: <code>{{ $category->slug }}</code>
                            </div>
                        </div>

                        <div class="hstack gap-2 justify-content-end">
                            <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-master>

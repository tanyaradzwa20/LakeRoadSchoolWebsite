<x-master>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Category Details</h5>
                    <div class="d-flex gap-2">
                        <a href="{{ route('categories.index') }}" class="btn btn-light">Back</a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>

                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9">{{ $category->name }}</dd>

                        <dt class="col-sm-3">Slug</dt>
                        <dd class="col-sm-9">{{ $category->slug }}</dd>

                        <dt class="col-sm-3">Description</dt>
                        <dd class="col-sm-9">{{ $category->description ?: 'N/A' }}</dd>

                        <dt class="col-sm-3">Products</dt>
                        <dd class="col-sm-9">{{ $category->products()->count() }}</dd>

                        <dt class="col-sm-3">Created By</dt>
                        <dd class="col-sm-9">
                            {{ $category->creator->first_name ?? '' }} {{ $category->creator->last_name ?? '' }}
                        </dd>

                        <dt class="col-sm-3">Last Updated By</dt>
                        <dd class="col-sm-9">
                            {{ $category->lastModifier->first_name ?? '' }} {{ $category->lastModifier->last_name ?? '' }}
                        </dd>

                        <dt class="col-sm-3">Created At</dt>
                        <dd class="col-sm-9">{{ $category->created_at?->format('d M Y H:i') }}</dd>

                        <dt class="col-sm-3">Updated At</dt>
                        <dd class="col-sm-9">{{ $category->updated_at?->format('d M Y H:i') }}</dd>
                    </dl>
                </div>

            </div>
        </div>
    </div>
</x-master>

<x-master>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">
                        {{ getCurrentInstitution()->name ?? '' }} Store Categories
                    </h5>
                    <div>
                        <a href="{{ route('categories.create') }}" class="btn btn-success">
                            Add New Category
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Products Count</th>
                            <th>Created By</th>
                            <th>Last Updated By</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration + ($categories->firstItem() - 1) }}</td>
                                <td>
                                    <a href="{{ route('categories.show', [$category->id]) }}">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($category->description, 60) }}</td>
                                <td>{{ $category->products()->count() }}</td>
                                <td>{{ $category->creator->first_name ?? '' }} {{ $category->creator->last_name ?? '' }}</td>
                                <td>{{ $category->lastModifier->first_name ?? '' }} {{ $category->lastModifier->last_name ?? '' }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('categories.show', [$category->id]) }}"
                                                   class="dropdown-item">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('categories.edit', [$category->id]) }}"
                                                   class="dropdown-item edit-item-btn text-primary">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="dropdown-item remove-item-btn"
                                                   data-href="{{ route('categories.destroy', [$category->id]) }}"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#confirmDeleteModal">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between">
                        <div class="dataTables_info"></div>
                        {{ $categories->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Generic confirm delete modal (reuse same id used in staff view if you already have one globally) --}}
    <div class="modal fade" id="confirmDeleteModal" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px!important;">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <div class="mt-4">
                        <h4 class="mb-3">Confirm Delete</h4>
                        <p class="text-muted mb-4">Are you sure you want to delete this category?</p>

                        <form id="deleteForm" method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <div class="hstack gap-2 justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-danger fw-medium"
                                   data-bs-dismiss="modal">
                                    <i class="ri-close-line me-1 align-middle"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-secondary col-4">
                                    <i class="ri-delete-bin-6-line me-1 align-middle"></i> Delete
                                </button>
                            </div>
                        </form>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const modal = document.getElementById('confirmDeleteModal');
                                modal.addEventListener('show.bs.modal', function (event) {
                                    const button = event.relatedTarget;
                                    const href = button.getAttribute('data-href');
                                    modal.querySelector('#deleteForm').setAttribute('action', href);
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>

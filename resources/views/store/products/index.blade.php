<x-master>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">
                        {{ getCurrentInstitution()->name ?? '' }} Store Products
                    </h5>
                    <div>
                        <a href="{{ route('products.create') }}" class="btn btn-success">
                            Add New Product
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Stock</th>
                            <th>Flags</th>
                            <th>Created By</th>
                            <th>Last Updated By</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->iteration + ($products->firstItem() - 1) }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('storage/'.$product->image) }}"
                                             alt="{{ $product->name }}"
                                             style="width:40px;height:40px;object-fit:cover;border-radius:4px;">
                                    @else
                                        <span class="badge bg-secondary">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('products.show', [$product->id]) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td>{{ $product->category->name ?? 'N/A' }}</td>
                                <td>K{{ number_format($product->price, 2) }}</td>
                                <td>
                                    @if($product->on_sale && $product->sale_price)
                                        K{{ number_format($product->sale_price, 2) }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    @if($product->is_new)
                                        <span class="badge bg-info">New</span>
                                    @endif
                                    @if($product->on_sale)
                                        <span class="badge bg-danger">Sale</span>
                                    @endif
                                </td>
                                <td>{{ $product->creator->first_name ?? '' }} {{ $product->creator->last_name ?? '' }}</td>
                                <td>{{ $product->lastModifier->first_name ?? '' }} {{ $product->lastModifier->last_name ?? '' }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('products.show', [$product->id]) }}"
                                                   class="dropdown-item">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products.edit', [$product->id]) }}"
                                                   class="dropdown-item edit-item-btn text-primary">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="dropdown-item remove-item-btn"
                                                   data-href="{{ route('products.destroy', [$product->id]) }}"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#confirmProductDeleteModal">
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
                        {{ $products->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmProductDeleteModal" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px!important;">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <div class="mt-4">
                        <h4 class="mb-3">Confirm Delete</h4>
                        <p class="text-muted mb-4">Are you sure you want to delete this product?</p>

                        <form id="productDeleteForm" method="POST" action="">
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
                                const modal = document.getElementById('confirmProductDeleteModal');
                                modal.addEventListener('show.bs.modal', function (event) {
                                    const button = event.relatedTarget;
                                    const href = button.getAttribute('data-href');
                                    modal.querySelector('#productDeleteForm').setAttribute('action', href);
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>

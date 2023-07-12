<div>
    @include('livewire.admin.brand.modal-form')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Brands Lists
                        <a href="" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModal">Add Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mt-4">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Slug</td>
                                <td>Category</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ ucfirst($brand->name) }}</td>
                                <td>{{ ucfirst($brand->slug) }}</td>
                                <td>
                                    @if ($brand->category)
                                    {{ ucfirst($brand->category->name) }}
                                    @else
                                    <span>No Category</span>
                                    @endif
                                </td>
                                <td>{{ $brand->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                <td>
                                    <a href="#" wire:click="editBrand({{ $brand->id }})" class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#editBrandModal">Edit</a>
                                    <a href="#" wire:click="deleteBrand({{ $brand->id }})" class="btn btn-sm btn-danger"
                                        class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#deleteBrandModal">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <span>No Data Found</span>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex float-end">
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.addEventListener('close-modal', event => {
        $('#addBrandModal').modal('hide');
        $('#editBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');
    });
</script>
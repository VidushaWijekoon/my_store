<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brands</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="storeBrand">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Select Category</label>
                        <select wire:model.defer="category_id" class="form-control form-control-sm">
                            <option>--Select Category--</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name
                                }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Brand Name</label>
                        <input type="text" wire:model.defer="name" class="form-control form-control-sm">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Brand Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Brand Name</label>
                        <input type="checkbox" wire:model.defer="status" /> Checked=Hidden UnChecked=Visible
                        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brands</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>

            <div wire:loading.remove class="">
                <form wire:submit.prevent="updateBrand">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="">Select Category</label>
                            <select wire:model.defer="category_id" class="form-control form-control-sm">
                                <option>--Select Category--</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name
                                    }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Brand Name</label>
                            <input type="text" wire:model.defer="name" class="form-control form-control-sm">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Brand Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Brand Name</label>
                            <input type="checkbox" wire:model.defer="status" /> Checked=Hidden UnChecked=Visible
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Update changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Brands</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>

            <div wire:loading.remove class="">
                <form wire:submit.prevent="destroyBrand">
                    <div class="modal-body">
                        <h4>Are you sure you want to delete this data</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
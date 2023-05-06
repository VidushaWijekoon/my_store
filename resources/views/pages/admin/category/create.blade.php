@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add Category
                    <a href="{{ route('category.create') }}"
                        class="btn btn-sm btn-warning text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('category.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Name">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm">
                            @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Slug">Slug</label>
                            <input type="text" name="slug" class="form-control form-control-sm">
                            @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Description">Description</label>
                            <textarea type="text" name="description" class="form-control form-control-sm"
                                rows="3"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Image">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm">
                            @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3 mt-4">
                            <label for="Staus">Status</label>
                            <input type="checkbox" name="status">
                            @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12">
                            <h6>SEO Tags</h6>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Meta_Title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control form-control-sm">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_keyboard">Meta Keyboard</label>
                            <textarea type="text" name="meta_keyboard" class="form-control form-control-sm"
                                rows="3"></textarea>
                            @error('meta_keyboard') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea type="text" name="meta_description" class="form-control form-control-sm"
                                rows="3"></textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-success float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
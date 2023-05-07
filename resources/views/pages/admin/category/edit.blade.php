@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Category
                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-warning text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $category->name }}"
                                class="form-control form-control-sm">
                            @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug }}"
                                class="form-control form-control-sm">
                            @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control form-control-sm"
                                rows="3"> {{ $category->description }} </textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control form-control-sm">
                            <img src="{{ asset('uploads/category/'. $category->image) }}" width="60px" height="60px"
                                alt="">
                            @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3 mt-4">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }}>
                            @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12">
                            <h6>SEO Tags</h6>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                class="form-control form-control-sm">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Keyboard</label>
                            <textarea type="text" name="meta_keyword" class="form-control form-control-sm"
                                rows="3"> {{ $category->meta_keyword }} </textarea>
                            @error('meta_keyboard') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea type="text" name="meta_description" class="form-control form-control-sm"
                                rows="3"> {{ $category->meta_description }} </textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-success float-end">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
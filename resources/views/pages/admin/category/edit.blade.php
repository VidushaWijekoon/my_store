@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category
                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-warning float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $category->name }}"
                                class="form-control form-control-sm" />
                            @error('name') <small class="text-danger"></small> @enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug }}"
                                class="form-control form-control-sm" />
                            @error('slug') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea type="text" name="description"
                                class="form-control form-control-sm">{{ $category->description }}</textarea>
                            @error('description') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm" />
                            <img src="{{ asset('uploads/category/' . $category->image) }}" alt=""
                                style="width: 60px; height: 60px">
                            @error('image') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }}
                            class="mx-2 mt-1" />
                            @error('status') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                class="form-control form-control-sm" />
                            @error('meta_title') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Meta keyword</label>
                            <input type="text" name="meta_keyword" value="{{ $category->meta_keyword }}"
                                class="form-control form-control-sm" />
                            @error('meta_keyword') <small class="text-danger"></small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Description</label>
                            <textarea type="text" name="meta_description"
                                class="form-control form-control-sm">{{ $category->meta_description }}</textarea>
                            @error('meta_description') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Upate</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
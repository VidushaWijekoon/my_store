@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-warning mb-2">
            {{ session('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Product
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-warning float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    <div class="">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/products/' . $product->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-tags-tab" data-bs-toggle="tab"
                                data-bs-target="#seo-tags-tab-pane" type="button" role="tab"
                                aria-controls="seo-tags-tab-pane" aria-selected="false">SEO Tags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                data-bs-target="#details-tab-pane" type="button" role="tab"
                                aria-controls="details-tab-pane" aria-selected="false">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product_images-tab" data-bs-toggle="tab"
                                data-bs-target="#product_images-tab-pane" type="button" role="tab"
                                aria-controls="product_images-tab-pane" aria-selected="false">Product Images</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="">Product Category</label>
                                <select name="category_id" id="" class="form-control form-control-sm form-select">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ?
                                        'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{ $product->name }}"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" value="{{ $product->slug }}"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label for="">Product Brand</label>
                                <select name="brand" id="" class="form-control form-control-sm form-select">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" {{ $brand->name == $product->brand ?
                                        'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea type="text" name="small_description" class="form-control form-control-sm"
                                    rows="3">{{ $product->small_description }}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control form-control-sm" rows="3">
                                    {{ $product->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="seo-tags-tab-pane" role="tabpanel"
                            aria-labelledby="seo-tags-tab" tabindex="0">

                            <div class="mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $product->meta_title }}"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label for="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" value="{{ $product->meta_keyword }}"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control form-control-sm"
                                    rows="3">{{ $product->meta_description }}</textarea>
                            </div>

                        </div>

                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel"
                            aria-labelledby="details-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="">Original Price</label>
                                <input type="number" name="original_price" value="{{ $product->original_price }}"
                                    class="form-control form-control-sm">

                            </div>
                            <div class="mb-3">
                                <label for="">Selling Price</label>
                                <input type="number" name="selling_price" value="{{ $product->selling_price }}"
                                    class="form-control form-control-sm">

                            </div>
                            <div class="mb-3">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}"
                                    class="form-control form-control-sm">

                            </div>
                            <div class="mb-3">
                                <label for="">Trending</label>
                                <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked' : '' }}>

                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }}>

                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="product_images-tab-pane" role="tabpanel"
                            aria-labelledby="product_images-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="">Product Images</label>
                                <input type="file" multiple name="image[]" class="form-control form-control-sm">
                            </div>
                            <div class="">
                                @if ($product->productImages)
                                <div class="row">
                                    @foreach ($product->productImages as $image)
                                    <div class="col-md-2">
                                        <img src="{{ asset($image->image) }}" alt="" style="width: 80px; height: 80px; "
                                            class="me-4 border">
                                        <a href="{{ url('admin/product-image/' . $image->id . '/delete') }}"
                                            class="d-block">Remove</a>
                                    </div>

                                    @endforeach
                                </div>
                                @else
                                <h5>No Image Found</h5>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update Product</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
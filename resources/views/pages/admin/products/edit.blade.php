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
                    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="color-tab" data-bs-toggle="tab"
                                data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab-pane"
                                aria-selected="false">Color</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade border p-3 mt-4 show active" id="home-tab-pane" role="tabpanel"
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
                                @error('name')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{ $product->name }}"
                                    class="form-control form-control-sm">
                                @error('name')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" value="{{ $product->slug }}"
                                    class="form-control form-control-sm">
                                @error('slug')<small>{{ $message }}</small> @enderror
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
                                @error('brand')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea type="text" name="small_description" class="form-control form-control-sm"
                                    rows="3">{{ $product->small_description }}
                                </textarea>
                                @error('small_description')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control form-control-sm" rows="3">
                                    {{ $product->description }}
                                </textarea>
                                @error('description')<small>{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3 mt-4" id="seo-tags-tab-pane" role="tabpanel"
                            aria-labelledby="seo-tags-tab" tabindex="0">

                            <div class="mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $product->meta_title }}"
                                    class="form-control form-control-sm">
                                @error('meta_title')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" value="{{ $product->meta_keyword }}"
                                    class="form-control form-control-sm">
                                @error('meta_keyword')<small>{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control form-control-sm"
                                    rows="3">{{ $product->meta_description }}</textarea>
                                @error('meta_description')<small>{{ $message }}</small> @enderror
                            </div>

                        </div>

                        <div class="tab-pane fade border p-3 mt-4" id="details-tab-pane" role="tabpanel"
                            aria-labelledby="details-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="">Original Price</label>
                                <input type="number" name="original_price" value="{{ $product->original_price }}"
                                    class="form-control form-control-sm">
                                @error('original_price')<small>{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Selling Price</label>
                                <input type="number" name="selling_price" value="{{ $product->selling_price }}"
                                    class="form-control form-control-sm">
                                @error('selling_price')<small>{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}"
                                    class="form-control form-control-sm">
                                @error('quantity')<small>{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Trending</label>
                                <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked' : '' }}>
                                @error('trending')<small>{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }}>
                                @error('status')<small>{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3 mt-4" id="product_images-tab-pane" role="tabpanel"
                            aria-labelledby="product_images-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="">Product Images</label>
                                <input type="file" multiple name="image[]" class="form-control form-control-sm">
                                @error('image')<small>{{ $message }}</small> @enderror
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

                        <div class="tab-pane fade border p-3 mt-4" id="color-tab-pane" role="tabpanel"
                            aria-labelledby="color-tab" tabindex="0">

                            <div class="mb-3">
                                <h4>Add Product Color</h4>
                                <label for="">Select Color</label>
                                <hr>
                                <div class="row">
                                    @forelse ($colors as $colorItem)
                                    <div class="col-md-3">
                                        <div class="p-2 border mb-3">
                                            Color: <input type="checkbox" name="colors[{{ $colorItem->id }}]"
                                                value="{{ $colorItem->id }}" />
                                            {{ $colorItem->name }}
                                            <br>
                                            Quantity: <input type="number" name="colorquantity[{{ $colorItem->id }}]"
                                                style="width: 70px; border: 1px soild black">
                                        </div>

                                    </div>
                                    @empty
                                    <span>No Colors Found</span>
                                    @endforelse
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Color Name</td>
                                            <td>Quantity</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->productColors as $prodColor)
                                        <tr class="prod-color-tr">
                                            <td>
                                                @if ($prodColor->color)
                                                {{ $prodColor->color->name }}
                                                @else
                                                <span>No Color Found</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="input-group mb-3" style="width: 150px">
                                                    <input type="text" value="{{ $prodColor->quantity }}"
                                                        class="productColorQuantity form-control form-control-sm">
                                                    <button type="button" value="{{ $prodColor->id }}"
                                                        class="updateProductColor btn btn-sm btn-primary text-white">Update</button>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" value="{{ $prodColor->id }}"
                                                    class="deleteProductColor btn btn-sm btn-danger text-white">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@section('scripts')
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.updateProductColor', function() {

            var product_id = "{{ $product->id }}";
            var prod_color_id = $(this).val();
            var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();

            if(qty <= 0){
                alert('Quantity is required');
                return false;
            }

            var data = {
                'product_id': product_id,
                'qty': qty
            };

            $.ajax({
                type: "POST",
                url: "admin/product-color/"+prod_color_id,
                data: "data",
                success: function (response) {
                    alert(response.message);
                }
            });
        });
    });
</script>
@endsection
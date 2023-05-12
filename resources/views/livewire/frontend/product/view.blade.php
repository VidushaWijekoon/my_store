<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if ($product->productImages)
                        <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
                        @else
                        <h5>No Image Added</h5>
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{$product->category->name}} / {{$product->name}} / HP Laptop
                        </p>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>
                        <div class="">

                            @if ($product->productColors->count() > 0) @if($product->productColors)
                            @foreach ($product->productColors as $colorItems)
                            <label for="" class="colorSelectionLabel" style="background: {{ $colorItem->color->code }}"
                                wire:click='colorSelected({{ $colorItem->id }})'>
                                {{ $colorItem->color->name }}
                            </label>
                            {{-- <input type="radio" name="colorItem" value="{{ $colorItem->id }}" /> --}}
                            {{ $colorItem->color->name }}
                            @endforeach
                            @endif
                            @else
                            @if($product->quantity)
                            <label class="btn btn-sm bg-success my-2 text-white text-capitalize">in stock</label>
                            @else
                            <label class="btn btn-sm bg-danger my-2 text-white text-capitalize">out of stock</label>
                            @endif
                            @endif
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                <input type="text" value="1" class="input-quantity" />
                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {{ !! $product->small_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ !! $product->small_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
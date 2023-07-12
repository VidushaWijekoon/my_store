<div class="row">
    <div class="col-md-3">
        @if ($category->brands)
        <div class="card">
            <div class="card-header">
                <h4>Brands</h4>
            </div>
            <div class="card-body">
                @foreach ($category->brands as $brandItem)
                <label for="" class="d-block"></label>
                <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->name }}" /> {{ $brandItem->name }}
                @endforeach
            </div>
        </div>
        @endif

        <div class="card mt-3">
            <div class="card-header">
                <h4>Price</h4>
            </div>
            <div class="card-body">
                <label for="" class="d-block"></label>
                <input type="radio" wire:model="priceInput" name="priceSort" value="high-to-low" /> Hight to Low

                <label for="" class="d-block"></label>
                <input type="radio" wire:model="priceInput" name="priceSort" value="low-to-high" /> Low to High
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            @forelse ($products as $productItem)
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-card-img">

                        @if ($productItem->quantity > 0)
                        <label class="stock bg-success">In Stock</label>
                        @else
                        <label class="stock bg-danger">Out of Stock</label>
                        @endif

                        @if ($productItem->productImages->count() > 0)
                        <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                            class="text-capitalize">
                            <img src="{{ asset($productItem->productImages[0]->image) }}"
                                alt="{{ $productItem->name }}">
                        </a>
                        @endif

                    </div>
                    <div class="product-card-body">
                        <p class="product-brand text-uppercase">{{ $productItem->brand }}</p>
                        <h5 class="product-name">
                            <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                                class="text-capitalize">
                                {{ $productItem->name }}
                            </a>
                        </h5>
                        <div>
                            <span class="selling-price">{{ $productItem->selling_price }}</span>
                            <span class="original-price">{{ $productItem->original_price }}</span>
                        </div>

                    </div>
                </div>
            </div>

            @empty
            <div class="col-md-12">
                <div class="p-2">
                    <span>Item {{ $category->name }} not available</span>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
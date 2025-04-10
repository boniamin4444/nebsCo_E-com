<div class="row mb-3">
    <div class="col-12">
        <h2 class="mb-4">Featured Products</h2>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm border-light">
                        <!-- Add a link around the image to navigate to the product details page -->
                        <a href="{{ route('product.details', $product->id) }}">
                            <img src="{{ $product->product_thumbnail }}" alt="{{ $product->name }}" style="width: 250px; height: 300px;" class="card-img-top">
                        </a>
                        <div class="card-body text-center">
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <p class="card-text">${{ number_format($product->regular_price, 2) }}</p>
                            <button class="btn btn-primary w-100 add-to-cart" data-product-id="{{ $product->id }}">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-8">
        <!-- You can add more content here if needed -->
    </div>
    <div class="col-md-4">
        <div class="bg-light p-3 rounded">
            <img src="{{ asset('images/furniturebanner.jpg')}}" alt="Discount Banner" class="img-fluid rounded" style="width: 100%">
            <p class="mb-0">Get 25% Discount over $200</p>
            <small class="text-muted">Valid for selected items. Terms and conditions apply.</small>
        </div>
    </div>
</div>

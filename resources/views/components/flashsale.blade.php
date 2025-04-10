<div class="row mb-3">
    <div class="col-12">
        <h2 class="mb-3">Flash Sale</h2>
        <div id="flashSaleCarouselNew" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                @foreach($products->chunk(4) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                        <div class="row g-3">
                            @foreach($chunk as $product)
                                <div class="col-6 col-md-3 text-center">
                                    <div class="card h-100 shadow-sm border-light">
                                        <a href="{{ route('product.details', $product->id) }}">
                                            <img src="{{ $product->product_thumbnail }}" alt="{{ $product->name }}" style="width: 250px; height: 300px;" class="card-img-top">
                                        </a>
                                        <div class="card-body p-3">
                                            <h6 class="card-title mb-1">Name: {{ $product->name }}</h6>
                                            <p>{{ $product->short_description }}</p>
                                            <p class="card-text mb-0">Price: ${{ number_format($product->regular_price, 2) }}</p>
                                            <button class="btn btn-primary w-100 add-to-cart " data-product-id="{{ $product->id }}"  >Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#flashSaleCarouselNew" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#flashSaleCarouselNew" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

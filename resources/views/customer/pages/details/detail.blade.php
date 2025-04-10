@extends('customer.layouts.app')

@section('styles')
    <style>
        .product-images img {
            max-width: 100%;
            height: 500px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 150px;
            cursor: pointer;
            
        }
        .product-details h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }
        .product-details .price {
            font-size: 1.2rem;
            color: #dc3545;
            margin-bottom: 1rem;
        }
        .product-details .old-price {
            font-size: 0.9rem;
            color: #6c757d;
            text-decoration: line-through;
            margin-left: 0.5rem;
        }
        .product-details .size-options button {
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            padding: 8px 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .product-details .color-options button {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin-right: 0.5rem;
            cursor: pointer;
        }
        .product-details .quantity-controls {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .product-details .quantity-controls button {
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .product-details .quantity-controls input {
            width: 50px;
            text-align: center;
            margin: 0 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .product-details .actions button {
            margin-right: 0.5rem;
        }

        /* Enhanced selected button styles for size */
        .product-details .size-options .size-btn.selected {
            background-color: #007bff; /* Intense selected color */
            color: #fff; /* White text */
            border: 2px solid #0056b3; /* Thicker and darker border */
            font-weight: bold; /* Make text bold */
            transform: scale(1.1); /* Slightly increase size */
        }

        /* Enhanced selected button styles for color */
        .product-details .color-options .color-btn.selected {
            border: 2px solid #007bff; /* Bright blue border for selection */
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.6); /* Blue glow effect */
            transform: scale(1.2); /* Slightly increase size */
        }

      
    </style>
@endsection

@section('content')

<div class="container mt-4">
    <div class="product-navigation">
        <a href="#">Home</a> <span>></span> <a href="#">Fashion</a> <span>></span> <a href="#">Hoodie</a>
    </div>

    <div class="row">
        <!-- Product Images -->
        <div class="col-md-6 product-images">
            <img src="{{ $product->product_thumbnail }}" alt="{{ $product->name }}" class="img-fluid main-image">
            <div class="row mt-2">
                @foreach($product->images as $image)
                    <div class="col-3">
                        <img src="{{ $image->image }}" alt="{{ $product->name }}" class="img-fluid small-image">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6 product-details">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->short_description }}</p>
            <p class="price">${{ number_format($product->regular_price, 2) }} <span class="old-price">${{ number_format($product->regular_price * 1.2, 2) }}</span></p>

            <!-- Size Options -->
            @if($product->sizes)
            <div class="product-sizes">
                <label for="size">Choose Size:</label>
                <div class="size-options">
                    @foreach(json_decode($product->sizes) as $size)
                        <button class="size-btn" data-size="{{ $size }}" onclick="selectSize(this)">{{ $size }}</button>
                    @endforeach
                </div>
            </div>
            @endif


@if($product->colors)
<div class="product-colors">
    <label for="color">Choose Color:</label>
    <div class="color-options">
        @foreach(json_decode($product->colors) as $color)
            <button 
                class="color-btn" 
                style="background-color: {{ $color }}" 
                data-color-name="{{ $color }}" 
                onclick="selectColor(this)">
            </button>
        @endforeach
    </div>
</div>
@endif

<!-- Hidden Input to store selected color name -->
<input type="hidden" id="selected-color" name="color">

            <!-- Quantity Controls -->
            <div class="quantity-controls mt-3">
                <label class="form-label me-2">Quantity</label>
                <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity('decrement')">-</button>
                <input type="text" class="form-control form-control-sm" value="1" aria-label="Quantity" id="quantity">
                <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity('increment')">+</button>
            </div>

            <!-- Actions -->
            <div class="actions mt-3">
                <button type="button" class="btn btn-success">Buy Now</button>
                <button type="button" class="btn btn-outline-primary add-to-cart" data-product-id="{{ $product->id }}">
                    <i class="fas fa-shopping-cart"></i> Add to cart
                </button>
            </div>

            <hr class="mt-4">

            <!-- Product Description Tabs -->
            <ul class="nav nav-tabs product-description-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#description">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#additional-info">Additional Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews (0)</a>
                </li>
            </ul>

            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="description">
                    <p>{{ $product->short_description }}</p>
                </div>
                <div class="tab-pane fade" id="additional-info">
                    <p>{{ $product->long_description }}</p>
                </div>
                <div class="tab-pane fade" id="reviews">
                    <p>No reviews yet.</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

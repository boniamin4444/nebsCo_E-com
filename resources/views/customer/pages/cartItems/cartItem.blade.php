@extends('customer.layouts.app')

@section('styles')
    <style>
        .cart-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item .form-check-input {
            margin-right: 1rem;
        }

        .cart-item .item-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            margin-right: 1rem;
        }

        .cart-item .item-details {
            flex-grow: 1;
        }

        .cart-item .item-name {
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 0.2rem;
        }

        .cart-item .item-options {
            font-size: 0.8rem;
            color: #777;
        }

        .cart-item .quantity-controls {
            display: flex;
            align-items: center;
        }

        .cart-item .quantity-controls button {
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 0.8rem;
        }

        .cart-item .quantity-controls input {
            width: 40px;
            text-align: center;
            margin: 0 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 0.9rem;
        }

        .cart-item .item-price {
            font-size: 0.9rem;
            font-weight: bold;
            margin-left: auto;
        }

        .cart-summary {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 0.25rem;
            border: 1px solid #eee;
        }

        .cart-summary h2 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .cart-summary .summary-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .cart-summary .summary-row.total {
            font-weight: bold;
            font-size: 1rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

       
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Cart</h1>
        <div class="row">
            <div class="col-md-8">
                @if ($cartItems->isEmpty())
                    <p>Your cart is empty.</p>
                @else
                    @foreach ($cartItems as $item)
                        <div class="cart-item">
                            {{-- Checkbox for item selection (you'll need JS for functionality) --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" id="item-{{ $item->id }}">
                                <label class="form-check-label" for="item-{{ $item->id }}"></label>
                            </div>

                            {{-- Product Image --}}
                            <img src="{{ $item->product->product_thumbnail }}" alt="{{ $item->product->name }}" class="item-image">

                            {{-- Item Details (Name and Options) --}}
                            <div class="item-details">
                                <div class="item-name">{{ $item->product->name }}</div>
                                <div class="item-options">
                                    @if ($item->color)
                                        {{ ucfirst($item->color) }} /
                                    @endif
                                    @if ($item->size)
                                        Size: {{ strtoupper($item->size) }}
                                    @endif
                                </div>
                            </div>

                            {{-- Quantity Controls --}}
                            <div class="quantity-controls">
                                <button class="btn btn-sm">-</button>
                                <input type="text" class="form-control form-control-sm" value="{{ $item->quantity }}" aria-label="Quantity">
                                <button class="btn btn-sm">+</button>
                            </div>

                            {{-- Item Price --}}
                            <div class="item-price">${{ number_format($item->quantity * $item->product->regular_price, 2) }}</div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="col-md-4">
                <div class="cart-summary">
                    <h2>Summary</h2>
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>${{ number_format($cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }), 2) }}</span>
                    </div>
                    <div class="summary-row">
                        <span>Discount</span>
                        <span>$0.00</span> {{-- You'll likely want to make this dynamic later --}}
                    </div>
                    <div class="summary-row total">
                        <span>Grand Total</span>
                        <span>${{ number_format($cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }), 2) }}</span>
                    </div>
                    <a href="{{ route('customer.checkout') }}" class="btn btn-success w-100">CheckOut</a>
                </div>
            </div>
        </div>

        {{-- Related Products Section (Currently Commented Out) --}}
        {{-- <section class="related-products mt-5">
            <h2>Related Products</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/200/eee/333?Text=Macbook+Air+M3" class="card-img-top" alt="Macbook Air M3">
                        <div class="card-body">
                            <h5 class="card-title">Macbook Air M3</h5>
                            <p class="card-text">$299.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/200/333/eee?Text=Basus+Headphone" class="card-img-top" alt="Basus Headphone">
                        <div class="card-body">
                            <h5 class="card-title">Basus Headphone</h5>
                            <p class="card-text">$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/200/808080/eee?Text=Denim+Women+jacket" class="card-img-top" alt="Denim Women jacket">
                        <div class="card-body">
                            <h5 class="card-title">Denim Women jacket</h5>
                            <p class="card-text">$25.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/200/6c757d/eee?Text=Double+Hoodie" class="card-img-top" alt="Double Hoodie">
                        <div class="card-body">
                            <h5 class="card-title">Double Hoodie</h5>
                            <p class="card-text">$99.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
@endsection

@section('scripts')
    {{-- Your JavaScript will go here for things like updating quantity, removing items, etc. --}}
@endsection
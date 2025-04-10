@extends('customer.layouts.app')

@section('styles')
    <style>
        .checkout-form label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.2rem;
        }

        .checkout-form .form-control {
            font-size: 0.9rem;
            border-radius: 0.25rem;
        }

        .order-summary {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 0.25rem;
            border: 1px solid #eee;
        }

        .order-summary h2 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .order-summary .item {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
        }

        .order-summary .item img {
            max-width: 70px;
            height: auto;
            margin-right: 1rem;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
        }

        .order-summary .item-details {
            flex-grow: 1;
        }

        .order-summary .item-details .item-name {
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 0.1rem;
        }

        .order-summary .item-details .item-meta {
            font-size: 0.8rem;
            color: #777;
        }

        .order-summary .summary-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .order-summary .summary-row.total {
            font-weight: bold;
            font-size: 1rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .shipping-method {
            margin-top: 1.5rem;
            padding: 1.5rem;
            border: 1px solid #eee;
            border-radius: 0.25rem;
            background-color: #fff;
        }

        .shipping-method h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .shipping-method .form-check {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .shipping-method .form-check-label span {
            color: #777;
            font-size: 0.8rem;
        }

        .shipping-cart-summary {
            margin-top: 1.5rem;
            padding: 1.5rem;
            border: 1px solid #eee;
            border-radius: 0.25rem;
            background-color: #f8f9fa;
        }

        .shipping-cart-summary h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .shipping-cart-summary .summary-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .shipping-cart-summary .summary-row.total {
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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                <li class="breadcrumb-item"><a href="#">Payment</a></li>
            </ol>
        </nav>

        <div class="row mt-3">
            <div class="col-md-7 checkout-form">
                <h2>Shipping Address</h2>
                <div class="mb-3">
                    <label for="shippingCountry" class="form-label">Shipping Country</label>
                    <select class="form-select form-select-sm" id="shippingCountry">
                        <option selected>Select Country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="BD">Bangladesh</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control form-control-sm" id="fullName" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Your email address">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control form-control-sm" id="phone" placeholder="Your phone number">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Choose City</label>
                    <select class="form-select form-select-sm" id="city">
                        <option selected>Select City</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Narayanganj">Narayanganj</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="streetAddress" class="form-label">Street Address</label>
                    <input type="text" class="form-control form-control-sm" id="streetAddress" placeholder="Your Street Address">
                </div>
                <div class="mb-3">
                    <label for="postalCode" class="form-label">Postal Code</label>
                    <input type="text" class="form-control form-control-sm" id="postalCode" placeholder="Your zip code">
                </div>

                <div class="shipping-method">
                    <h3>Shipping Method</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shippingOption" id="freeShipping" value="free" checked>
                        <label class="form-check-label" for="freeShipping">
                            Free Shipping
                            <span>0-15 business days</span>
                        </label>
                        <span class="text-muted float-end">$0</span>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shippingOption" id="regularShipping" value="regular">
                        <label class="form-check-label" for="regularShipping">
                            Regular Shipping
                            <span>5-10 business days</span>
                        </label>
                        <span class="text-muted float-end">$5.00</span>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shippingOption" id="expressShipping" value="express">
                        <label class="form-check-label" for="expressShipping">
                            Express Shipping
                            <span>1-3 business days</span>
                        </label>
                        <span class="text-muted float-end">$10.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-summary">
                <h2>Your Order</h2>
                @if ($cartItems->isNotEmpty())
                    @foreach ($cartItems as $item)
                        <div class="item">
                            <img src="{{ $item->product->product_thumbnail }}" alt="{{ $item->product->name }}">
                            <div class="item-details">
                                <div class="item-name">{{ $item->product->name }}</div>
                                <div class="item-meta">
                                    @if ($item->color) {{ ucfirst($item->color) }} / @endif
                                    @if ($item->size) Size: {{ strtoupper($item->size) }} @endif
                                </div>
                                <div class="item-meta">Qty: {{ $item->quantity }}</div>
                            </div>
                        </div>
                    @endforeach
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>${{ number_format($cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }), 2) }}</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span id="shipping-price">$0.00</span> {{-- Shipping price will be updated by JS based on selection --}}
                    </div>
                    <div class="summary-row">
                        <span>Amount</span>
                        <span>${{ number_format($cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }), 2) }}</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax</span>
                        <span>$0.00</span> {{-- You'll likely want to make this dynamic later --}}
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Apply promo code" aria-label="Promo code">
                            <button class="btn btn-outline-secondary" type="button">Apply</button>
                        </div>
                    </div>
                    <div class="summary-row total">
                        <span>Grand Total</span>
                        <span id="grand-total">${{ number_format($cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }), 2) }}</span>
                    </div>
                    <form action="{{ route('bkash-create-payment') }}" method="GET">
                        @csrf
                        <input type="hidden" name="amount" value="{{ $cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }) }}">
                        <input type="hidden" name="order_id" value="{{ uniqid() }}"> {{-- জাস্ট একটা ইউনিক অর্ডার আইডি জেনারেট করা হচ্ছে --}}
                        <button type="submit" class="btn btn-success btn-lg w-100 mt-3">Proceed Payment</button>
                    </form>
                @else
                    <p>No items in your order.</p>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('input[name="shippingOption"]').forEach(radio => {
            radio.addEventListener('change', function() {
                let shippingPrice = 0;
                if (this.value === 'regular') {
                    shippingPrice = 5.00;
                } else if (this.value === 'express') {
                    shippingPrice = 10.00;
                }

                document.getElementById('shipping-price').textContent = '$' + shippingPrice.toFixed(2);

                // Update Grand Total
                const subtotal = parseFloat("{{ $cartItems->sum(function ($item) { return $item->quantity * $item->product->regular_price; }) }}");
                const grandTotal = subtotal + shippingPrice;
                document.getElementById('grand-total').textContent = '$' + grandTotal.toFixed(2);
            });
        });
    </script>
@endsection
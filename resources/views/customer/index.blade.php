@extends('customer.layouts.app')

@section('styles')
    <style>
        /* Custom styles to approximate the layout */
        .top-categories .col {
            padding: 5px;
        }
        .top-categories .category-item {
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            height: 100px; /* Adjust as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
        }
        .top-categories .category-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.7; /* Adjust opacity for better text visibility */
        }
        .top-categories .category-item span {
            position: relative;
            z-index: 1;
            font-weight: bold;
        }
        .flash-sale-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        .flash-sale-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .featured-product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
        }
        .featured-product-item img {
            max-width: 80%;
            height: auto;
            margin-bottom: 5px;
        }
        .best-deals-new-arrival {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .deal-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        .deal-item img {
            max-width: 80%;
            height: auto;
            margin-bottom: 10px;
        }
        .discount-banner {
            background-color: #e9ecef;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }

        /* Styles for the mobile Top Category carousel */
        #topCategoriesCarousel .carousel-inner {
            display: flex;
        }

        #topCategoriesCarousel .carousel-item {
            display: block;
            flex-shrink: 0;
            width: 50%; /* Show two items at a time on smaller screens */
            padding-right: 10px;
        }

        @media (min-width: 576px) {
            #topCategoriesCarousel {
                display: none !important; /* Hide carousel on small screens and up */
            }
        }

        .top-categories.d-none {
            display: none !important; /* Ensure the grid view is hidden on extra-small */
        }

        @media (min-width: 576px) {
            .top-categories.d-none {
                display: flex !important; /* Show grid view on small screens and up */
            }
        }


        .category-item {
    overflow: hidden; /* To contain the overlay within the item */
}

.category-name-overlay {
    position: absolute;
    top: 5px; /* Adjust as needed for vertical positioning */
    left: 25%;
    transform: translateX(-50%); /* Center horizontally */
    font-size: 1.5em; /* Increased font size! Adjust this value as needed */
    font-weight: bold; /* Make the text bold */
    color: white; /* Or your desired text color */
    padding: 0px 10px; /* Adjust padding as needed */
    border-radius: 5px; /* Optional: Add rounded corners */
    z-index: 10; /* Ensure it's above the image */
}

.category-item img {
    display: block; /* Prevent extra space below the image */
    width: 100%; /* Make the image responsive within its container */
    height: auto;
}


        
    </style>

@endsection


@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <div class="bg-secondary text-white p-3 rounded">
                    <span> HEAD PHONE GEAR </span>
                    
                    <img src="{{ asset('images/headphone.jpg')}}" style="height: 470px" alt="Headphone" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row g-2">
                    <div class="col-6">
                        <div class="bg-info text-white p-3 rounded">
                            CLOTHING
                            <img src="{{ asset('images/clothing.jpg')}}" alt="Clothing" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-warning text-white p-3 rounded">
                            SHOES
                            <img src="{{ asset('images/shoes.jpg')}}" alt="Shoes" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="bg-success text-white p-3 rounded">
                            JACKET
                            <img src="{{ asset('images/jacket.jpg')}}" alt="Jacket" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.category')
        @include('components.flashsale')
        @include('components.featureproduct')
        @include('components.new&best')







       

       
    </div>
@endsection

@section('scripts')

@endsection
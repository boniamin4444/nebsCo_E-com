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

        
    </style>

@endsection


@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <div class="bg-secondary text-white p-3 rounded">
                    HEAD PHONE GEAR
                    <img src="https://via.placeholder.com/150/cccccc/ffffff?Text=Headphone" alt="Headphone" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row g-2">
                    <div class="col-6">
                        <div class="bg-info text-white p-3 rounded">
                            CLOTHING
                            <img src="https://via.placeholder.com/75/3399ff/ffffff?Text=Clothing" alt="Clothing" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-warning text-white p-3 rounded">
                            SHOES
                            <img src="https://via.placeholder.com/75/ffcc00/ffffff?Text=Shoes" alt="Shoes" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="bg-success text-white p-3 rounded">
                            JACKET
                            <img src="https://via.placeholder.com/150/00cc00/ffffff?Text=Jacket" alt="Jacket" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

        <div class="row mb-3">
            <div class="col-12">
                <h2>Top Category</h2>
                <div id="flashSaleCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
        
                        <div class="carousel-item active">
                            <div class="row g-3">
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/f08080/ffffff?Text=Furniture" alt="Furniture">
                                        <span>Furniture</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/dda0dd/ffffff?Text=Clothing" alt="Clothing">
                                        <span>Clothing</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/ffa07a/ffffff?Text=Gadget" alt="Gadget">
                                        <span>Gadget</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/87cefa/ffffff?Text=Jacket" alt="Jacket">
                                        <span>Jacket</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- next carousel-item -->
                        <div class="carousel-item">
                            <div class="row g-3">
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/f08080/ffffff?Text=Furniture" alt="Furniture">
                                        <span>Furniture</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/dda0dd/ffffff?Text=Clothing" alt="Clothing">
                                        <span>Clothing</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/ffa07a/ffffff?Text=Gadget" alt="Gadget">
                                        <span>Gadget</span>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="category-item text-center">
                                        <img src="https://via.placeholder.com/200/87cefa/ffffff?Text=Jacket" alt="Jacket">
                                        <span>Jacket</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                    <!-- carousel control -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#flashSaleCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#flashSaleCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        



        <div class="row mb-3">
            <div class="col-12">
                <h2>Flash Sale</h2>
                <div id="flashSaleCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-3">
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Laptop" alt="Laptop">
                                        <p>$1200.00</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Headphones" alt="Headphones">
                                        <p>$812.00</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Watch" alt="Watch">
                                        <p>$55.00</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Hoodie" alt="Hoodie">
                                        <p>$45.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-3">
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Another" alt="Another">
                                        <p>$99.00</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Item2" alt="Item 2">
                                        <p>$XX.XX</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Item3" alt="Item 3">
                                        <p>$YY.YY</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="flash-sale-item text-center">
                                        <img src="https://via.placeholder.com/150/eee/333?Text=Item4" alt="Item 4">
                                        <p>$ZZ.ZZ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#flashSaleCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#flashSaleCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        


        <div class="row mb-3">
            <div class="col-md-6">
                <div class="bg-light p-3 rounded">
                    <p>Best deals for you</p>
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/80/c0c0c0/ffffff?Text=Slippers" alt="Slippers" class="me-3">
                        <span>$12.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light p-3 rounded">
                    <p>New Arrival</p>
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/80/d3d3d3/ffffff?Text=AnotherSlipper" alt="Another Slipper" class="me-3">
                        <span>$12.00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <div class="bg-success text-white p-3 rounded text-center">
                    Get 25 % Discount over $ 200
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <h2>Featured Product</h2>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/fdd/333?Text=Glasses" alt="Glasses">
                            <p>Black Eye Glass</p>
                            <small>$75.00</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/add8e6/333?Text=Glasses" alt="Glasses">
                            <p>Blue Light Filter</p>
                            <small>$95.00</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/eee/333?Text=Glasses" alt="Glasses">
                            <p>Stylish Frame</p>
                            <small>$60.00</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="featured-product-item">
                            <img src="https://via.placeholder.com/100/faf0e6/333?Text=Glasses" alt="Glasses">
                            <p>Classic Design</p>
                            <small>$80.00</small>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="bg-light p-3 rounded">
                    <p class="mb-0">Get 25 % Discount over $ 200</p>
                    <small class="text-muted">Valid for selected items. Terms and conditions apply.</small>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/200/6495ed/ffffff?Text=Discount" alt="Discount Banner" class="img-fluid rounded">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Optional: Initialize the carousel if needed, though Bootstrap should handle it automatically
        // const topCategoriesCarousel = new bootstrap.Carousel(document.getElementById('topCategoriesCarousel'));
    </script>
@endsection
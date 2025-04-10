<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- in <head> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <style>
        .navbar-brand {
            font-weight: bold;
        }
        .navbar-nav .nav-item.dropdown:hover .nav-link {
            color: #007bff !important; /* Example hover color for dropdown */
        }
        .navbar-nav .nav-link:hover {
            color: #007bff !important; /* General hover color */
        }
        .navbar-nav .nav-link.active {
            color: #28a745 !important; /* Example active color */
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.7); /* Adjust default link color if needed */
        }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:active {
            color: rgba(0, 0, 0, 0.9); /* Adjust focus/active color if needed */
        }
        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure it stays on top */
        }
        .account-cart-spacing .nav-link {
            margin-left: 15px; /* Adjust spacing as needed */
        }
        .search-wrapper {
            flex-grow: 1; /* Make the search form take up available space */
            margin-right: 15px; /* Add some right margin to separate from account/cart */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg shadow mb-3 navbar-light bg-light navbar-fixed">
        <div class="container">
            <a class="navbar-brand" href="#">NebsC.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="#">Sub-category 1</a></li>
                            <li><a class="dropdown-item" href="#">Sub-category 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">All Categories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-heart me-1"></i>Wishlist</a>
                    </li>
                </ul>
                <form class="d-flex search-wrapper">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="d-flex account-cart-spacing">
                    <a class="nav-link" href="#"><i class="bi bi-person me-1"></i>Account</a>
                    <a class="nav-link" href="{{ route('cart.all')}}"><i class="bi bi-cart me-1"></i>Cart</a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
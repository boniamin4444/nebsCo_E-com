<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','nebs,Co')</title>
    @yield('styles')

    
</head>
<body>
    
    <header>
        @include('customer.layouts.header')
    </header>

    <div class="container" style="min-height: 800px;">
        @yield('content')
    </div>

    <footer>
        @include('customer.layouts.footer')
    </footer>


    @yield('scripts')

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       // Function to handle color selection
function selectColor(button) {
    // Remove selected class from all color buttons
    let colorButtons = document.querySelectorAll('.color-btn');
    colorButtons.forEach(function(btn) {
        btn.classList.remove('selected');
    });
    
    // Add selected class to the clicked button
    button.classList.add('selected');

    // Set selected color name
    let selectedColorName = button.getAttribute('data-color-name'); // Get color name from data attribute
    $('#selected-color').val(selectedColorName); // Store the selected color name in a hidden input field
}

// Event handler for adding item to cart
$(document).on('click', '.add-to-cart', function(e) {
    e.preventDefault();
    
    var productId = $(this).data('product-id');
    var quantity = $('#quantity').val() || 1; // Get quantity from the input field
    var size = $('.size-btn.selected').data('size'); // Get selected size
    var color = $('#selected-color').val(); // Get selected color name from hidden input

    // Send the data to the server
    $.ajax({
        url: "{{ route('add.to.cart') }}",
        method: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            product_id: productId,
            quantity: quantity,
            size: size || null,  // Only send size if selected
            color: color || null, // Only send color if selected
        },
        success: function(response) {
            if (response.success) {
                alert('Product added successfully');
            } else {
                alert('Failed to add product to cart: ' + response.message);
            }
        },
        error: function(xhr) {
            if (xhr.status === 422 && xhr.responseJSON.errors) {
                alert(xhr.responseJSON.message);
            } else if (xhr.status === 401) {
                // alert('Please login first to add product to cart!');
            } else {
                alert('An error occurred. Please try again.');
            }
        }
    });
});

// Function to handle quantity change
function updateQuantity(action) {
    let quantityInput = document.getElementById("quantity");
    let currentQuantity = parseInt(quantityInput.value);
    
    if (action === 'increment') {
        quantityInput.value = currentQuantity + 1;
    } else if (action === 'decrement' && currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}

// Function to handle size selection
function selectSize(button) {
    // Remove selected class from all size buttons
    let sizeButtons = document.querySelectorAll('.size-btn');
    sizeButtons.forEach(function(btn) {
        btn.classList.remove('selected');
    });
    // Add selected class to the clicked button
    button.classList.add('selected');
}

    </script>
    
</body>
</html>
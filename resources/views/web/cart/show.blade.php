@extends('web.layout')

@section('title', 'Your Cart')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/cart.css')}}">
@endsection
@section('content')

    @if ($products->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <div class="images">
            @foreach ($products as $product)
                <div class="box1" data-product-id="{{ $product->id }}">
                    <div class="image1">
                        <!-- Display product image here if available -->
                        <img src="{{ asset('uploads/products/'.$product->img) }}" alt="{{ $product->product_name }}">
                    </div>
                    <div class="wrap">
                        <!-- Quantity controls (implemented with JavaScript) -->
                        <button class="minus-btn">-</button>
                        <span class="num">1</span>
                        <button class="plus-btn">+</button>
                    </div>
                    <p>{{ $product->product_name }} - Price: ${{ $product->price }}</p>
                </div>
            @endforeach
        </div>

        <!-- Total Price Section -->
        <div class="line">
            <h1 class="text1">Total Price:</h1>
            <h1 class="text2" id="total-price">$0.00</h1>
        </div>

        <!-- Buy Button -->
        <input type="button" value="Buy" class="buy-btn" onclick="handleBuy()">
    @endif
@endsection

@section('scripts')
    <script>
        // JavaScript for quantity controls
        document.addEventListener('DOMContentLoaded', function() {
            const boxes = document.querySelectorAll('.box1');

            boxes.forEach(box => {
                const minusBtn = box.querySelector('.minus-btn');
                const plusBtn = box.querySelector('.plus-btn');
                const numSpan = box.querySelector('.num');
                const productId = box.getAttribute('data-product-id');

                // Decrease quantity
                minusBtn.addEventListener('click', function() {
                    let quantity = parseInt(numSpan.textContent);
                    if (quantity > 1) {
                        quantity--;
                        numSpan.textContent = quantity;
                        updateCart(productId, quantity); // Update cart data (e.g., send AJAX request)
                        updateTotalPrice(); // Update total price display
                    }
                });

                // Increase quantity
                plusBtn.addEventListener('click', function() {
                    let quantity = parseInt(numSpan.textContent);
                    quantity++;
                    numSpan.textContent = quantity;
                    updateCart(productId, quantity); // Update cart data (e.g., send AJAX request)
                    updateTotalPrice(); // Update total price display
                });
            });

            // Function to update cart (example: send AJAX request to update server-side cart data)
            function updateCart(productId, quantity) {
                // Send AJAX request to update cart data
                // Example:
                // fetch(`/cart/update/${productId}`, {
                //     method: 'POST',
                //     headers: {
                //         'Content-Type': 'application/json',
                //     },
                //     body: JSON.stringify({ quantity }),
                // })
                // .then(response => {
                //     // Handle response (e.g., update UI, show success message)
                // })
                // .catch(error => {
                //     console.error('Error updating cart:', error);
                // });
            }

            // Function to calculate and update total price display
            function updateTotalPrice() {
                const numElements = document.querySelectorAll('.num');
                let totalPrice = 0;

                numElements.forEach(numElement => {
                    const quantity = parseInt(numElement.textContent);
                    const price = parseFloat(numElement.closest('.box1').querySelector('p').textContent.match(/\d+\.\d+/)[0]);
                    totalPrice += quantity * price;
                });

                document.getElementById('total-price').textContent = '$' + totalPrice.toFixed(2);
            }

            // Function to handle Buy button click (placeholder)
            function handleBuy() {
                alert('Thank you for your purchase!');
                // Additional logic for completing the purchase (e.g., redirect to checkout page)
            }

            // Initial update of total price on page load
            updateTotalPrice();
        });
    </script>
@endsection

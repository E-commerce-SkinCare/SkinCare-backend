@extends('web.layout')

@section('title', 'Your Cart')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/cart.css')}}">
@endsection
@section('content')

@if ($products->isEmpty())
<p>Your cart is empty.</p>
@else
<div class="c">
    <div class="row1">
        @foreach ($products as $product)
        <div class="h1" data-product-id="{{ $product->id }}">
            <img class="photo1" Src="{{ asset('uploads/products/'.$product->img) }}" alt="{{ $product->product_name }}"><br>
            <div class="me">
                <p>{{ $product->product_name }} - Price: ${{ $product->price }}</p>
            </div>
            <div class="icon">
                <button id="minus"  class="fa-solid fa-circle-minus""></button>
                <span class="num">1</span>
                <button id="plus" class="fa-solid fa-circle-plus"></button>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="line">
    <h1 class="text1"> total of price :</h1>
    <h1 class="text2" id="total-price"> $0.00</h1>
</div>
<input type="button" value="Buy" class="buy-btn" onclick="handleBuy()">
@endif
@endsection
@section('scripts')
<script>
    // JavaScript for quantity controls
    document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.h1');

    items.forEach(item => {
        const minusBtn = item.querySelector('#minus');
        const plusBtn = item.querySelector('#plus');
        const numSpan = item.querySelector('.num');
        const price = parseFloat(item.querySelector('.me p').textContent.split('Price: $')[1]);
        const productId = item.getAttribute('data-product-id');

        // Decrease quantity
        minusBtn.addEventListener('click', function() {
            let quantity = parseInt(numSpan.textContent);
            if (quantity > 1) {
                quantity--;
                numSpan.textContent = quantity;
                updateCart(productId, quantity); // Update cart data
                updateTotalPrice(); // Update total price display
            }
        });

        // Increase quantity
        plusBtn.addEventListener('click', function() {
            let quantity = parseInt(numSpan.textContent);
            quantity++;
            numSpan.textContent = quantity;
            updateCart(productId, quantity); // Update cart data
            updateTotalPrice(); // Update total price display
        });
    });

    // Function to update cart (e.g., send AJAX request to update server-side cart data)
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
        const items = document.querySelectorAll('.h1');
        let totalPrice = 0;

        items.forEach(item => {
            const quantity = parseInt(item.querySelector('.num').textContent);
            const price = parseFloat(item.querySelector('.me p').textContent.split('Price: $')[1]);

            if (!isNaN(price)) {
                totalPrice += quantity * price;
            }
        });

        document.getElementById('total-price').textContent = '$' + totalPrice.toFixed(2);
    }

    // Initial update of total price on page load
    updateTotalPrice();
});

</script>
@endsection

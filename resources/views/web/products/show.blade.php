@extends('web.layout')

@section('title', 'Show Product')

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/showprod.css') }}">
@endsection

@section('content')
    <div class="im"></div>

    <div class='imggg'><img class='imgg' src="{{ asset('uploads/products/'.$product->img) }}" alt="{{$product->product_name }}"></div>
    <div class="txt">
        <h6 class="h6">{{ $product->product_name }}</h6>
        <h5 class="h5">Price: ${{ $product->price }}</h5>
    </div>
    <div class="add">
        <!-- Form to submit product ID when Add to Cart is clicked -->
        <form action="{{ url("/cart/add/$product->id") }}" method="POST">
            @csrf
            <button type="submit"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Add To Cart</button>
        </form>
    </div>
    <div class="prag">
        <h1 class="h1">Description</h1>
        <p class="content">
            {{ $product->description }}
        </p>
    </div>
@endsection

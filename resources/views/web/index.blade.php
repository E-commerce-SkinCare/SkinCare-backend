@extends('web.layout')
@section('title')
Home page
@endsection
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/index.css')}}">
@endsection
@section('content')

<div class="di"> </div>
<div class="h">
    <h1>skin care </h1>
    <div class="im"> <img src="{{asset('web/img/home.png')}}" alt="home"></div>
</div>
<div class="p">
    <p>
        External beauty is important,but know that
        you are <br>always beautiful and we are
        here to help you maintain<br>this beauty</p>

</div>

<div class="c">
    <div class="row1">
    @foreach($products as $product)
        <div class="h1"><img class="photo1" src="{{ asset('uploads/products/' . $product->img) }}" alt="{{ $product->product_name }}"><br>
            <div class="me">
                <a class="productName" href="{{url("/show/product/{$product->id}")}}"><p><b>{{$product->product_name}}</a><br> price:{{ $product->price }}$ </b>
                </p>
                <form action="{{ url("/cart/add/$product->id") }}" method="POST">
                    @csrf
                    <button id="cart" type="submit" class="fa-solid fa-cart-shopping"></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@extends('web.layout')
@section('title')
Cash
@endsection
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/visa.css')}}">
@endsection
@section('content')
<h1 class="h1">Add a Card</h1>
    <div class="info">
        <div class="box">
            <input class="number" type="text" placeholder="Card number">
            <input class="date" type="date" placeholder="Expiry(MM/YY)">
            <input class="tel" type="tel" placeholder="CVV">
        </div>
        <div class="box2">
            <input type="text" placeholder="Namae of card">
            <input type="text" placeholder="Your Governrate">
            <input type="text" placeholder="Your address">
            <input type="text" placeholder="Phone number">
        </div>
    </div>
    <button >Done</button>
@endsection

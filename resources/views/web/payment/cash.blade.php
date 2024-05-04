@extends('web.layout')
@section('title')
Cash
@endsection
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/cash.css')}}">
@endsection
@section('content')
<h1 class="h1">Payment on receipt</h1>
<div class="info">
    <input type="text" placeholder="Your Governrate">
    <input type="text" placeholder="Your address">
    <input type="text" placeholder="phone number">
    <button >Done</button>
</div>
@endsection

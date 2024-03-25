<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{url('logout')}}">
        @csrf
        <input type="submit" value="logout">
    </form>
</body>

</html>
@extends('web.layout')
@section('title')
sign in
@endsection
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/home.css')}}">
@endsection
@section('content')

<div class="di"> </div>
    <div class="h">
        <h1>skin care </h1>
        <div class="im"> <img src="image-png.png" alt=""></div>
    </div>
    <div class="p">
        <p>
            External beauty is important,but know that
            you are <br>always beautiful and we are
            here to help you maintain<br>this beauty</p>
    </div>

    <div class="c">
        <div class="row1">
            <div class="h1"><img class="photo1" src="photo1.jpg" alt=""><br>
                <div class="me"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div>
            </div>
            <div class="h2"> <img class="photo2" src="photo2.jpg" alt="">
                <div class="me1"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div>
            </div>
        <div><img class="photo3" src="photo3.jpg" alt="">
            <div class="me2"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div>
        </div>
        <div class="row3"><div><img class="photo4" src="ph6.jpg" alt="">
            <div class="me3"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div></div>
            <div><img class="photo5" src="ph4.jpg" alt="">
            <div class="me4"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div></div>
            <div><img class="photo6" src="phh5.jpg" alt="">
            <div class="me5"><p><b>Product<br>  X$ </b> <i class="fa-solid fa-cart-shopping"></i></p> </div></div>

    </div>

@endsection

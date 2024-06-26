@extends('web.layout')
@section('title')
    sign up
@endsection
@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/auth.css')}}">
@endsection
@section('content')
    <form id="form" method="post" action="{{url('register')}}" class="aa">
        @csrf
        <h1>
            <b> New account</b><br>
            @include('web.inc.message')
        </h1>
        <input id="email" type="name" name="name" placeholder=" Name"> <br>
        <input id="email" type="email" name="email" placeholder=" Email"><br>
        <input id="Password" type="password" name="password" placeholder=" Password"><br>
        <input id="Password" type="password" name="password_confirmation" placeholder=" Confirm Password">
        <div id="button">
            <button  id="signInButton" type="submit" onclick="">Create Account</button></div>
        </div>
    </form>
@endsection

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
        </h1>
        <input id="text" type="name" name="name" placeholder=" Name"> <br>
        <input id="Email" type="email" name="email" placeholder=" Email"><br>
        <input id="Password" type="password" name="password" placeholder=" Password"><br>
        <input id="Confirm Password" type="password" name="password_confirmation" placeholder=" Confirm Password">
        <div id="button">
            <button  id="signInButton" type="submit" onclick="">Create Account</button></div>
        </div>
    </form>
@endsection

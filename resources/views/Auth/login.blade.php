@extends('web.layout')
@section('title')
    sign in
@endsection
@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/auth.css')}}">
@endsection
@section('content')
    <form method="POST" action="{{url('login')}}" class="aa">
        @csrf
        <h1><b>Sign In</b></h1>
        <input id="email" type="email" name="email" placeholder="  email"><br>
        <input id="password" type="password" name="password" placeholder="  password"><br>
        <div id="button">
            <button id="signInButton" type="submit">Sign in</button>
            <button id="newAccountButton" name="newAccount">New Account</button>
        </div>
    </form>
@endsection

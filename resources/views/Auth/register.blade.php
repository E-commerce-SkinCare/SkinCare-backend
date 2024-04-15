@extends('web.layout')


@section('title')
    Register page
@endsection

@section('content')
    <div id="signInContainer">
        <div id="signInText">Register</div>

        <div id="formContainer">
            <form method="POST" action="{{url('register')}}">
                @csrf
            <div class="inputContainer">
                <label for="name" class="inputLabel">Name</label>
                <input id="name" type="text" name="name" placeholder="Name">
            </div>

            <div class="inputContainer">
                <label for="email" class="inputLabel">Email</label>
                <input id="email" type="email" name="email" placeholder="Email">
            </div>

            <div class="inputContainer">
                <label for="password" class="inputLabel">Password</label>
                <input id="password" type="password" name="password" placeholder="Password">
            </div>

            <div class="inputContainer">
                <label for="password_confirmation" class="inputLabel">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <div class="buttonContainer">
                <button id="signInButton" type="submit">Register</button>
            </div>
            </form>
        </div>
    </div>

@endsection


@extends('web.layout')
@section('title')
Profile
@endsection
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('web/css/profile.css')}}">
@endsection
@section('content')
<div class="carry">
            <h1 class="sen"> Account profile</h1>
            <div class="content1">
                <div class="name">
                    <h4>Name</h4>
                    <h4>{{$user->name}}</h4>
                </div>
                <div class="email">
                    <h4>Email</h4>
                    <h4>{{$user->email}}</h4>
                </div>
            </div>
            <h3 class="account"> Account</h3>
            <div class="content2">
                <div><h4>Change password</h4></div>
            </div>
            <div class="content3">
                <div><a class="delete-user-btn" href="{{url("/delete-account/$user->id")}}"><h4>Delete my account</h4></a></div>
            </div>

            </div>
        </div>
@endsection

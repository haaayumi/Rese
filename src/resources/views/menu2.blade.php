@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu1.css') }}" />
@endsection

@section('icon')
<a href="/" class="return__btn"><i class="fa-solid fa-xmark"></i></a>
@endsection

@section('content')
<ul class="menu__list">
  <div class="menu__container">
    <il class="menu"><a href="/" class="home">Home</a></il>
  </div>
  <div class="menu__container">
    <il class="menu"><a href="" class="register">Register</a></il>
  </div>
  <div class="menu__container">
    <il class="menu"><a href="" class="login">Login</a></il>
  </div>
</ul>
@endsection

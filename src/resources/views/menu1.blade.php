@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu1.css') }}" />
@endsection

@section('icon')
<a href="/" class="return__btn"><i class="fa-solid fa-xmark"></i></a>
@endsection

@section('content')
<ul class="menu__list">
  @if (Auth::check())
  <div class="menu__container">
    <il class="menu"><a href="/" class="home">Home</a></il>
  </div>
  <form action="/logout" class="form" method="post">
    @csrf
    <div class="menu__container">
      <il class="menu"><a href="/login" class="logout">Logout</a></il>
    </div>
  </form>
  <div class="menu__container">
    <il class="menu"><a href="" class="mypage">Mypage</a></il>
  </div>
  @else
  <ul class="menu__list">
    <div class="menu__container">
      <il class="menu"><a href="/" class="home">Home</a></il>
    </div>
    <div class="menu__container">
      <il class="menu"><a href="/register" class="register">Register</a></il>
    </div>
    <div class="menu__container">
      <il class="menu"><a href="/login" class="login">Login</a></il>
    </div>
  </ul>
  @endif
</ul>
@endsection

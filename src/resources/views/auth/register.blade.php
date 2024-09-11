@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('icon')
<a href="/menu1" class="return__btn"><i class="fa-solid fa-bars"></i></a>
@endsection

@section('title')
<h1 class="header__title">Rese</h1>
@endsection


@section('content')
<div class="register__content">
  <div class="register-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form" action="/thanks" method="get">
    @csrf
    <div class="form__group">
      <div class="form__group-icon">
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-icon">
        <i class="fa-solid fa-envelope"></i>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-icon">
        <i class="fa-solid fa-lock"></i>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="Password"/>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
</div>
@endsection
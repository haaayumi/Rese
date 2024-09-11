@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('icon')
<a href="/menu1" class="return__btn"><i class="fa-solid fa-bars"></i></a>
@endsection

@section('title')
<h1 class="header__title">Rese</h1>
@endsection

@section('search')
<form>
  <div>
    <select name="area" id="">
      <option value="all">All area</option>
      <option value="tokyo">東京都</option>
      <option value="osaka">大阪府</option>
      <option value="fukuoka">福岡県</option>
    </select>
  </div>

  <div>
    <select name="genre" id="">
      <option value="all">All genre</option>
      <option value="sushi">寿司</option>
      <option value="ramen">ラーメン</option>
      <option value="izakaya">居酒屋</option>
      <option value="yakiniku">焼肉</option>
      <option value="italian">イタリアン</option>
    </select>
  </div>

  <div>
    <div class="searchform">
      <input type="text" class="search__text" placeholder="&#xf002;Search">
    </div>
  </div>
</form>
@endsection

@section('content')
<div class="shops">
  <div class="shop__img">
    <img src="{{ asset('img/sushi.jpg') }}" alt="お寿司屋さん画像" />
  </div>
  <div class="shop__content">
    <h2 class="shop__name">仙人</h2>
    <div class="shop__tag">
      <p class="shop__tah-item">#東京都</p>
      <p class="shop__tah-item">#寿司</p>
    </div>

    <div class="shop__content">
      <input type="button" class="shop__content-button" value="詳しくみる">
      <a href="" class="likes"><i class="fa-regular fa-heart"></i></a>
    </div>
  </div>
</div>
@endsection
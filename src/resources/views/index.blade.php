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
<form action="/search" class="form" method="get">
  @csrf
  <div class="form__select">
    <select name="area_id" id="area_id">
      <option value="all">All area</option>
      @foreach($areas as $area)
      <option value="{{ $area->id }}">{{ $area->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form__select">
    <select name="genre_id" id="genre_id">
      <option value="all">All genre</option>
      @foreach($genres as $genre)
      <option value="{{ $genre->id }}">{{ $genre->name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <div class="searchform">
      <input type="text" class="keyword" placeholder="&#xf002;Search">
    </div>
  </div>
</form>
@endsection

@section('content')
<div class="shops">
  @foreach($shops as $shop)
  <div class="shop_card">
    <div class="shop__img">
        <img src="{{ $shop->image_url }}" alt="{{$shop->genre->name}}さん画像" />
    </div>
    <div class="shop__content">
      <h2 class="shop__name">{{ $shop->name }}</h2>
      <div class="shop__tag">
        <p class="shop__tah-item">#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>
      </div>
      <div class="shop__content">
        <div>
          <a href="{{ route('detail', ['id' => $shop->id ]) }}">詳しく見る</a>
        </div>
        <div>
          <a href="" class="likes"><i class="fa-regular fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
@endsection
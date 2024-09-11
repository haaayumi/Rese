@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}" />
@endsection

@section('icon')
<i class="fa-solid fa-bars"></i>
@endsection

@section('title')
<h1 class="header__title">Rese</h1>
@endsection

@section('content')
<div class="main">
  <div class="main__container">
    <h2 class="done">ご予約ありがとうございます</h2>
    <button type="submit" class="back">戻る</button>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}" />
@endsection

@section('icon')
<a href="/menu1" class="return__btn"><i class="fa-solid fa-bars"></i></a>
@endsection

@section('title')
<h1 class="header__title">Rese</h1>
@endsection

@section('content')
<div class="main">
  <div class="main__container">
    <h2 class="thanks">会員登録ありがとうございます</h2>
    <div class="btn"><a href="/login" class="back">ログインする</a></div>
  </div>
</div>
@endsection

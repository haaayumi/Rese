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

@section('content')
<form action="">
  <div class="shop__detail">
    <div class="shop">
      <div class="shop__title">
        <div class="before-page">
          <button class="shop__before"><</button>
        </div>
        <div class="shop__name">
          <h2 class="">仙人</h2>
        </div>
      </div>

      <div class="shop__container">
        <div class="shop__image">
          <img src="" alt="">
        </div>

        <div class="shop__tag">

        </div>

        <div class="shop__version">
          <p class="shop__version-text">

          </p>
        </div>
      </div>

      <div class="reserve">
        <form action="" class="reserve__form">
          <div class="reserve__main">
            <h3 class="reserve title">予約</h3>
            <div class="reserve__select">
              <div class="reserve__select-input select-date">
                <input type="text" class="reserve__date">
              </div>
              <div class="reserve__select-input select-time">
                <input type="text" class="reserve__time">
              </div>
              <div class="reserve__select-input select-num">
                <input type="text" class="reserve__num">
              </div>
              <div class="reserve__select-confirmation">
                <table class="confirmation__table">
                  <tr class="confirmation__shop-name">
                    <th class=""></th>
                    <td class=""></td>
                  </tr>
                  <tr class="confirmation__shop-date">
                    <th class="date"></th>
                    <td class="confirmation__date"></td>
                  </tr>
                  <tr class="confirmation__shop-time">
                    <th class="time"></th>
                    <td class="confirmation__time"></td>
                  </tr>
                  <tr class="confirmation__shop-num">
                    <th class="num"></th>
                    <td class="confirmation__num"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="form_btn">
            <button class="reserve_btn">予約する</button>
          </div>
        </form>

      </div>


    </div>
  </div>
</form>
@endsection
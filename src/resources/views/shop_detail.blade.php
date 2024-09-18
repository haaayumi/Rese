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
<div class="shop__detail">
  @foreach($details as $detail)
  <div class="shop">
    <form action="">
      @csrf
      <div class="shop__title">
        <div class="before-page">
          @if($prevId)
          <a href="{{ route('detail', ['id' => $prevId->id ]) }}" class="prev_shop">&#60;</a>
          @endif
        </div>
        <div class="shop__name">
          <h2 class="">{{ $detail->name }}</h2>
        </div>
        <div class="next-page">
          @if($nextId)
          <a href="{{ route('detail', ['id' => $nextId->id ]) }}" class="next_shop">&#62;</a>
          @endif
        </div>
      </div>

      <div class="shop__container">
        <div class="shop__image">
          <img src="{{ $detail->image_url }}" alt="">
        </div>

        <div class="shop__tag">
          <p>#{{ $detail->area->name }} #{{ $detail->genre->name }}</p>
        </div>

        <div class="shop__version">
          <p class="shop__version-text">{{ $detail->discription }}</p>
        </div>
      </form>
    </div>
    @endforeach

    <div class="reserve">
      <form action="" class="reserve__form">
        <div class="reserve__main">
          <h3 class="reserve title">予約</h3>
          <div class="reserve__select">
            <div class="reserve__select-input select-date">
              <input type="date" min="{{ $minDate }}" max="{{ $maxDate }}" name="reserve_date" class="reserve__date" value="">
            </div>
            <div class="reserve__select-input select-time">
              <select name="" id="">
                @foreach($reserveTimes as $reserveTime)
                <option value="{{ $reserveTime }}">{{ $reserveTime }}</option>
                @endforeach
              </select>
            </div>
            <div class="reserve__select-input select-num">
              <select name="" id="">
                <option value="one">1</option>
                <option value="two">2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
                <option value="six">6</option>
              </select>
            </div>
            <div class="reserve__select-confirmation">
              <table class="confirmation__table">
                <tr class="confirmation__shop-name">
                  <th class="">Shop</th>
                  <td class="">{{ $detail->name }}</td>
                </tr>
                <tr class="confirmation__shop-date">
                  <th class="date">Date</th>
                  <td class="confirmation__date"></td>
                </tr>
                <tr class="confirmation__shop-time">
                  <th class="time">Time</th>
                  <td class="confirmation__time"></td>
                </tr>
                <tr class="confirmation__shop-num">
                  <th class="num">Number</th>
                  <td class="confirmation__num">

                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="form_btn">
          <button tyoe="submit" class="reserve_btn">予約する</button>
        </div>
      </form>
    </div>



  </div>
</div>
@endsection
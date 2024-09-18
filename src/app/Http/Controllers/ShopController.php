<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Carbon\Carbon;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with(['area:id,name','genre:id,name'])->get();
        return view('index', compact('shops'));
    }

    public function  showDetail($id)
    {
        $details = Shop::where('id', $id)->with(['area:id,name', 'genre:id,name'])->get();
        $prevId = Shop::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextId = Shop::where('id', '>', $id)->orderBy('id', 'asc')->first();

        $today = new Carbon;
        $minDate = $today->toDateString();
        $maxDate = $today->copy()->addMonth()->toDateString();

        $time = $today->hour;
        $reserveTimes = [];
        $reserveDate = [];
        $selectTime = $time +1;

        if( $today < $reserveDate ) {
            $startTime = Carbon::createFromTime('17', '0');
        } elseif ( $today && $time  < 17) {
            $startTime = Carbon::createFromTime('17', '0');
        } else {
            $startTime = Carbon::createFromTime( $selectTime , '0');
        }

        for($i = 0; $i < (24 - $startTime->hour); $i++) {
            $reserveTimes[] = $startTime->copy()->addHour($i)->format('H:i');
        }


        return view('shop_detail', compact('details', 'prevId', 'nextId', 'minDate', 'maxDate', 'reserveTimes'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurant;
use App\Booking;
use App\User;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function book(Request $request)
    {
        $user = User::find($request->user_id);
        $restaurant = Restaurant::find($request->restaurant_id);

        if($user->credits < 50)
        {
            return 'gagal kurang kredit';
        }
        $booking = new Booking;
        $booking->user_id = $request->user_id;
        $booking->restaurant_id = $request->restaurant_id;
        $booking->people = $request->people;
        $booking->table_no = $request->table;
        $booking->booking_date = $request->date;
        $booking->booking_time = $request->time;
        $booking->message = $request->message;

        $user->credits -= 50;
        $user->save();

        $restaurant->credits += 50;
        $restaurant->save();

        if(Booking::where([
            'booking_date' => $request->date,
            'booking_time' => $request->time,
            'table_no' => $request->table
        ])->first())
        {
            return 'sudah dibook';
        }
        else
        {
            if($booking->save())
            {
                return 'sukses book';
            }
        }
        return 'gagal';
    }
}

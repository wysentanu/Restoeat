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
        $booking = new Booking;
        $booking->user_id = $request->user_id;
        $booking->restaurant_id = $request->restaurant_id;
        $booking->people = $request->people;
        $booking->table_no = $request->table;
        $booking->booking_date = $request->date;
        $booking->booking_time = $request->time;
        $booking->message = $request->message;

        $user = User::find($request->user_id);
        $user->credits -= 100;
        $user->save();

        $restaurant = Restoran::find($request->restaurant_id);
        $restaurant->credits += 100;
        $restaurant->save();


        if(Booking::where('booking_date', $request->date)->first() && Booking::where('booking_time', $request->time)->first())
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

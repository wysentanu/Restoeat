<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurant;

class MainController extends Controller
{
    public function home()
    {
        $restaurants = Restaurant::all()->take(6);

        return view('main.home', compact('restaurants'));
    }

    public function detail($slug)
    {
        $restaurant = Restaurant::where('slug_nama', $slug)->firstOrFail();

        return view('main.detail', compact('restaurant'));
    }
}

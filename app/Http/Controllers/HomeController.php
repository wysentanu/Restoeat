<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'register',
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $user = new App\User;
        $user->name = $request->name;
       $flight->name = $request->name;

        $user->save();
        /*$credentials = [
            'email' =>  $request->input('email'),
            'password' =>  $request->input('password'),
        ];

        if ($auth->attempt($credentials)) {
            return redirect()->action('AdminController@dashboard');
        }
        else {
            return 'Gagal Login';
        }*/
    }
}

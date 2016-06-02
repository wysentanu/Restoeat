<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('restoran', ['except' => [
            'authentication',
            'login',
        ]]);
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function dashboard()
    {
        $page_title = "Restaurant Dashboard";
        return view('admin.index')->with('page_title', $page_title);
    }

    public function login()
    {
        if(auth('restoran')->check())
        {
            return redirect()->action('AdminController@dashboard');;
        }
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        if($request->isMethod('get'))
        {
            if(auth('restoran')->check())
            {
                return redirect()->action('AdminController@dashboard');
            }
            else {
                return redirect()->action('AdminController@login');
            }
        }
        else if($request->isMethod('post'))
        {
            $auth = auth('restoran');

            $credentials = [
                'email' =>  $request->input('email'), // Nomor Induk Pegawai
                'password' =>  $request->input('password'),
            ];

            if ($auth->attempt($credentials)) {
                return redirect()->action('AdminController@dashboard');
            }
            else {
                return false;
            }
        }
    }

    public function signout()
    {
        Auth::guard('restoran')->logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/restaurant/login');
    }

}

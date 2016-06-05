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
        $this->middleware('restaurant', ['except' => [
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

    public function profile()
    {
        return view('admin.profile');
    }

    public function menus()
    {
        return view('admin.menus');
    }

    public function login()
    {
        if(auth('restaurant')->check())
        {
            return redirect()->action('AdminController@dashboard');;
        }
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        if($request->isMethod('get'))
        {
            if(auth('restaurant')->check())
            {
                return redirect()->action('AdminController@dashboard');
            }
            else {
                return redirect()->action('AdminController@login');
            }
        }
        else if($request->isMethod('post'))
        {
            $auth = auth('restaurant');

            $credentials = [
                'email' =>  $request->input('email'), // Nomor Induk Pegawai
                'password' =>  $request->input('password'),
            ];

            if ($auth->attempt($credentials)) {
                return redirect()->action('AdminController@dashboard');
            }
            else {
                return 'Gagal Login';
            }
        }
    }

    public function signout()
    {
        Auth::guard('restaurant')->logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/restaurant/login');
    }

}

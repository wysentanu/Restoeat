<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'login',
            'authentication',
            'register',
        ]]);
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if($request->password == $request->c_password)
        {
            $user->password = bcrypt($request->password);
            $user->save();
            return 'register success';
        }

        return 'gagal';
    }

    public function login()
    {
        if(Auth::user())
        {
            return redirect()->action('UserController@dashboard');
        }
        return view('user.login');
    }

    public function authentication(Request $request)
    {
        if($request->isMethod('get'))
        {
            if(Auth::user())
            {
                return redirect()->action('UserController@dashboard');
            }
            else {
                return redirect()->action('UserController@login');
            }
        }
        else if($request->isMethod('post'))
        {
            $credentials = [
                'email' =>  $request->input('email'),
                'password' =>  $request->input('password'),
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->action('UserController@dashboard');
            }
            else {
                return 'Gagal Login';
            }
        }
    }

    public function dashboard()
    {
        return 'dashboard';
    }

    public function signout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/login');
    }
}

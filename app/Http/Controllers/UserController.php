<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use File;
use App\Booking;

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
           return redirect('/dashboard');
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

    public function uploadimage(Request $request)
    {
        $this->validate($request, [
            'image' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024'],
        ]);
        $res_id = Auth::user()->id;
        $file = $request->file('image');

        if(!is_null($file))
        {
            $extension = $file->getClientOriginalExtension();
            $path = base_path()."/public/user_pic/" . $res_id;
            $dbFileName = User::find($res_id)->profile_pic;

            if(!File::exists($path))
            {
                $directory = File::makeDirectory($path);
            }
            $fileName = 'profile_pic.' .$extension;
            $destination = base_path() . '/public/user_pic/' . $res_id . '/';
            File::delete($destination . $dbFileName);
            $sukses = $file->move($destination, $fileName);

            if($sukses)
            {
                User::where('id', $res_id)->update([
                    'profile_pic' => '/user_pic/'. $res_id. '/' . $fileName
                ]);
                return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/dashboard');
            }
            return 'gagal';
        }
    }

    public function dashboard()
    {
        $bookings = Booking::where('user_id',Auth::user()->id);

        return view('main.dashboard',compact('bookings'));
    }

    public function signout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
}

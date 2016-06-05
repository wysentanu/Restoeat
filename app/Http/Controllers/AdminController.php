<?php

namespace App\Http\Controllers;

use File;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Restaurant;

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
        return view('admin.home');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function menus()
    {
        return view('admin.menus');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'image' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024'],
        ]);

        $res_id = auth('restaurant')->user()->id;

        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $phone = $request->input('phone');
        $kota = $request->input('kota');
        $negara = $request->input('negara');
        $description = $request->input('description');
        $file = $request->file('image');

        if(!is_null($file))
        {
            $extension = $file->getClientOriginalExtension();
            $path = base_path()."/public/rest_pic/" . $res_id;
            $dbFileName = Restaurant::find($res_id)->profile_pic;

            if(!File::exists($path))
            {
                $directory = File::makeDirectory($path);
            }
            $fileName = 'profile_pic.' .$extension;
            $destination = base_path() . '/public/rest_pic/' . $res_id . '/';
            File::delete($destination . $dbFileName);
            $sukses = $file->move($destination, $fileName);

            if($sukses)
            {
                Restaurant::where('id', $res_id)->update([
                    'nama' => $nama,
                    'email' => $email,
                    'alamat' => $alamat,
                    'phone' => $phone,
                    'kota' => $kota,
                    'negara' => $negara,
                    'description' => $description,
                    'profile_pic' => '/rest_pic/'. $res_id. '/' . $fileName
                ]);
                return 'sukses';
            }
        }
        else {
            Restaurant::where('id', $res_id)->update([
                'nama' => $nama,
                'email' => $email,
                'alamat' => $alamat,
                'phone' => $phone,
                'kota' => $kota,
                'negara' => $negara,
                'description' => $description
            ]);
            return 'sukses';
        }
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
                'email' =>  $request->input('email'),
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

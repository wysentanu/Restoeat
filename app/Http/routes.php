<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('restaurant/login', function () {
  return view('loginresto');
});

Route::get('restaurant/loginauto', function () {
  $auth = $auth = auth('restoran'); // Atau \Auth::guard('doctor')

  $credentials = [
      'email' =>  'qnDepnyHCm@gmail.com', // Nomor Induk Pegawai
      'password' =>  'administrator',
  ];

  if ($auth->attempt($credentials)) {
      return 'Yay! Berhasil login (^o^)/';
  }

  return 'Gagal login.';
});

Route::get('restaurant/dashboard', 'AdminController@index');
Route::get('restaurant/signout', 'AdminController@signout');

Route::auth();

Route::get('/home', 'HomeController@index');

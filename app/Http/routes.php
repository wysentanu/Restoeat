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
/*Route::get('/test', function(){
    return view('main.detail');
});*/

Route::get('/', 'MainController@home');
Route::get('/register', function(){
    return view('user.register');
});
Route::get('/r/{slug}', 'MainController@detail');
Route::post('/book', 'BookingController@book');
Route::post('/register', 'UserController@register');
Route::get('/login', 'UserController@login');
Route::get('/authentication', 'UserController@authentication');
Route::post('/authentication', 'UserController@authentication');
Route::get('/signout', 'UserController@signout');
Route::get('/dashboard', 'UserController@dashboard');
Route::post('/uploadimage', 'UserController@uploadimage');

Route::group(['prefix' => 'restaurant'], function()
{
    // /restaurant/...
    Route::get('/', 'AdminController@dashboard');
    Route::get('login', 'AdminController@login');
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('signout', 'AdminController@signout');
    Route::post('authentication', 'AdminController@authentication');
    Route::get('authentication', 'AdminController@authentication');
    Route::get('profile', 'AdminController@profile');
    Route::post('updateprofile', 'AdminController@updateProfile');
    Route::get('menus', 'AdminController@menus');
});



//Route::auth();

/*Route::get('restaurant/loginauto', function () {
  $auth = auth('restoran'); // Atau \Auth::guard('doctor')

  $credentials = [
      'email' =>  'qnDepnyHCm@gmail.com', // Nomor Induk Pegawai
      'password' =>  'administrator',
  ];

  if ($auth->attempt($credentials)) {
      return 'Yay! Berhasil login (^o^)/';
  }

  return 'Gagal login.';
});*/

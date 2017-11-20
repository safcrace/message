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

Route::get('test', function() {
  $user = New App\User;
  $user->name = 'Mario Almada';
  $user->email = 'mario@gmail.com';
  $user->password = bcrypt('1234');
  $user->role_id = 2;
  $user->save();
  return $user;
});

Route::get('roles', function() {
  return \App\Role::with('user')->get();
});

Route::get('/', ['uses' => 'PagesController@home', 'as' => 'home']);

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo']);

Route::resource('mensajes', 'MessagesController');
Route::resource('usuarios', 'UsersController');

Route::get('login', 'Auth\AuthController@showLoginForm');

Route::post('login', 'Auth\AuthController@login');

Route::get('logout', 'Auth\AuthController@logout');


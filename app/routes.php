<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@showIndex');
Route::get('/shockwave','HomeController@showShockwave');
Route::get('/programme','HomeController@showProgramme');
Route::get('/pougnes','HomeController@showPougnes');
Route::get('/fun','HomeController@showFun');
Route::get('/sponsors', 'HomeController@showSponsors');

//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


// Menu routes
Menu::make('MyNavBar', function($menu){

  $menu->add('Accueil');
  $menu->add('Shockwave', 'shockwave');
  $menu->add('Programme', 'programme');
  $menu->add('Pougnes',  'pougnes');
  $menu->add('Fun', 'fun');
  $menu->add('Sponsors', 'sponsors');

});

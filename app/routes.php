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
Route::get('/presentation','HomeController@showPresentation');
Route::get('/programme','HomeController@showProgramme');
Route::get('/pougnes','HomeController@showPougnes');
Route::get('/photoVideo','HomeController@showPhotoVideo');
Route::get('/sponsors', 'HomeController@showSponsors');

Route::get('/ptit-dej', 'BreakfastController@showForm');
Route::post('/ptit-dej', 'BreakfastController@create');
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

App::missing(function($exception)
{
  return Response::view('404', array(), 404);
});


// Menu routes
Menu::make('MyNavBar', function($menu){

  $menu->add('Accueil');
  $menu->add('Présentation', 'presentation');
  $menu->add('Programme', 'programme');
  $menu->add('Pougnes',  'pougnes');
  $menu->add('Photos/Vidéo', 'photoVideo');
  $menu->add('<i class="fa fa-cutlery"></i> Ptit-déj', 'ptit-dej');

});

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


Menu::make('MyNavBar', function($menu){

  $menu->add('Accueil');
  $menu->add('Shockwave',    'shockwave');
  $menu->add('Programme', 'programme');
  $menu->add('Pougnes',  'pougnes');
  $menu->add('Fun', 'fun');
  $menu->add('Sponsors', 'sponsors');

});

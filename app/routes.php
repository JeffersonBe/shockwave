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

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/shockwave', function()
{
	return View::make('shockwave');
});
Route::get('/programme', function()
{
	return View::make('programme');
});
Route::get('/pougnes', function()
{
	return View::make('pougnes');
});
Route::get('/sponsors', function()
{
	return View::make('sponsors');
});
Route::get('/fun', function()
{
	return View::make('fun');
});

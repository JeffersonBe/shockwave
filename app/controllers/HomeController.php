<?php

class HomeController extends BaseController {

	protected $layout = 'layout';
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('index');
	}

	public function showShockwave()
	{
		return View::make('presentation');
	}

	public function showProgramme()
	{
		return View::make('programme');
	}

	public function showPougnes()
	{
		return View::make('pougnes');
	}

	public function showSponsors()
	{
		return View::make('sponsors');
	}

	public function showFun()
	{
		return View::make('fun');
	}
}

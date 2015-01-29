<?php

class BreakfastController extends \BaseController {

	public function showForm(){
		return View::make('breakfast.form');
	}
	public function create(){
		$input = Input::all();
		dd($input);
	}

	public function userCreated($nameCreated) {
		// $name = new Member();
		// $name = Member:find($name)
	}
}

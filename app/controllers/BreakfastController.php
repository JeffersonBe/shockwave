<?php

class BreakfastController extends \BaseController {

	public function showForm(){
		return View::make('breakfast.form');
	}

}

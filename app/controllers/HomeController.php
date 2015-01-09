<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('new');//('hello');
	}
	public function showWelcome1()
	{
		return View::make('nouvelles');
	}
	public function showWelcome2()
	{
		return View::make('sucree');
	}
	public function showWelcome3()
	{
		return View::make('salees');
	}
	
	
	/*public function showWelcome4()
	{
		return View::make('critiques');
	}*/

	
}



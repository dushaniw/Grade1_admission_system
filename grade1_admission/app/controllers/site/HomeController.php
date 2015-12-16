<?php

class HomeController extends BaseController
{
	public function showWelcome() {
		//App::abort(404);
		return View::make('site/home');
	}
}
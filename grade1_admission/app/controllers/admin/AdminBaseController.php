<?php

class AdminBaseController extends BaseController
{
	public function missingMethod($params = array()) {
		return Response::make('404', 404);
	}	
}
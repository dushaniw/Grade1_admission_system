<?php

class APIBaseController extends Controller {
	
	public function __construct() {
		$this->beforeFilter('@apiFilterRequest');
	}

	/**
	 * Filter the incoming requests.
	 */
	public function apiFilterRequest($route, $request) {
		
	}
	
	public function missingMethod($params = array()) {
		return Helper::json(null, 'This API is not supported.', -501);
	}
	
}
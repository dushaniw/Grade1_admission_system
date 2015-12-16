<?php namespace Helpers;

use Illuminate\Support\Facades\Response;

class Helper {
	
	/**
	 * $data is type of null or array
	 */
	public static function json($data = null, $msg = '', $code = 1) {
		$json = array(
			'code' => $code,
			'msg' => $msg,
		);

		if (is_array($data)) {
			$json = array_merge($json, $data);
		} else if (!is_null($data)) {
			$json['code'] = -500;
			$json['msg'] = 'server error';
		}
		
		return Response::json($json);
	}
}
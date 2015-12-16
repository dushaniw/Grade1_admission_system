<?php


Route::get('/SignUpGuardian', function(){


	return View :: make('Welcome/SignUpGuardian');

});

Route::get('/SignUpGuardian/submit','GuardianController@addGuardian' );




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

/*
Route::group(array('domain' => "admin.jfq.0x123.com"), function() {
	Route::controller('/', 'AdminController');
});

Route::group(array('domain' => 'api.jfq.0x123.com'), function() {
	Route::controller('/', 'APIBaseController');
});

*/


// we can use with method to pass values to views



	/*




	for ($i = 1; $i < 32; $i++) {
		$date[$i - 1] = $i;
	}
	$year = array();
	for ($i = 1950; $i < 2010; $i++) {
		$year[$i - 1950] = $i;
	}



	return View:: make('Welcome/submitted')->with('var1',$district);

	*/


/*
Route::get('test/{anything?}', function($anything){

	return View :: make('Welcome/welcome') -> with('var',$anything);

});

*/

//routing parameters
/*
Route:: get('milkshake/{favour?}',function($favour= null){
	if($favour == null){
		return "milkshake is very nice";

	}
	return $favour ." is getvery nice";
});



Route:: get('articles/{title?}',function($title= null){
	if($title == null){
		return "list of all the article";

	}
	return "your  title is ".$title;
});


Route:: get('a/{para1}/b/{para2?}',function($para1,$para2= 'default'){

	return "your  parameter1 is ".$para1 ." parameter2 is".$para2;
});

	//return View :: make('Welcome/welcome',array('var' => "Lion"));

	//return View :: make('Welcome/welcome') -> with('var',"animal");

	//return View :: make('Welcome/welcome') -> withVar("animal");

*/

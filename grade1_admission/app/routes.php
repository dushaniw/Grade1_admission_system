<?php


Route::get('/',function(){
	return View :: make ('G1SAS/login');
});


Route::get('guadian',function(){
	return View :: make ('G1SAS/AddGuardian');
});

Route::controller('login','LoginController');

Route::controller('guardian','GuardianController');


//this tempory function

Route::get('application',function(){
	return View :: make ('G1SAS/application');
});


Route::get('application1',function(){
	return View :: make ('Welcome/category6_living_abroad');
});

/*
Route::get('/GuardianHome',function(){
	return View :: make ('Welcome/GuardianHome');

});


Route::get('/WelcomeAdmissionSystem',function(){
	return View :: make ('Welcome/WelcomeAdmissionSystem');

});








Route::get('/login', function(){


	return View :: make('/login');

});
Route::get('/ApplyForCategory', function(){


	return View :: make('Welcome/ApplyForCategory');

});

Route::get('/category1', function(){


	return View :: make('Welcome/category1_closeproximity');

});


Route::get('/category2', function(){


	return View :: make('Welcome/category2_pastpupils');

});


Route::get('/category3', function(){


	return View :: make('Welcome/category3_brothers_sisters_at');

});


Route::get('/category4', function(){


	return View :: make('Welcome/category4_Staff_in_edu');

});


Route::get('/category5', function(){


	return View :: make('Welcome/category5_transfers');

});


Route::get('/category6', function(){


	return View :: make('Welcome/category6_living_abroad');

});





Route::get('/SignUpGuardian', function(){


	return View :: make('Welcome/SignUpGuardian');

});
Route::get('/SignUpGuardian/submit','GuardianController@addGuardian');



Route::get('/addNewStudent', function(){
	//$guardian_nic= Input::get("RESULT_TextField-1");
	$guardian_nic="9783434343";
	return View :: make('Welcome/addNewStudent')->with('guardian_nic',$guardian_nic);

});
Route::get('/addNewStudent/submit','StudentController@addStudent' );







Route::get('/cat1',function(){
	return View::make('category1_closeproximity');
});

Route::get('/cat2',function(){
	return View::make('category2_pastpupils');
});


Route::get('/cat3',function(){
	return View::make('category3_brothers_sisters_at');
});


Route::get('/cat4',function(){
	return View::make('category4_Staff_in_edu');
});

Route::get('/cat5',function(){
	return View::make('category5_transfers');
});

*/

/*

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

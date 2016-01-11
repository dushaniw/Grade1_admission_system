<?php

class UserPageController extends BaseController
{
	
	public function postStudentadd()
	{
		$username=Input::get("username");
    		//return $username;
    		return View::make('	G1SAS/AddNewChild')->with('username',$username);
	
	}

	public function postSearch()
	{
    		return View::make('	G1SAS/addnewchild');
		
	}

}

<?php

class UserPageController extends BaseController
{
	
	
	
	public function postStudentadd()
	{
		$username=Input::get("username");
		$applicantId=intval(DBStudentApplicantController::getLastApplicantId()) +1;
    		
    		return View :: make('G1SAS/AddNewChild')->with('username',$username)->with('applicantId',$applicantId);
	
	}

	public function postSearch()
	{
    		return View :: make('G1SAS/addnewchild');
		
	}

}

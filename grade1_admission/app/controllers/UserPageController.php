<?php

class UserPageController extends BaseController
{
	
	public function getHome(){
		$username=$_GET["username"];
        $guardian=DBGuardianController::getGuardian($username);
        return View :: make ('G1SAS/userpage')->with('guardian',$guardian)->with('username',$username);

    }
	
	public function getStudentadd()
	{
		$username=$_GET["username"];
		$applicantId=intval(DBStudentApplicantController::getLastApplicantId()) +1;
    		
    	return View :: make('G1SAS/AddNewChild')->with('username',$username)->with('applicantId',$applicantId);
	
	}

	public function postSearch()
	{
    		return View :: make('G1SAS/addnewchild');
		
	}

}

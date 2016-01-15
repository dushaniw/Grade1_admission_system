<?php

//include_once("DatabaseController/DBStudentApplicantController.php");
//include_once("DatabaseController/DBSchoolController.php");

class SearchController extends BaseController{

	public function postSchoolselected(){
            $schools=DBSchoolController::getAllSchool();
            
            return  View :: make ('G1SAS/searchOnSchool')->with ('schools',$schools);
            
	}

	public function postSchoolapplicantsfind(){
            $selected=Input::get("school");
            $pieces = explode("-", $selected);
            $schoolId=$pieces[0];
            $applicants=DBStudentApplicantController::getSelectedApplicantsForSchool($schoolId);
            return  View :: make ('G1SAS/showSchoolApplicants')->with ('selected',$selected)->with('applicants',$applicants);
            
	}
}
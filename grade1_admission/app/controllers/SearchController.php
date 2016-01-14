<?php

//include_once("DatabaseController/DBStudentApplicantController.php");
//include_once("DatabaseController/DBSchoolController.php");

class SearchController extends BaseController{

	public function postSchoolselected(){
            $schools=DBSchoolController::getAllSchool();
            
            return  View :: make ('G1SAS/searchOnSchool')->with ('schools',$schools)->with('applicants',null);
            
	}

	public function postSchoolApplicantsFind(){
			$schools=DBSchoolController::getAllSchool();
            $selected=Input::get('school_name');
            $pieces = explode("-", $selected);
            $schoolId=$pieces[0];
            $applicants=DBStudentApplicantController::getSelectedApplicantsForSchool($schoolId);
            return  View :: make ('G1SAS/searchOnSchool')->with ('schools',$schools)->with('applicants',$applicants);
            
	}
}
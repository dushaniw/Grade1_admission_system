<?php

/**
* 
*/
class SchoolController extends BaseController
{
	public function postAddpastpupilmarkingcriteria(){

	}

	public function postEdit(){
			$schoolid=Input::get('schoolidtext');
			$school=DBSchoolController::getSchool($schoolid);
			return View::make('G1SAS/EditSchool')->with('school',$school);
	}
	public function postSave(){
			$schoolid=Input::get('schoolidtext');
			$schoolname=Input::get('schoolnametext');
			$category=Input::get('categorytext');
			$no_of_classes=Input::get('capacitytext');
			$contact_number=Input::get('contacttext');

			$school=new school();
			$school->setSchool_id($schoolid);
			$school->setSchool_name($schoolname);
			$school->setCategory($category);
			$school->setContact_no($contact_number);
			$school->setNo_of_classes($no_of_classes);
			DBSchoolController::updateSchool($school);

			$updated_school=DBSchoolController::getSchool($schoolid);

			return View::make('G1SAS/schoolpage')->with('school',$updated_school);
	}

}
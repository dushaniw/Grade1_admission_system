<?php
include("/Model/pastPupil_markingCriteria.php");
include '/DatabaseController/DBPastPupilMarkingCriteriaController.php';
/**
* 
*/
class SchoolController extends BaseController
{
	public function postAddpastpupilmarkingcriteria(){
			$schoolid=Input::get('schoolid');
			$school=DBSchoolController::getSchool($schoolid);
			return View::make('G1SAS/AddPastPupilMarkingCriteria')->with('school',$school);
	}

	public function postViewpastpupilmarkingcriteria(){
			$schoolid=Input::get('schoolid');
			$school=DBSchoolController::getSchool($schoolid);
			$years=DBPastPupilMarkingCriteriaController::getYearsOfAvailableCriteria($schoolid);
			$lastyear=DBPastPupilMarkingCriteriaController::getLastYearOfAvailableCriteria($schoolid);
			$lastyear_ppmc=DBPastPupilMarkingCriteriaController::getPastPupilMarkingCriteria($schoolid,$lastyear);
			return View::make('G1SAS/ViewPastPupilMarkingCriteria')->with('school',$school)->with('years',$years)->with('ppmc',$lastyear_ppmc)->with('year',$lastyear);
	}

	public function postViewppmarkingcriteria(){
			$schoolid=Input::get('schoolidtext');
			$year=Input::get('year_sel');
			$school=DBSchoolController::getSchool($schoolid);
			$years=DBPastPupilMarkingCriteriaController::getYearsOfAvailableCriteria($schoolid);
			$ppmc=DBPastPupilMarkingCriteriaController::getPastPupilMarkingCriteria($schoolid,$year);
			if($ppmc!=null){
				return View::make('G1SAS/ViewPastPupilMarkingCriteria')->with('school',$school)->with('years',$years)->with('ppmc',$ppmc)->with('year',$year);
			}else{
				return "Unsuccessful";
			}
	}

	public function postSaveppmarkingcriteria(){
			$schoolid=Input::get('schoolidtext');
			$year=Input::get('year');

			$intEduAch=Input::get('intEduAchMarks');
			$natEduAch=Input::get('natEduAchMarks');
			$proEduAch=Input::get('proEduAchMarks');
			$disEduAch=Input::get('disEduAchMarks');
			$zonEduAch=Input::get('zonEduAchMarks');

			$intExtAch=Input::get('intExtAchMarks');
			$natExtAch=Input::get('natExtAchMarks');
			$proExtAch=Input::get('proExtAchMarks');
			$disExtAch=Input::get('disExtAchMarks');
			$zonExtAch=Input::get('zonExtAchMarks');

			$pastPupOrg=Input::get('pastPupOrgMarks');
			$contribution=Input::get('contributionMarks');
			$other=Input::get('otherMarks');
			
			$ppmc=new pastPupil_markingCriteria();
			$ppmc->setAll($schoolid,$year,$intEduAch,$natEduAch,$proEduAch,$disEduAch,$zonEduAch,$intExtAch,$natExtAch,$proExtAch,$disExtAch,$zonExtAch,$pastPupOrg,$contribution,$other);
			$result=DBPastPupilMarkingCriteriaController::addCriteria($ppmc);

			$school=DBSchoolController::getSchool($schoolid);
			if($result){
				return View::make('G1SAS/schoolpage')->with('school',$school)->with('notice',"PatPupil Marking Criteria added successfully");
			}else{
				return View::make('G1SAS/schoolpage')->with('school',$school)->with('notice',"PatPupil Marking Criteria addition Failed");
			}

	}


	public function postEdit(){
			$schoolid=Input::get('schoolidtext');
			$school=DBSchoolController::getSchool($schoolid);
			return View::make('G1SAS/EditSchool')->with('school',$school);
	}
	public function postSave(){
			$schoolid=Input::get('schoolidtext');
			$schoolname=Input::get('schoolnametext');
			$category=Input::get('category');
			$no_of_classes=Input::get('capacitytext');
			$contact_number=Input::get('contacttext');

			$school=new school();
			$school->setSchool_id($schoolid);
			$school->setSchool_name($schoolname);
			$school->setCategory($category);
			$school->setContact_no($contact_number);
			$school->setNo_of_classes($no_of_classes);
			
			$result=DBSchoolController::updateSchool($school);
			$updated_school=DBSchoolController::getSchool($schoolid);

			if($result){
				return View::make('G1SAS/schoolpage')->with('school',$updated_school)->with('notice',"Updated successfully");
			}else{
				return View::make('G1SAS/schoolpage')->with('school',$updated_school)->with('notice',"Update Failed");
			}
	}

	public function postVerifyapplication(){
			$schoolid=Input::get('schoolid');
			$school=DBSchoolController::getSchool($schoolid);
			$applicationids_set=array();
			for ($i=1; $i <7 ; $i++) { 
				$application_ids=DBApplicationController::getUnverifiedApplicationSetIds($schoolid,$i);
				$applicationids_set[]=$application_ids;
			}
			
			return View::make('G1SAS/VerifyApplication')->with('school',$school)->with('application_set_set',$applicationids_set);
	}

	public function postVerifytype1(){
			$application=DBApplicationController::getApplication($application_id);
			$applicant=DBStudentApplicantController::getApplicantById($applicantId);
			$category=DBCategory1Controller::getCategory1($applicant->getGuardianNIC());
			return View::make('G1SAS/verifycategoryset/VerifyCategory1')->with('application',$application)->with('applicant',$applicant)->with('category',$category);
	}
}
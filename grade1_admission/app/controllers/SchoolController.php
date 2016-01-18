<?php
include("/Model/pastPupil_markingCriteria.php");
include '/DatabaseController/DBPastPupilMarkingCriteriaController.php';
include '/DatabaseController/DBPPContributionController.php';
//include '/DatabaseController/DBCPAchievementController.php';

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
			
			return View::make('G1SAS/VerifyApplication')->with('title','Select applications to verify')->with('school',$school)->with('application_set_set',$applicationids_set);
	}

	public function postVerifytype1(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$category=DBCategory1Controller::getCategory1($NIC);
			return View::make('G1SAS/verifycategoryset/VerifyCategory1')->with('application_id',$application_id)->with('guardian',$guardian)->with('school',$school)->with('application',$application)->with('applicant',$applicant)->with('category',$category);
	}

	public function postVerifytype2(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$category=DBCategory2Controller::getCategory2($schoolid,$NIC);
			$pp_ach_set=DBPPAchievementController::getPastPupilAch($schoolid,$NIC);
			$pp_con_set=DBPPContributionController::getPastPupilCon($schoolid,$NIC);
			return View::make('G1SAS/verifycategoryset/VerifyCategory2')->with('application_id',$application_id)
			->with('guardian',$guardian)->with('school',$school)->with('application',$application)
			->with('applicant',$applicant)->
			with('category',$category)->with('ach_set',$pp_ach_set)->with('con_set',$pp_con_set);
	}

	public function postVerifytype3(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$siblings=DBSiblingController::getSiblings($applicant_id);
			foreach ($siblings as $sibling) {
				$schoolId=$sibling->getSchoolId();
				$admissionNumber=$sibling->getAdmissionNumber();
				$category=DBCategory3Controller::getCategory3($schoolId,$admissionNumber);
				$cur_ach_set=DBCPAchievementController::getCPAchievements($schoolId,$admissionNumber);
				$category->setCur_pup_ach_set($cur_ach_set);
				$cur_don_set=DBCurPupilDonationController::getCPDonations($schoolId,$admissionNumber);
				$category->setCur_pup_donation_set($cur_don_set);
				$sibling->setCur_pupil($category);
			}
			
			return View::make('G1SAS/verifycategoryset/VerifyCategory3')->with('application_id',$application_id)
			->with('guardian',$guardian)->with('school',$school)->with('application',$application)
			->with('applicant',$applicant)->with('siblings',$siblings);
	}

	public function postVerifytype4(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$category=DBCategory4Controller::getCategory4($NIC);
			$cur_sch_id=$category->getServingSchoolId();
			$cur_school=DBSchoolController::getSchool($cur_sch_id);

			return View::make('G1SAS/verifycategoryset/VerifyCategory4')->with('application_id',$application_id)
			->with('guardian',$guardian)->with('school',$school)->with('application',$application)
			->with('applicant',$applicant)->with('category',$category)->with('cur_school',$cur_school);
	}

	public function postVerifytype5(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$category=DBCategory5Controller::getCategory5($NIC);

			return View::make('G1SAS/verifycategoryset/VerifyCategory5')->with('application_id',$application_id)
			->with('guardian',$guardian)->with('school',$school)->with('application',$application)
			->with('applicant',$applicant)->with('category',$category);
	}

	public function postVerifytype6(){
			$application_id=Input::get('type');
			$schoolid=Input::get('school_id');
			$school=DBSchoolController::getSchool($schoolid);
			$application=DBApplicationController::getApplication($application_id);
			$applicant_id=$application->getApplicant_id();
			$applicant=DBStudentApplicantController::getApplicantById($applicant_id);
			$NIC=$applicant->getGuardianNIC();
			$guardian=DBGuardianController::getGuardianByNic($NIC);
			$category=DBCategory6Controller::getCategory6($NIC);

			return View::make('G1SAS/verifycategoryset/VerifyCategory6')->with('application_id',$application_id)
			->with('guardian',$guardian)->with('school',$school)->with('application',$application)
			->with('applicant',$applicant)->with('category',$category);
	}


	public function postVerifycat(){
			$application_id=Input::get('application_idtext');
			$result=DBApplicationController::verifyApplication($application_id);
			$schoolid=Input::get('schoolIdText');
			$school=DBSchoolController::getSchool($schoolid);
			$applicationids_set=array();
			for ($i=1; $i <7 ; $i++) { 
				$application_ids=DBApplicationController::getUnverifiedApplicationSetIds($schoolid,$i);
				$applicationids_set[]=$application_ids;
			}
			if($result){
				return View::make('G1SAS/VerifyApplication')->with('school',$school)->with('application_set_set',$applicationids_set)->with('title','Verification added');
			}else{
				return View::make('G1SAS/VerifyApplication')->with('school',$school)->with('application_set_set',$applicationids_set)->with('title','Verification Failed');
			}			
	}

	public function postCancelverify(){
			$schoolid=Input::get('schoolid');
			$school=DBSchoolController::getSchool($schoolid);
			$applicationids_set=array();
			for ($i=1; $i <7 ; $i++) { 
				$application_ids=DBApplicationController::getUnverifiedApplicationSetIds($schoolid,$i);
				$applicationids_set[]=$application_ids;
			}
			
			return View::make('G1SAS/VerifyApplication')->with('title','The application was added to pending list')->with('school',$school)->with('application_set_set',$applicationids_set);
	}

	public function postAddschool(){
			$schoolid=Input::get('schoolidtext');
            $schoolname=Input::get('schoolnametext');
            $category=Input::get('category');
            $no_of_classes=Input::get('capacitytext');
            $contact_number=Input::get('contacttext');
            $male_per=Input::get('malepertext');
            $sinhala_per=Input::get('sinhalapertext');
            $email=Input::get('emailtext');
            $password=Input::get('passwordtext');

            $school=new school();
            $school->setSchool_id($schoolid);
            $school->setSchool_name($schoolname);
            $school->setCategory($category);
            $school->setContact_no($contact_number);
            $school->setNo_of_classes($no_of_classes);
            $school->setMale_percentage($male_per);
            $school->setSinhala_percentage($sinhala_per);
            $school->setEmail($email);
            $school->setPassword($password);
            
            $result=DBSchoolController::addSchool($school);
            if($result){
            	return View::make('G1SAS/adminpage')->with('title','School added successfully');
        	}else{
        		return View::make('G1SAS/adminpage')->with('title','School was not added');
        	}
	}
}
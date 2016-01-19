<?php

//include_once("DatabaseController/DBStudentApplicantController.php");
//include_once("DatabaseController/DBSchoolController.php");

class SearchController extends BaseController{

      public function getSchoolselected(){
            $schoolid=$_GET['schoolid'];
            $school=DBSchoolController::getSchool($schoolid);
            $schools=DBSchoolController::getAllSchool();
            return  View :: make ('G1SAS/searchOnSchool')->with ('schools',$schools)->with('school',$school);
      }

      public function getSchoolapplicantsfind(){
            $schoolid=Input::get("schoolid");
            $school=DBSchoolController::getSchool($schoolid);
            $schools=DBSchoolController::getAllSchool();

            $selected=Input::get("school");
            $selectedSchool=DBSchoolController::getSchool($selected);
            
            $pieces = explode("-", $selected);
            $schoolId=$pieces[0];
            $applicants=DBStudentApplicantController::getSelectedApplicantsForSchool($schoolId);
            return  View :: make ('G1SAS/showSchoolApplicants')->with('selectedSchool',$selectedSchool)->with ('schools',$schools)->with('school',$school)->with ('selected',$selected)->with('applicants',$applicants);
      }
}
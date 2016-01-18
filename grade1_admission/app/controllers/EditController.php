<?php

class EditController extends BaseController{

	public function postIndex()
    {
        $username=Input::get("username");
       	$guardian=DBGuardianController::getGuardian($username);
        $schools=DBCategory2Controller::getGuardianApplySchools($guardian->getNic());
        return View :: make ('G1SAS/EditCategoryDetail')->with('nic',$guardian->getNic())->with('schools',$schools);
    }
    
    public function postEditcategory()
    {
    	$type=Input::get("type");
    	$nic=Input::get("nic");

    	if($type==0){
        		$hasCategory1=DBCategory1Controller::hasCategory1($nic);
        		if($hasCategory1){
        			$category1=DBCategory1Controller::getCategory1($nic);
        			return View :: make ('G1SAS/category1edit')->with('category1',$category1);
        		}else{
        			return "you don't have category 1 type application";
        		}	
    	
      }elseif ($type=1) {
            $schoolId=Input::get("schoolId");
            $category2=DBCategory2Controller::getCategory2($schoolId,$nic);
            $achieve=DBPPAchievementController::getPastPupilAch($schoolId,$nic);
            $eAch=$achieve[0];
            $cAch=$achieve[1];
            
            return View :: make ('G1SAS/category2edit')->with('category2',$category2)->with('eAch',$eAch)->with('cAch',$cAch);
                    

      }



    }

    public function postEditcategory1()
    {
         
            $guardianNic=Input::get("guardianNic");
            $noOfYearsInElectrocalRegister=Input::get('noOfYearsInElectrocalRegister');
            $noOfYearsSpouseInElectrocalRegister=Input::get('noOfYearsSpouseInElectrocalRegister');
            $typeOfTitleDeed =Input::get('typeOfTitleDeed');
            $noOfAditionalDocumentForResident=Input::get('noOfAditionalDocumentForResident');
            $closeSchoolCount=Input::get('closeSchoolCount');  

          $category=new Resident_in_closeProximity();     
          $category->setNoOfAditionalDocumentForResident($noOfAditionalDocumentForResident);
          $category->setCloseSchoolCount($closeSchoolCount);
          $category->setTypeOfTitleDeed($typeOfTitleDeed);
          $category->setNoOfYearsSpouseInElectrocalRegister($noOfYearsSpouseInElectrocalRegister);
          $category->setNoOfYearsInElectrocalRegister($noOfYearsInElectrocalRegister);
          $category->setNic($guardianNic); 

          $result=DBCategory1Controller::editCategory1($category); 
          if($result){
               return "category 1 editted well"; 
          }else{
            return "category 1 not editted well";
          }  
    }



    public function postEditcategory2()
    {
         $gradeOfAdmission=Input::get("gradeOfAdmission");
          $gradeOfLeaving =Input::get("gradeOfLeaving");
          $pastPupilOrganizationMembership=Input::get("pastPupilOrganizationMembership");
          $eAchievementDetail=Input::get("eAchievementDetail");
          $cAchievementDetail =Input::get("cAchievementDetail");

          $eAchievementId=Input::get("eAchievementId");
          $cAchievementId=Input::get("cAchievementId");
          $schoolId=Input::get("schoolId");
          $nic=Input::get("nic");
                
            
                            
            $category2=new PastPupil();
            $category2->setSchoolId($schoolId);
            $category2->setNIC($nic);
            $category2->setGradeOfAdmission($gradeOfAdmission);
            $category2->setGradeOfLeaving($gradeOfLeaving);
            $category2->setPastPupilOrganizationMembership($pastPupilOrganizationMembership);
    
            $eAchievement=new PastPupil_achievement();
            $eAchievement->setSchoolId($schoolId);
            $eAchievement->setNIC($nic);
            $eAchievement->setAchievementID($eAchievementId);
            $eType='Education';
            $eAchievement->setType($eType);
            $eAchievement->setAchievementDetail($eAchievementDetail);

            $cAchievement=new PastPupil_achievement();
            $cAchievement->setSchoolId($schoolId);
            $cAchievement->setNIC($nic);
            $cAchievement->setAchievementID($cAchievementId);
            $cType='Co_curricular';
            $cAchievement->setType($cType);
            $cAchievement->setAchievementDetail($cAchievementDetail);
            
            $result=DBCategory2Controller::editCategory2($category2,$eAchievement,$cAchievement); 
          if($result){
               return "category 1 editted well"; 
          }else{
            return "category 1 not editted well";
          }  
    }

}
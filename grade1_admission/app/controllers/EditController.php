<?php

include('Model/parser.php');
class EditController extends BaseController{

	public function getIndex()
    {
        $username=$_GET['username'];
       	$guardian=DBGuardianController::getGuardian($username);
        $schools=DBCategory2Controller::getGuardianApplySchools($guardian->getNic());
        return View :: make ('G1SAS/EditCategoryDetail')->with('username',$username)->with('nic',$guardian->getNic())->with('schools',$schools);
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
    	
      }elseif ($type==1) {
            $schoolId=Input::get("schoolId");
            $category2=DBCategory2Controller::getCategory2($schoolId,$nic);
            $achieve=DBPPAchievementController::getPastPupilAch($schoolId,$nic);
            $eAch=$achieve[0];
            $cAch=$achieve[1];
            
            return View :: make ('G1SAS/category2edit')->with('category2',$category2)->with('eAch',$eAch)->with('cAch',$cAch);
                    

      }elseif ($type==2) {
        # code...
      }elseif ($type==3) {
          $hasCategory4=DBCategory4Controller::hasCategory4($nic);
            if($hasCategory4){
              $category4=DBCategory4Controller::getCategory4($nic);
              return View :: make ('G1SAS/category4edit')->with('category4',$category4);
            }else{
              return "you don't have category 4 type application";
            } 
          


      }elseif ($type==4) {
          $hasCategory5=DBCategory5Controller::hasCategory5($nic);
          if($hasCategory5){
              $category5=DBCategory5Controller::getCategory5($nic);
              return View :: make ('G1SAS/category5edit')->with('category5',$category5);
            }else{
              return "you don't have category 5 type application";
            } 
          
          
      }elseif ($type==5) {
          $hasCategory6=DBCategory6Controller::hasCategory6($nic);
          if($hasCategory6){
              $category6=DBCategory6Controller::getCategory6($nic);
              return View :: make ('G1SAS/category6edit')->with('category6',$category6);
            }else{
              return "you don't have category 6 type application";
            }  

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


     public function postEditcategory4()
    {
        $nic=Input::get('nic');
          $schoolId=Input::get("schoolId");
         
            $permenentEmployeePost=Input::get("permenentEmployeePost"); 
            $distanceFromResidentToWork= Input::get("distanceFromResidentToWork");
            $nowInDifficultSchoolService=Input::get("nowInDifficultSchoolService"); 
            $periodOfDifficultSchoolService =Input::get("nowInDifficultSchoolService");
            $servingPeriodOfSchool=Input::get("servingPeriodOfSchool");
            $closeSchoolCount=Input::get("closeSchoolCount");
            $year1RemLeave =  Input::get("year1RemLeave");    
            $year2RemLeave =Input::get("year2RemLeave");
            $year3RemLeave =Input::get("year3RemLeave");
            $year4RemLeave =Input::get("year4RemLeave");
            
            $category4=new EducationalServiceOfficer();

            $category4->setNic($nic);
            $category4->setPermenentEmployeePost($permenentEmployeePost);
            $category4->setCloseSchoolCount($closeSchoolCount);        
            $category4->setDistanceFromResidentToWork($distanceFromResidentToWork);
            $category4->setNowInDifficultSchoolService($nowInDifficultSchoolService);
            $category4->setPeriodOfDifficultSchoolService($periodOfDifficultSchoolService);
            $category4->setServingSchoolId($schoolId);
            $category4->setServingPeriodOfSchool($servingPeriodOfSchool);
            $category4->setYear1RemLeave($year1RemLeave);
            $category4->setYear2RemLeave($year2RemLeave);
            $category4->setYear3RemLeave($year3RemLeave);
            $category4->setYear4RemLeave($year4RemLeave);
                

            $result=DBCategory4Controller::editCategory4($category4); 
        
          if($result){
               return "category 4 editted well"; 
          }else{
            return "category 4 not editted well";
          }  
    }

 public function postEditcategory5()
    {
            $nic=Input::get('nic');
            $dateOfTransferReceived=Input::get("dateOfTransferReceived"); 
            $beforeWorkedPlace =Input::get("beforeWorkedPlace");
            $afterWorkedPlace= Input::get("afterWorkedPlace");
            $distanceOfTransfer=Input::get("distanceOfTransfer"); 
            $year1RemLeave =Input::get("year1RemLeave");
            $year2RemLeave=Input::get("year2RemLeave");
            $year3RemLeave =  Input::get("year3RemLeave");    
            $year4RemLeave =Input::get("year4RemLeave");
            $servicePeriod =Input::get("servicePeriod");
            $category5=new OfficerOnTransfer();
            $category5->setNic($nic);
            $category5->setDateOfTransferReceived($dateOfTransferReceived);
            $category5->setBeforeWorkedPlace($beforeWorkedPlace);        
            $category5->setAfterWorkedPlace($afterWorkedPlace);
            $category5->setDistanceOfTransfer($distanceOfTransfer);
            $category5->setYear1RemLeave($year1RemLeave);
            $category5->setYear2RemLeave($year2RemLeave);
            $category5->setYear3RemLeave($year3RemLeave);
            $category5->setYear4RemLeave($year4RemLeave);
            $category5->setServicePeriod($servicePeriod);
            $result=DBCategory5Controller::editCategory5($category5); 
        
            if($result){
                 return "category 5 editted well"; 
            }else{
              return "category 5 not editted well";
            }  
    }


    public function postEditcategory6()
    {
            $nic=Input::get('nic');
            $dateOfReturned=Input::get("dateOfReturned"); 
            $periodAboardStay =Input::get("PeriodOfStayAbroad");
            $reason= Input::get("reason");
            
            $category6=new PersonComingFromAbroad();
            $category6->setNic($nic);
            $category6->setDateOfReturned($dateOfReturned);
            $category6->setPerioadAbroadStay($periodAboardStay);
            $category6->setReasonsForStay($reason);
            $result=DBCategory6Controller::editCategory6($category6); 
        
            if($result){
                 return "category 6 editted well"; 
            }else{
              return "category 6 not editted well";
            }  
    }

    public function postChangep(){
        $username=Input::get("username");

        $guardian= DBGuardianController::getGuardian($username);
        $guardianNic=$guardian->getNic();
        $available=DBGuardianController::hasApplicant($guardianNic);
        if($available==false)
        {
            return "first you have to add your child to system";
        }else{
            $applicants=DBStudentApplicantController::getApplicantOfGuardian($guardianNic);
            return  View :: make ('G1SAS/changeSchoolPiorityB')->with('applicants',$applicants);
            
        }
    }

     public function postChangep1(){
        $applicantId=Input::get("applicant_id");
        $schools=DBSchoolController::getApplySchoolSet($applicantId);
        
        return  View :: make ('G1SAS/changeSchoolPiority')->with('schools',$schools)->with('applicantId',$applicantId);                    
    }

    public function postChangepf(){
        $schools=array();
        $applicantId=Input::get("applicantId");
        $size=Input::get("size");
        
        if($size>=1){
          $school1=new parser();
          $schoolId1=Input::get("schoolId1");
          $piority1=Input::get("piority1");
          $school1->setSchool_id($schoolId1);
          $school1->setOrderOfPreference($piority1);
          $schools[]=$school1;
          }
        
        if($size>=2){
          $school2=new parser();
          $schoolId2=Input::get("schoolId2");
          $piority2=Input::get("piority2");
          $school2->setSchool_id($schoolId2);
          $school2->setOrderOfPreference($piority2);
          $schools[]=$school2;
        }

        if($size>=3){
          $school3=new parser();
          $schoolId3=Input::get("schoolId3");
          $piority3=Input::get("piority3");
          $school3->setSchool_id($schoolId3);
          $school3->setOrderOfPreference($piority3);
          $schools[]=$school3;
        }
        
        if($size>=4){
          $school4=new parser();
          $schoolId4=Input::get("schoolId4");
          $piority4=Input::get("piority4");
          $school4->setSchool_id($schoolId4);
          $school4->setOrderOfPreference($piority4);
          $schools[]=$school4;
        }
        
        if($size>=5){
          $school5=new parser();
          $schoolId5=Input::get("schoolId5");
          $piority5=Input::get("piority5");
          $school5->setSchool_id($schoolId5);
          $school5->setOrderOfPreference($piority5);
          $schools[]=$school5; 
        }

        if($size>=6){  
          $school6=new parser();
          $schoolId6=Input::get("schoolId6");
          $piority6=Input::get("piority6");
          $school6->setSchool_id($schoolId6);
          $school6->setOrderOfPreference($piority6);
          
          $schools[]=$school6; 
          }        

        $result=DBApplicationController::changeSchoolPiority($applicantId,$schools); 
        if($result){
               return "piority level of schools changed "; 
        }else{
            return "piority level of schools not change well ";
        }               
    }
}
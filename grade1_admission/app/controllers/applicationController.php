<?php
/**
*  
*/
include("Model/studentApplicant.php");
include("Model/Guardian.php");
include("DatabaseController/DBGuardianController.php");
include("DatabaseController/DBStudentApplicantController.php");
include("DatabaseController/DBSchoolController.php");
include("DatabaseController/DBGNDDivisionController.php");
include("Model/GramaNiladariDivision.php");
include("DatabaseController/DBApplicationController.php");
include("DatabaseController/DBElectrocalListController.php");
include("DatabaseController/DBCategory1Controller.php");
include("DatabaseController/DBCategory4Controller.php");
include("DatabaseController/DBCategory5Controller.php");
include("DatabaseController/DBCategory6Controller.php");
include("DatabaseController/DBCategory2Controller.php");
include("DatabaseController/DBPPAchievementController.php");
include("Model/PastPupil_achievement.php");
include("Model/school.php");
include("Model/PastPupil.php");
include("Model/PersonComingFromAbroad.php");
include("Model/OfficerOnTransfer.php");
include("Model/EducationalServiceOfficer.php");
include("Model/Resident_in_closeProximity.php");
include("Model/application.php");

class ApplicationController extends BaseController
{
	
	public function getIndex()
	{	
        $username=Input::get("username");

        $guardian= DBGuardianController::getGuardian($username);
        $guardianNic=$guardian->getNic();
        $available=DBGuardianController::hasApplicant($guardianNic);
         if($available==false)
        {
            return "first you have to add your child to system";
        }else{
            $appplicants=DBStudentApplicantController::getApplicantOfGuardian($guardianNic);
            $schools=DBSchoolController::getAllSchool();
            $divisions=DBGNDDivisionController::getAllDivision();
            return  View :: make ('G1SAS/selection')->with('divisions',$divisions)->with ('schools',$schools)->with('applicants',$appplicants)->with('guardian',$guardian);
            	
		}
        
	}

    public function postNext(){
        
        $applicant_id= Input::get("applicant_id");
        $username = Input::get("guardian");
        

        $school1 = Input::get("school_name1");
        $school2 = Input::get("school_name2");
        $school3 = Input::get("school_name3");
        $school4 = Input::get("school_name4");
        $school5 = Input::get("school_name5");
        $school6 = Input::get("school_name6");
        $school7 = Input::get("school_name7");
        $school8 = Input::get("school_name8");
        $school9 = Input::get("school_name9");
        $school10 = Input::get("school_name10");
        $school11 = Input::get("school_name11");
        $school12 = Input::get("school_name12");        
        $school13 = Input::get("school_name13");
        $school14 = Input::get("school_name14");
        $school15 = Input::get("school_name15");
        $school16 = Input::get("school_name16");
        
        $division1=Input::get("Year1d");
        $division2=Input::get("Year2d");
        $division3=Input::get("Year3d");
        $division4=Input::get("Year4d");
        $division5=Input::get("Year5d");
        $division6=Input::get("Year6d");        
        

        $year1=Input::get("year1");
        $year2=Input::get("year2");
        $year3=Input::get("year3");
        $year4=Input::get("year4");
        $year5=Input::get("year5");
        $year6=Input::get("year6");
                        

        $dArray=array($division1,$division2,$division3,$division4,$division5,$division6);

        $yArray=array($year1,$year2,$year3,$year4,$year5,$year6);

        $schoolid_array=array($school1,$school2,$school3,$school4,$school5,$school6,$school7,$school8,$school9,$school10,$school11,$school12,$school13,$school14,$school15,$school16);

        $schools= array();

        $guardian=DBGuardianController::getGuardian($username);
        $applicant=DBStudentApplicantController::getApplicantById($applicant_id);
        
        foreach ($schoolid_array as $schoolid) {              
                $schools[] = DBSchoolController::getSchool($schoolid);               

        } 

        return View :: make ('G1SAS/SelectionType')->with ('schools',$schools)->with('dArray',$dArray)->with('yArray',$yArray)->with('guardian',$guardian)->with('applicant',$applicant);
    }

    public function postApplication()
    {
        
        $applicantId=Input::get("applicant_id");
        $orderOfPreference=Input::get("schoolPiority");
        $schoolId=Input::get("schoolId");
        $type=Input::get("type");
        $distance=Input::get("distanceT");
        $medium='';
        if(Input::get("MediumT")==0){
            $medium='Sinhala';
        }else{
            $medium='Tamil';

        }
        $guardianNic=Input::get("guardianNic");

        $schoolIds=array(Input::get("schoolId1"),Input::get("schoolId2"),Input::get("schoolId3"),Input::get("schoolId4"),Input::get("schoolId5"),Input::get("schoolId6"),Input::get("schoolId7"),Input::get("schoolId8"),Input::get("schoolId9"),Input::get("schoolId10"));
        $yearset=array(Input::get("year1"),Input::get("year2"),Input::get("year3"),Input::get("year4"),Input::get("year5"),Input::get("year6"));
        $divisionSet=array(Input::get("division1"),Input::get("division2"),Input::get("division3"),Input::get("division4"),Input::get("division5"),Input::get("division6"));
        $application=new application();
        $application->setOrderOfPreference($orderOfPreference);
        $application->setType($type);
        $application->setSchool_id($schoolId);
        $application->setDistance($distance);
        $application->setMedium($medium);
        $application->setApplicant_id($applicantId);



        switch ($type) {
            case 0:
                return  View :: make ('G1SAS/category1')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;
            case 1: // never reached because "a" is already matched with 0
               return  View :: make ('G1SAS/category2')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;
            case 2:
                return  View :: make ('G1SAS/category3')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;
            case 3: // never reached because "a" is already matched with 0
                return  View :: make ('G1SAS/category4')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;
            case 4:
                return  View :: make ('G1SAS/category5')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;
            case 5:
                return  View :: make ('G1SAS/category6')->with('application',$application)->with('schools',$schoolIds)->with('yArray',$yearset)->with('guardianNic',$guardianNic)->with('dArray',$divisionSet);
                break;    
        }   
    }


    public function postAddcategory()
    {
      //return "erer";
      //$application=Input::get("application");
      
        $type=Input::get("typeOfApplication");
        $orderOfPreference=Input::get("orderOfPreference");
        $schoolId=Input::get("schoolId");
        $distance=Input::get("distance");
        $medium=Input::get("medium");
        $applicationId=DBApplicationController::getNextApplicationId();
        $applicantId=Input::get("applicantId");
        $guardianNic=Input::get("guardianNic");
        $application=new Application();
        $application->setSchool_id($schoolId);
        $application->setApplication_id($applicationId);
        $application->setApplicant_id($applicantId);
        $application->setType($type);
        $application->setMedium($medium);
        $application->setOrderOfPreference($orderOfPreference);
        $application->setDistance($distance);
        $application->setMark(0);

        $schoolIds=array(Input::get("schoolId1"),Input::get("schoolId2"),Input::get("schoolId3"),Input::get("schoolId4"),Input::get("schoolId5"),Input::get("schoolId6"),Input::get("schoolId7"),Input::get("schoolId8"),Input::get("schoolId9"),Input::get("schoolId10"));
        $yArray=array(Input::get("year1"),Input::get("year2"),Input::get("year3"),Input::get("year4"),Input::get("year5"),Input::get("year6"));
        $dArray=array(Input::get("division1"),Input::get("division2"),Input::get("division3"),Input::get("division4"),Input::get("division5"),Input::get("division6"));

          $db=Connection::getInstance();
          $mysqli=$db->getConnection();
        

        if($type==0){
             
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
              $resultC1=DBApplicationController::addCategory1($application,$category,$schoolIds,$yArray,$dArray,$guardianNic); 
             
              if($resultC1){
                return "application addded successfully";   
              }else{
                return "application not added successfully";
              }
              


        }elseif ($type==1) {
           
            $gradeOfAdmission=Input::get("gradeOfAdmission");
            $gradeOfLeaving =Input::get("gradeOfLeaving");
            $pastPupilOrganizationMembership=Input::get("pastPupilOrganizationMembership");

            $eAchievementDetail=Input::get("eAchievementDetail");
            $cAchievementDetail =Input::get("cAchievementDetail");
            $eAchievementId=DBPPAchievementController::getNexPastPupilAId($guardianNic);
            $cAchievementId=$eAchievementId+1;
                
            $guardian=DBGuardianController::getGuardianByNic($guardianNic);
            

                            
            $category2=new PastPupil();
            $category2->setSchoolId($schoolId);
            $category2->setNIC($guardianNic);
            $category2->setName($guardian->getFirstName());
            $category2->setGradeOfAdmission($gradeOfAdmission);
            $category2->setGradeOfLeaving($gradeOfLeaving);
            $category2->setPastPupilOrganizationMembership($pastPupilOrganizationMembership);
    
            $eAchievement=new PastPupil_achivement();
            $eAchievement->setSchoolId($schoolId);
            $eAchievement->setNIC($guardianNic);
            $eAchievement->setAchievementID($eAchievementId);
            $eType='Education';
            $eAchievement->setType($eType);
            $eAchievement->setAchievementDetail($eAchievementDetail);

            

            $cAchievement=new PastPupil_achivement();
            $cAchievement->setSchoolId($schoolId);
            $cAchievement->setNIC($guardianNic);
            $cAchievement->setAchievementID($cAchievementId);
            $cType='Co_curricular';
            $cAchievement->setType($cType);
            $cAchievement->setAchievementDetail($eAchievementDetail);
            


             $resultC1=DBApplicationController::addCategory2($application,$category2,$schoolIds,$yArray,$dArray,$guardianNic,$eAchievement,$cAchievement); 
            
             if($resultC1){
                return "type 2 application addded successfully";   
            }else{
              return "type 2 application not addded successfully";   
              }
              
        }elseif ($type==2) {
            
            $firstName1=Input::get("firstName1");
            $lastName1 =Input::get("lastName1");
            $admissionNumber1=Input::get("admissionNumber1");
            $gradeAdmission1=Input::get("firstName1");
            $lastName1 =Input::get("gradeAdmission1");
            $dateOfAdmission1=Input::get("dateOfAdmission1");
            $eAchievement1=Input::get("eAchievement1");
            $donationDetail1=Input::get("donationDetail1");
            $eAchievementId1=1;
            $query="select eAchievementId from cur_pupil_educationalAchievement decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $eAchievementId1=(int)$row["eAchievementId"]+1;
                }
            }
            $donationId1=1;
            $query="select donationId from cur_pupil_donation decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $donationId1=(int)$row["donationId"]+1;
                }
            } 


            $firstName2=Input::get("firstName2");
            $lastName2 =Input::get("lastName2");
            $admissionNumber2=Input::get("admissionNumber2");
            $gradeAdmission2=Input::get("firstName2");
            $lastName2 =Input::get("gradeAdmission2");
            $dateOfAdmission2=Input::get("dateOfAdmission2");
            $eAchievement2=Input::get("eAchievement2");
            $donationDetail2=Input::get("donationDetail2");
            $eAchievementId2=1;
            $query="select eAchievementId from cur_pupil_educationalAchievement decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $eAchievementId2=(int)$row["eAchievementId"]+1;
                }
            }
            $donationId2=1;
            $query="select donationId from cur_pupil_donation decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $donationId2=(int)$row["donationId"]+1;
                }
            } 


            $firstName3=Input::get("firstName3");
            $lastName3 =Input::get("lastName3");
            $admissionNumber3=Input::get("admissionNumber3");
            $gradeAdmission3=Input::get("firstName3");
            $lastName3 =Input::get("gradeAdmission3");
            $dateOfAdmission3=Input::get("dateOfAdmission3");
            $eAchievement3=Input::get("eAchievement3");
            $donationDetail3=Input::get("donationDetail3");
            $eAchievementId3=1;
            $query="select eAchievementId from cur_pupil_educationalAchievement decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $eAchievementId3=(int)$row["eAchievementId"]+1;
                }
            }
            $donationId3=1;
            $query="select donationId from cur_pupil_donation decs  where admissionNumber='$admissionNumber1' limit 1;";
            $result =$mysqli->query($query);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    $donationId3=(int)$row["donationId"]+1;
                }
            } 

            //insert in to achiement and donation table  



            return $donationId3." ".$donationDetail3."bfhsdkjl";



            
        }elseif($type==3){
            $permenentEmployeePost=Input::get("permenentEmployeePost"); 
            $totalServicePeriod =Input::get("totalServicePeriod");
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

            $category4->setNic($guardianNic);
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
            
            $resultC1=DBApplicationController::addCategory4($application,$category4,$schoolIds,$yArray,$dArray,$guardianNic); 
            
            if($resultC1){
                return "type 4 application addded successfully";   
            }else{
              return "type 4 application not addded successfully";   
              }
              

        }elseif ($type==4) {
            
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
            $category5->setNic($guardianNic);
            $category5->setDateOfTransferReceived($dateOfTransferReceived);
            $category5->setBeforeWorkedPlace($beforeWorkedPlace);        
            $category5->setAfterWorkedPlace($afterWorkedPlace);
            $category5->setDistanceOfTransfer($distanceOfTransfer);
            $category5->setYear1RemLeave($year1RemLeave);
            $category5->setYear2RemLeave($year2RemLeave);
            $category5->setYear3RemLeave($year3RemLeave);
            $category5->setYear4RemLeave($year4RemLeave);
            $category5->setServicePeriod($servicePeriod);
            
            $resultC1=DBApplicationController::addCategory5($application,$category5,$schoolIds,$yArray,$dArray,$guardianNic); 
         
            if($resultC1){
                return "type 5 application addded successfully";   
            }else{
              return "type 5 application not addded successfully";   
              }
        }elseif ($type==5) {
            $dateOfReturned=Input::get("dateOfReturned"); 
            $periodAboardStay =Input::get("PeriodOfStayAbroad");
            $reason= Input::get("reason");
            
            $category6=new PersonComingFromAbroad();
            $category6->setNic($guardianNic);
            $category6->setDateOfReturned($dateOfReturned);
            $category6->setPerioadAbroadStay($periodAboardStay);
            $category6->setReasonsForStay($reason);
        
            $resultC1=DBApplicationController::addCategory6($application,$category6,$schoolIds,$yArray,$dArray,$guardianNic); 
            
             
            if($resultC1){
                return "type 6 application addded successfully";   
            }else{
              return "type 6 application not addded successfully";   
              }
        
        }

      //application eka add wen ona/////gurdian waguwata sambanda wela add wen on catogary 1 
    }


}

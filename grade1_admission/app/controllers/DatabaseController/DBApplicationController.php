<?php

class DBApplicationController{

	public static function addApplication($application)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$application->getSchool_id();
        $application_id=$application->getApplication_id();
        $applicant_id=$application->getApplicant_id();
        $type=$application->getType();
        $medium=$application->getMedium();
        $orderOfPreference=$application->getOrderOfPreference();
        $distance=$application->getDistance();
        $isVerified=false;
		$query="insert into application values('$application_id','$schoolId','$applicant_id','$medium','$type','$orderOfPreference','$distance','$isVerified'); ";
	    return $mysqli->query($query);       

	}


    public static function changeSchoolPiority($applicantId,$schools)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
         $mysqli->autocommit(FALSE);
        foreach ($schools as $school) {
            $schoolId=$school->getSchool_id();
            $orderOfPreference=$school->getOrderOfPreference();
            $query="update application set orderOfPreference='$orderOfPreference' where schoolId='$schoolId' and applicantId='$applicantId'; ";
            $result=$mysqli->query($query);
            if($result==false){
                $mysqli->rollback();
                $mysqli->commit();
                return  false;
            }
        }

        $mysqli->commit();
        return  true;

    }


	public static function getNextApplicationId(){
		$applicantionId='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select application_id from application order by application_id desc limit 1;";
        $result =$mysqli->query($query);

         if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               $applicationId=(int)$row["application_id"]+1;
            }
         }

         return $applicationId;

	}

    public static function verifyApplication($application_id){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="UPDATE application SET isverified='1' where application_id='$application_id';";
        $result =$mysqli->query($query);
         return $result;

    }

    public static function getApplicationSet($schoolId,$type){
        
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from application where schoolId='$schoolId' and typeOfApplication='$type';";
        $result =$mysqli->query($query);
        $applicationset = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $application=new application();
                $application->setSchool_id($row["schoolId"]);
                $application->setApplication_id($row["application_id"]);
                $application->setApplicant_id($row["applicantId"]);
                $application->setType($row["typeOfApplication"]);
                $application->setMedium($row["medium"]);
                $application->setOrderOfPreference($row["orderOfPreference"]);
                $application->setDistance($row["distanceToSchool"]);
                $application->setIsverified($row["isverified"]);
                $applicationset[]=$application;
            }
         }

         return $applicationset;        

    }

    public static function getApplication($application_id){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from application where application_id='$application_id';";
        $result =$mysqli->query($query);
        $application=new application();

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {         
                $application->setSchool_id($row["schoolId"]);
                $application->setApplication_id($row["application_id"]);
                $application->setApplicant_id($row["applicantId"]);
                $application->setType($row["typeOfApplication"]);
                $application->setMedium($row["medium"]);
                $application->setOrderOfPreference($row["orderOfPreference"]);
                $application->setDistance($row["distanceToSchool"]);
                $application->setIsverified($row["isverified"]);
                
            }
         }

         return $application;        

    }

    public static function getAllApplications(){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from application;";
        $result =$mysqli->query($query);
        $application_set=array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {  
                $application=new Application();       
                $application->setSchool_id($row["schoolId"]);
                $application->setApplication_id($row["application_id"]);
                $application->setApplicant_id($row["applicantId"]);
                $application->setType($row["typeOfApplication"]);
                $application->setMedium($row["medium"]);
                $application->setOrderOfPreference($row["orderOfPreference"]);
                $application->setDistance($row["distanceToSchool"]);
                $application->setIsverified($row["isverified"]);
                $application_set[]=$application;
                
            }
         }

         return $application_set;        

    }

    public static function getAllApplicationIds(){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select application_id from application;";
        $result =$mysqli->query($query);
        $application_ids=array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {         
                $application_ids[]=$row["application_id"];
            }
         }

         return $application_ids;        

    }

    public static function getUnverifiedApplicationSetIds($schoolId,$type){
        
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select application_id from application where schoolId='$schoolId' and typeOfApplication='$type' and isverified='0';";
        $result =$mysqli->query($query);
        $applicationidset = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $applicationidset[]=$row["application_id"];
            }
         }

         return $applicationidset;        

    }


	public static function addCategory1($application,$category1,$schoolIds,$yArray,$dArray,$guardianNic){
	    $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
        if($applicantResult){
             
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
             
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){
                    $resultC=true;
                    $resultCD=DBGuardianController::hasCategory1Detail($guardianNic);  
                    if($resultCD==false){
                        $resultC=DBCategory1Controller::addCategory1($category1);
                    }
                    if($resultC){
                        $mysqli->commit();      
                        return true;
                    }else{
                        $mysqli->rollback();
                        $mysqli->commit();      
                        return false;
                    }
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
	}

    
    public static function addCategory4($application,$category4,$schoolIds,$yArray,$dArray,$guardianNic){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
       
        if($applicantResult){
             
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                      
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){


                    $resultC=true;
                    $resultCD=DBGuardianController::hasCategory4Detail($guardianNic);  
                    if($resultCD==false){

                        $resultC=DBCategory4Controller::addCategory4($category4);
                    }
                    if($resultC){
                        $mysqli->commit();      
                        return true;
                    }else{
                        $mysqli->rollback();
                        $mysqli->commit();      
                        return false;
                    }
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
    }


    public static function addCategory5($application,$category5,$schoolIds,$yArray,$dArray,$guardianNic){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
       
        if($applicantResult){
            
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                     
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){


                    $resultC=true;
                    $resultCD=DBGuardianController::hasCategory5Detail($guardianNic);  
                    if($resultCD==false){

                        $resultC=DBCategory5Controller::addCategory5($category5);

                    }
                    if($resultC){
                        $mysqli->commit();      
                        return true;
                    }else{
                        $mysqli->rollback();
                        $mysqli->commit();      
                        return false;
                    }
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
    }

    


    public static function addCategory6($application,$category6,$schoolIds,$yArray,$dArray,$guardianNic){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
       
        if($applicantResult){
            
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                     
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){


                    $resultC=true;
                    $resultCD=DBGuardianController::hasCategory6Detail($guardianNic);  
                    if($resultCD==false){

                        $resultC=DBCategory6Controller::addCategory6($category6);
                      
                    }
                    if($resultC){
                        $mysqli->commit();      
                        return true;
                    }else{
                        $mysqli->rollback();
                        $mysqli->commit();      
                        return false;
                    }
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
    }



     public static function addCategory2($application,$category2,$schoolIds,$yArray,$dArray,$guardianNic,$eAchievement,$cAchievement){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
        
        if($applicantResult){
            
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                      
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){
                    $resultC=true;
                    $resultEA=true;
                    $resultCA=true;
                    $resultCD=DBGuardianController::hasCategory2Detail($guardianNic,$application->getSchool_id());  
                   
                    if($resultCD==false){

                        $resultC=DBCategory2Controller::addCategory2($category2);
                        
                        $resultEA=DBPPAchievementController::addPPAchievement($eAchievement);
                        
                        $resultCA=DBPPAchievementController::addPPAchievement($cAchievement);

                    }
                    if($resultC and $resultEA and $resultCA){
                            
                            $mysqli->commit();      
                            return true;
                        
                    }else{
                        $mysqli->rollback();
                        $mysqli->commit();      
                        return false;
                    }
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
    }
    

    public static function addCategory3($application,$schoolIds,$yArray,$dArray,$guardianNic,$ppo,$achievements,$donations,$siblings){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $mysqli->autocommit(FALSE);
        $applicantResult=DBApplicationController::addApplication($application);
        return $ppo[1]->getDateOfAdmission();
        if($applicantResult){
         
             $resultSchoolSet=true;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());             
             if($isApplicanthasCSS){
                //do not need add school set

             }else{
               // return $schoolIds[1];
                
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($application->getApplicant_id(),$schoolIds);
             }
             if($resultSchoolSet){
                
                $resultEL=true;

                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                        
                }else{

                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){
                    

                    for($i=0;$i<3;$i++){    
                        $resultC=true;
                        $resultEA=true;
                        $resultD=true;
                        $resultS=true;
                        $resultCD=DBGuardianController::hasCategory3Detail($ppo[$i]->getAdmissionNumber(),$application->getSchool_id());  
                        if($resultCD==false){

                            $resultC=DBCategory3Controller::addCategory3($ppo[$i]);
                          
                            $resultEA=DBCPAchievementController::addCPAchievement($achievements[$i]);
                             
                            $resultD=DBCurPupilDonationController::addCPDonation($donations[$i]);
                            
                            $resultS=DBSiblingController::addSibling($siblings[$i]);

                        }
                        if($resultC and $resultEA and $resultC and $resultS){
                            
                        
                        }else{
                            $mysqli->rollback();
                            $mysqli->commit();      
                            return false;
                        }

                    }
                    $mysqli->commit();      
                    return true;
                    
                }else{
                    $mysqli->rollback();
                    $mysqli->commit();      
                    return FALSE;   
                }
             }else{
                $mysqli->rollback();
                $mysqli->commit();      
                return FALSE;
            }
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
    }
    

}
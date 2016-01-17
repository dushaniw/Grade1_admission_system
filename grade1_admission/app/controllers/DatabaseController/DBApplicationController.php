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



}
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

}
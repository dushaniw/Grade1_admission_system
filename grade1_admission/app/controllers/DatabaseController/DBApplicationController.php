<?php

class DBApplicationController{

	public static function addApplication($application)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="insert into application values('$application->getApplication_id()','$application->getSchool_id()','$application->getApplicant_id()','$application->getMedium()','$application->getType()','$application->getOrderOfPreference()','$application->getDistance()',false); ";
	    return $mysqli->query($query);       

	}

	public static function getNextApplicationId(){
		$applicantionId='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select application_id from application decs limit 1;";
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
             $resultSchoolSet=TRUE;
             $isApplicanthasCSS=DBSchoolController::isApplicanthasCSS($application->getApplicant_id());
             if($isApplicanthasCSS){
                //do not need add school set
             }else{
                $resultSchoolSet=DBSchoolController::addCloseSchoolSet($schoolIds,$application>getApplicant_id());
             }
             if($resultSchoolSet){
                $resultEL=TRUE;
                $isGuardianHasEL=DBGuardianController::isGuardianHasEL($guardianNic);
                if($isGuardianHasEL){
                //do not need add EL
                }else{
                    $resultEL=DBElectrocalListController::addElectrocalListDetail($dArray,$yArray,$guardianNic);
                }
                if($resultEL){
                    $resultC=DBCategory1Controller::addCategory1($category);
                    if($result){
                        $mysqli->commit();      
                        return TRUE;
                  
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
        }else{
            $mysqli->rollback();
            $mysqli->commit();      
            return FALSE;
        }
	}

}
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
        

        $mysqli->query('UPDATE `table` SET `col`=2');
$mysqli->query('UPDATE `table1` SET `col1`=3;');
$mysqli->commit();		
      
	}

}
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

	public static function addCategory1Application($application,$category1,$schoolIds,$yArray,dArray,$guardianNic){
			
      
	}

}
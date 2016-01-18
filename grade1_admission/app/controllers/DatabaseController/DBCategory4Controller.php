<?php

class DBCategory4Controller{
	public static function addCategory4($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        
        $nic=$category->getNic();
        $permenentEmployeePost=$category->getPermenentEmployeePost();
		$closeSchoolCount=$category->getCloseSchoolCount();        
		$distanceFromResidentToWork=$category->getDistanceFromResidentToWork();
		$nowInDifficultSchoolService=$category->getNowInDifficultSchoolService();
		$periodOfDifficultSchoolService=$category->getPeriodOfDifficultSchoolService();
		$servingSchoolId=$category->getServingSchoolId();
		$servingPeriodOfSchool=$category->getServingPeriodOfSchool();
        $year1RemLeave=$category->getYear1RemLeave();
        $year2RemLeave=$category->getYear2RemLeave();
        $year3RemLeave=$category->getYear3RemLeave();
        $year4RemLeave=$category->getYear4RemLeave();
	   	$query="insert into educationalServiceOfficer values('$nic','$permenentEmployeePost','$closeSchoolCount','$distanceFromResidentToWork','$nowInDifficultSchoolService','$periodOfDifficultSchoolService','$servingSchoolId','$servingPeriodOfSchool','$year1RemLeave','$year2RemLeave','$year3RemLeave','$year4RemLeave')";
       	return $mysqli->query($query);
	}

	public static function getCategory4($NIC){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from educationalServiceOfficer where NIC='$NIC';";
        $result=$mysqli->query($query);
        $category=new EducationalServiceOfficer();
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               	$category->setNic($row["NIC"]);
		        $category->setPermenentEmployeePost($row["permenentEmployeePost"]);
				$category->setCloseSchoolCount($row["closeSchoolCount"]);        
				$category->setDistanceFromResidentToWork($row["distanceFromResidentToWork"]);
				$category->setNowInDifficultSchoolService($row["nowInDifficultSchoolService"]);
				$category->setPeriodOfDifficultSchoolService($row["periodOfDifficultSchoolService"]);
				$category->setServingSchoolId($row["servingSchoolId"]);
				$category->setServingPeriodOfSchool($row["servingPeriodOfSchool"]);
		        $category->setYear1RemLeave($row["year1RemLeave"]);
		        $category->setYear2RemLeave($row["year2RemLeave"]);
		        $category->setYear3RemLeave($row["year3RemLeave"]);
		        $category->setYear4RemLeave($row["year4RemLeave"]);
            }
         }
       	return $category;
	}


public static function editCategory4($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();

        $nic=$category->getNic();
        $permenentEmployeePost=$category->getPermenentEmployeePost();
		$closeSchoolCount=$category->getCloseSchoolCount();        
		$distanceFromResidentToWork=$category->getDistanceFromResidentToWork();
		$nowInDifficultSchoolService=$category->getNowInDifficultSchoolService();
		$periodOfDifficultSchoolService=$category->getPeriodOfDifficultSchoolService();
		$servingSchoolId=$category->getServingSchoolId();
		$servingPeriodOfSchool=$category->getServingPeriodOfSchool();
        $year1RemLeave=$category->getYear1RemLeave();
        $year2RemLeave=$category->getYear2RemLeave();
        $year3RemLeave=$category->getYear3RemLeave();
        $year4RemLeave=$category->getYear4RemLeave();
	   	$query="update educationalServiceOfficer set permenentEmployeePost='$permenentEmployeePost',closeSchoolCount='$closeSchoolCount',distanceFromResidentToWork='$distanceFromResidentToWork',nowInDifficultSchoolService='$nowInDifficultSchoolService',periodOfDifficultSchoolService='$periodOfDifficultSchoolService',servingSchoolId='$servingSchoolId',servingPeriodOfSchool='$servingPeriodOfSchool',year1RemLeave='$year1RemLeave',year2RemLeave='$year2RemLeave',year3RemLeave='$year3RemLeave',year4RemLeave='$year4RemLeave' where NIC='$nic'";
       	return $mysqli->query($query);
	}



	public static function hasCategory4($NIC){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from educationalServiceOfficer where NIC='$NIC';";
        $result=$mysqli->query($query);
        if ($result->num_rows > 0) {
            return true;
         }
       	return false;
	}


	public static function getGuardianTeachesSchools($guardianNic){
        $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $query="select distinct servingSchoolId from educationalServiceOfficer where NIC='$guardianNic'";
            $result=$mysqli->query($query);
            $schoolIdA=array();
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {          
                 $schoolIdA[]=$row["servingSchoolId"];
                 
                }
            }
            return $schoolIdA;
    }

}
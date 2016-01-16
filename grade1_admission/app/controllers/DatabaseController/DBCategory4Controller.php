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

}
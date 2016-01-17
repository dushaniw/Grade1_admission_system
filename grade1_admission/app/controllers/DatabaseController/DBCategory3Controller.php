<?php
/**
* 
*/
class DBCategory3Controller
{	
	public static function addCategory3($category){
	
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$category->getSchoolId();
        $admissionNumber=$category->getAdmissionNumber();
       	$firstName=$category->getFirstName();
       	$lastName= $category-> getLastName();
       	$dateOfAdmission=$category->getDateOfAdmission();
       	$gradeOfAdmission=$category->getGradeOfAdmission();
       	$query="insert into CurrentStudent values('$schoolId','$admissionNumber','$firstName','$lastName','$dateOfAdmission','$gradeOfAdmission')";
       	return $mysqli->query($query);
	
	}
}

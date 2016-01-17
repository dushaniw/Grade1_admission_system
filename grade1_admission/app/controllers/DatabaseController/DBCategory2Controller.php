<?php
class DBCategory2Controller{

public static function addCategory2($category){
		    $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$category->getSchoolId();
        $nic=$category->getNIC();
       	$name=$category->getName();
       	$gradeOfAdmission= $category-> getGradeOfAdmission();
       	$gradeOfLeaving=$category->getGradeOfLeaving();
       	$pastPupilOrganizationMembership=$category->getPastPupilOrganizationMembership();
       	$query="insert into pastPupil values('$schoolId','$nic','$name','$gradeOfAdmission','$gradeOfLeaving','$pastPupilOrganizationMembership')";
       	return $mysqli->query($query);
	}
}
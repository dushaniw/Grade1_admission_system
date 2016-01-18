<?php
class DBCategory2Controller{

    public static function addCategory2($category){
    		    $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $schoolId=$category->getSchoolId();
            $nic=$category->getNIC();
           	
           	$gradeOfAdmission= $category-> getGradeOfAdmission();
           	$gradeOfLeaving=$category->getGradeOfLeaving();
           	$pastPupilOrganizationMembership=$category->getPastPupilOrganizationMembership();
           	$query="insert into pastPupil values('$schoolId','$nic','$gradeOfAdmission','$gradeOfLeaving','$pastPupilOrganizationMembership')";
           	return $mysqli->query($query);
    }

    public static function getCategory2($schoolId,$nic){
            $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $query="select * from pastpupil where NIC='$nic' and schoolId='$schoolId'; ";
            $result=$mysqli->query($query);
            $category=new PastPupil();
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  
                  $category->setSchoolId($row["schoolId"]);
                  $category->setNIC($row["NIC"]);
                  $category-> setGradeOfAdmission($row["gradeOfAdmission"]);
                  $category->setGradeOfLeaving($row["gradeOfLeaving"]);
                  $category->setPastPupilOrganizationMembership($row["pastPupilOrganizationMembership"]);
                }
            }
            return $category;
    }
}
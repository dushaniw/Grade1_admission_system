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

  public static function getCategory3($schoolId,$admissionNumber){
  
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from CurrentStudent where schoolId='$schoolId' and admissionNumber='$admissionNumber';";
        $result=$mysqli->query($query);
        $category=new CurrentStudent();
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
              $category->setSchoolId($row["schoolId"]);
              $category->setAdmissionNumber($row["admissionNumber"]);
              $category->setFirstName($row["c_firstName"]);
              $category->setLastName($row["c_lastName"]);
              $category->setDateOfAdmission($row["dateOfAdmission"]);
              $category->setGradeOfAdmission($row["gradeOfAdmission"]);
            }
        }
        return $category;
  
  }
}

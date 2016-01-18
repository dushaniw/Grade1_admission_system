<?php
class DBSiblingController{
 	public static function addSibling($sibling){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $admissionNumber=$sibling->getAdmissionNumber();
        $applicantId=$sibling->getApplicantId();
        $schoolId=$sibling->getSchoolId();  
        $query="insert into sibling values('$admissionNumber','$applicantId','$schoolId')";
        return $mysqli->query($query);
    }

    public static function getSiblings($applicantId){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from sibling where applicantId='$applicantId';";
        $result=$mysqli->query($query);
        $siblings=array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            	$sibling=new Sibling();
               	$sibling->setAdmissionNumber($row["admissionNumber"]);
		        $sibling->setApplicantId($row["applicantId"]);
		        $sibling->setSchoolId($row["schoolId"]);
		        $siblings[]=$sibling;
            }
        }        
        return $siblings;
    }
}

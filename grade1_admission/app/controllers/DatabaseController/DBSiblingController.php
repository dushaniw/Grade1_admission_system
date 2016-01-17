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
}

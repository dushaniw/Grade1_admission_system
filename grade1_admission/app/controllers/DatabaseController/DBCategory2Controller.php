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



    public static function editCategory2($category,$eAchievement,$cAchievement){
            $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $mysqli->autocommit(FALSE);
                      
            $schoolId=$category->getSchoolId();
            $nic=$category->getNIC(); 
            $gradeOfAdmission= $category-> getGradeOfAdmission();
            $gradeOfLeaving=$category->getGradeOfLeaving();
            $pastPupilOrganizationMembership=$category->getPastPupilOrganizationMembership();
            $query="update pastPupil set gradeOfAdmission='$gradeOfAdmission',gradeOfLeaving='$gradeOfLeaving', pastPupilOrganizationMembership='$pastPupilOrganizationMembership' where schoolId='$schoolId' and NIC='$nic'";
            $result1=$mysqli->query($query);

            $result2=DBPPAchievementController::editPPAchievement($cAchievement);
            
            $result3=DBPPAchievementController::editPPAchievement($eAchievement);
           
            if($result1 and $result2 and $result3){
              $mysqli->commit();
              return true;
            }else{
              $mysqli->rollback();
              $mysqli->commit();
              return false;
            }


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

    public static function getGuardianApplySchools($guardianNic){
        $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $query="select distinct schoolId from pastPupil where NIC='$guardianNic'";
            $result=$mysqli->query($query);
            $schoolIdA=array();
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {          
                 $schoolIdA[]=$row["schoolId"];
                 
                }
            }
            return $schoolIdA;

    }
}
<?php
class DBCPAchievementController{
	public static function getNexCurrentPupilAId($admissionNumber){
		$currentPupilAID='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select eAchievementId from cur_pupil_educationalAchievement where admissionNumber='$admissionNumber' order by eAchievementId desc limit 1;";
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               $currentPupilAID=(int)$row["eAchievementId"]+1;
            }
         }

         return $currentPupilAID;

	}

    public static function addCPAchievement($achievement){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$achievement->getSchoolId();
        $admissionNumber=$achievement->getAdmissionNumber();
        $achievementId=$achievement->getAchievementID();
        $achievementDetail=$achievement->getAchievementDetail();  
        $query="insert into cur_pupil_educationalAchievement values('$schoolId','$admissionNumber','$achievementId','$achievementDetail')";
        return $mysqli->query($query);
    }

    public static function getCPAchievements($schoolId,$admissionNumber){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from cur_pupil_educationalAchievement where schoolId='$schoolId' and admissionNumber='$admissionNumber';";
        $result=$mysqli->query($query);
        $cur_ach_set=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $achievement=new cur_pupil_educationalAchievement();
                $achievement->setSchoolId($row["schoolId"]);
                $achievement->setAdmissionNumber($row["admissionNumber"]);
                $achievement->setAchievementID($row["eAchievementId"]);
                $achievement->setAchievementDetail($row["achievementDetail"]); 
                $cur_ach_set[]=$achievement;
            }
        }
        return $cur_ach_set;
    }

}
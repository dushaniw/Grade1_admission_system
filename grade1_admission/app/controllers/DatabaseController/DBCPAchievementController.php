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

}
<?php
class DBPPAchievementController{
	public static function getNexPastPupilAId($guardianNic){
		$pastPupilAID='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select AchievementId from paspupil_Achievement where NIC='$guardianNic' order by AchievementId desc limit 1;";
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               $pastPupilAID=(int)$row["AchievementId"]+1;
            }
         }

         return $pastPupilAID;

	}


    public static function addPPAchievement($achievement){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$achievement->getSchoolId();
        $nic=$achievement->getNIC();
        $achievementId=$achievement->getAchievementID();
        $type=$achievement->getType();
        $achievementDetail=$achievement->getAchievementDetail();
        $query="insert into paspupil_Achievement values('$schoolId','$nic','$achievementId','$type','$achievementDetail')";
        return $mysqli->query($query);
    }

}
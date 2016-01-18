<?php
class DBPPAchievementController{
	public static function getNexPastPupilAId($guardianNic){
		$pastPupilAID='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select AchievementId from pastpupil_Achievement where NIC='$guardianNic' order by AchievementId desc limit 1;";
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               $pastPupilAID=(int)$row["AchievementId"]+1;
            }
         }

         return $pastPupilAID;

	}

    public static function getPastPupilAch($schoolid,$guardianNic){
        $pastPupilAID='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from pastpupil_Achievement where NIC='$guardianNic' and schoolId='$schoolid'";
        $result =$mysqli->query($query);     
        $ach_set=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $achievement=new PastPupil_achievement();
                $achievement->setSchoolId($row["schoolId"]);
                $achievement->setNIC($row["NIC"]);
                $achievement->setAchievementID($row["AchievementId"]);
                $achievement->setType($row["type"]);
                $achievement->setAchievementDetail($row["achievementDetail"]);
                $ach_set[]=$achievement;
            }
         }
        return $ach_set;

    }

    public static function addPPAchievement($achievement){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$achievement->getSchoolId();
        $nic=$achievement->getNIC();
        $achievementId=$achievement->getAchievementID();
        $type=$achievement->getType();
        $achievementDetail=$achievement->getAchievementDetail();
        $query="insert into pastpupil_Achievement values('$schoolId','$nic','$achievementId','$type','$achievementDetail')";
        return $mysqli->query($query);
    }

    public static function editPPAchievement($achievement){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$achievement->getSchoolId();
        $nic=$achievement->getNIC();
        $achievementId=$achievement->getAchievementID();
        $type=$achievement->getType();
        $achievementDetail=$achievement->getAchievementDetail();
        $query="update pastpupil_Achievement set type='$type', achievementDetail='$achievementDetail' where schoolId='$schoolId' and NIC='$nic' and  AchievementId='$achievementId'";
        return $mysqli->query($query);
    }

}
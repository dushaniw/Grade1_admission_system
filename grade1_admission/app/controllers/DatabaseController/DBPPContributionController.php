<?php
include(app_path().'/controllers/Model/PastPupil_contribution.php');

class DBPPContributionController{
	public static function getPastPupilCon($schoolid,$guardianNic){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from pastpupil_contribution where NIC='$guardianNic' and schoolId='$schoolid';";
        $result =$mysqli->query($query);
        $con_set=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $contribution=new PastPupil_contribution();
                $contribution->setSchoolId($row["schoolId"]);
                $contribution->setNIC($row["NIC"]);
                $contribution->setContributionId($row["contributionId"]);
                $contribution->setContributionDetail($row["contributionDtail"]);
                $con_set[]=$contribution;
            }
         }

         return $con_set;

    }
}
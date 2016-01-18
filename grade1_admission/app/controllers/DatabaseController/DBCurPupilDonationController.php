<?php
class DBCurPupilDonationController
{
	public static function getNexCurrentPupilDId($admissionNumber){
		$currentPupilDID='1';
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select donationId from cur_pupil_donation where admissionNumber='$admissionNumber' order by donationId desc limit 1;";
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
               $currentPupilAID=(int)$row["donationId"]+1;
            }
         }

         return $currentPupilDID;

	}

    public static function addCPDonation($donation){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schoolId=$donation->getSchoolId();
        $admissionNumber=$donation->getAdmissionNumber();
        $donationId=$donation->getDonationId();
        $donationDetail=$donation->getDonationDetail();  
        $query="insert into cur_pupil_donation values('$schoolId','$admissionNumber','$donationId','$donationDetail')";
        return $mysqli->query($query);
    }

    public static function getCPDonations($schoolId,$admissionNumber){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from cur_pupil_donation where schoolId='$schoolId' and admissionNumber='$admissionNumber';";
        $result=$mysqli->query($query);
        $cur_don_set=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $donation=new Cur_pupil_donation();
                $donation->setSchoolId($row["schoolId"]);
                $donation->setAdmissionNumber($row["admissionNumber"]);
                $donation->setDonationId($row["donationId"]);
                $donation->setDonationDetail($row["donationDetail"]);
                $cur_don_set[]=$donation;
            }
        }
        return $cur_don_set;
    }

}
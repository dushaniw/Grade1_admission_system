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

}
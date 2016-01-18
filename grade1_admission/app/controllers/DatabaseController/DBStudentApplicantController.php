<?php

class DBStudentApplicantController
{
	public static function getAllApplicant()
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select * from studentApplicant;";
		$result =$mysqli->query($query);
		$appplicants=array();
		if ($result->num_rows > 0) 
		{
            while ($row = $result->fetch_assoc())
            {
                $applicant = new studentApplicant();
                $applicant->setApplicantId($row["applicantId"]);
                $applicant->setFirstname($row["firstname"]);
                $applicant->setLastName($row["lastname"]);
                $applicant->setGender($row["gender"]);
				$applicant->setReligion($row["religion"]);
                $applicant->setDateOfBirth($row["dateofBirth"]);
                $applicant->setSelectedSchool($row["selectedSchoolId"]);
                $applicant->setGuardianNIC($row["NIC"]);
                $appplicants[]=$applicant;              
            }             
        } 
        return $appplicants;
	}

	public static function getApplicantOfGuardian($guardianNic)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select * from studentApplicant where NIC='$guardianNic'";
		$result =$mysqli->query($query);
		$appplicants=array();
		if ($result->num_rows > 0) 
		{
            while ($row = $result->fetch_assoc())
            {
                $applicant = new studentApplicant();
                $applicant->setApplicantId($row["applicantId"]);
                $applicant->setFirstname($row["firstname"]);
                $applicant->setLastName($row["lastname"]);
                $applicant->setGender($row["gender"]);
				$applicant->setReligion($row["religion"]);
                $applicant->setDateOfBirth($row["dateofBirth"]);
                $applicant->setSelectedSchool($row["selectedSchoolId"]);
                $applicant->setGuardianNIC($row["NIC"]);
                $appplicants[]=$applicant;              
            }             
        } 
        return $appplicants;
	}

    public static function getApplicantById($applicantId)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from studentApplicant where applicantId='$applicantId';";
        $result =$mysqli->query($query);
        $applicant = new studentApplicant();
        if ($result->num_rows > 0) 
        {
           if($row = $result->fetch_assoc())
            {
                $applicant->setApplicantId($row["applicantId"]);
                $applicant->setFirstname($row["firstname"]);
                $applicant->setLastName($row["lastname"]);
                $applicant->setGender($row["gender"]);
                $applicant->setReligion($row["religion"]);
                $applicant->setDateOfBirth($row["dateofBirth"]);
                $applicant->setSelectedSchool($row["selectedSchoolId"]); 
                $applicant->setGuardianNIC($row["NIC"]);             
            }             
        } 
        return $applicant;
    }


    public static function getSelectedApplicantsForSchool($schoolId)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from studentApplicant s left join guardian g on g.NIC=s.NIC where selectedSchoolId='$schoolId';";
        $result =$mysqli->query($query);
        $appplicants=array();
        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc())
            {
                $applicant = new studentApplicant();
                $applicant->setApplicantId($row["applicantId"]);
                $applicant->setFirstname($row["firstname"]);
                $applicant->setLastName($row["lastname"]);
                $applicant->setGender($row["gender"]);
                $applicant->setReligion($row["religion"]);
                $applicant->setDateOfBirth($row["dateofBirth"]);
                $applicant->setSelectedSchool($row["selectedSchoolId"]);
                $applicant->setGuardianNic($row["NIC"]);
                $applicant->setGuardian_lastname($row["g_lastName"]);
                $applicant->setGuardian_firstname($row["g_firstName"]);
                $applicant->setGuardian_contact($row["contactNumber"]);
                $appplicants[]=$applicant;              
            }             
        } 
        return $appplicants;
    }

    public static function getLastApplicantId()
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select applicantId from studentApplicant order by applicantId desc limit 1;";
        $result =$mysqli->query($query);
       
        if ($result->num_rows > 0) 
        {
           if($row = $result->fetch_assoc())
           {
                return $row["applicantId"];
           }
           return 0;         
        } 
        return 0;
    }

    
}
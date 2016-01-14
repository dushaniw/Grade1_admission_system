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
                $appplicants[]=$applicant;              
            }             
        } 
        return $appplicants;
	}

    public static function getSelectedApplicantsForSchool($schoolId)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from studentApplicant where selectedSchoolId='$schoolId'";
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
                $appplicants[]=$applicant;              
            }             
        } 
        return $appplicants;
    }
}
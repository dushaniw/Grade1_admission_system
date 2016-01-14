<?php
class DBSchoolController
{

	public static function getAllSchool()
	{

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select * from school";
        $result =$mysqli->query($query);
        $schools= array();
        if ($result->num_rows > 0) {	
        	while ($row = $result->fetch_assoc()) {
        		$school = new school();
        		$school->setSchool_id($row["schoolId"]);
        		$school->setSchool_name($row["name"]);
        		$school->setMale_percentage($row["malePercentage"]);
        		$school->setCategory($row["category"]);
        		$school->setSinhala_percentage($row["sinhalaPercentage"]);
        		$school->setContact_no($row["contactNumber"]);
        		$school->setNo_of_classes($row["noofClasses"]);
        		$school->setEmail($row["email"]);
        		$school->setPassword($row["password"]);
        		$schools[] = $school;
        	}
        }
        return $schools;

	}

        public static function getSchool($schoolid)
        {

                $db=Connection::getInstance();
                $mysqli=$db->getConnection();
                $query="select * from school where schoolId='$schoolid'";
                $result =$mysqli->query($query);
                $school = new school();             
                if ($result->num_rows > 0) {    
                        if($row = $result->fetch_assoc()) {
                                $school->setSchool_id($row["schoolId"]);
                                $school->setSchool_name($row["name"]);
                                $school->setMale_percentage($row["malePercentage"]);
                                $school->setCategory($row["category"]);
                                $school->setSinhala_percentage($row["sinhalaPercentage"]);
                                $school->setContact_no($row["contactNumber"]);
                                $school->setNo_of_classes($row["noofClasses"]);
                                $school->setEmail($row["email"]);
                                $school->setPassword($row["password"]);
                                $schools[] = $school;
                        }
                }
                return $school;

        }
}
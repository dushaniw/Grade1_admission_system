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


        public static function updateSchool($school)
        {
                $db=Connection::getInstance();
                $mysqli=$db->getConnection();

                $name=$school->getSchool_name();
                $schoolid=$school->getSchool_id();
                $category=$school->getCategory();
                $no_of_classes=$school->getNo_of_classes();
                $contact=$school->getContact_no();

                $query="UPDATE school SET name='$name',category='$category',contactNumber='$contact',noofClasses='$no_of_classes' WHERE schoolId='$schoolid'";
                $result =$mysqli->query($query);
                return $result;
                
        }


        public static function getSchoolByEmail($email)
        {
                $db=Connection::getInstance();
                $mysqli=$db->getConnection();
                $query="select * from school where email='$email';";
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



        public static function addCloseSchoolSet($applicantId,$schoolIdSet)
        {
                $db=Connection::getInstance();
                $mysqli=$db->getConnection();
                

                foreach ($schoolIdSet as $schoolId) {
                        $query="insert into closeSchoolset values( '$schoolId','$applicantId')";
                        $result=$mysqli->query($query);
                        if($result==FALSE){
                                return FALSE;
                        }
                } 
                return TRUE;      
        }

        public static function isApplicanthasCSS($applicantId){

                $db=Connection::getInstance();
                $mysqli=$db->getConnection();
                $query="select * from closeSchoolset where applicantId='$applicantId'";
                $result =$mysqli->query($query);
                if ($result->num_rows > 0) {    
                        return TRUE;
                }
                return FALSE;

        }


}
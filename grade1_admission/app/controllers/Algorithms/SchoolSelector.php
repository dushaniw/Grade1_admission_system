<?php
class SchoolSelector{

public static function calculateschool(){

$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from school;";
        $result =$mysqli->query($query);
        $schools= array();

        if ($result->num_rows > 0) {
        	
        	while ($row = $result->fetch_assoc()) {
        		$school_no;
        		$school = new school();
        		$school->setSchool_id($row["schoolId"]);
        		$school_no=$row["schoolId"]);
        		$school->setSchool_name($row["name"]);
        		$school->setMale_percentage($row["malePercentage"]);
        		$school->setCategory($row["category"]);
        		$school->setSinhala_percentage($row["sinhalaPercentage"]);
        		$school->setContact_no($row["contactNumber"]);
        		$school->setNo_of_classes($row["noofClasses"]);
        		$capacity;
        		$capacity=$row["noofClasses"]*40;
        		$school->setEmail($row["email"]);
        		$school->setPassword($row["password"]);
        		$schools[] = $school;
        	//get all application ids

		$Applications[] = array();
		$query = "select * from Application where typeOfApplication=1 and orderOfPreference=1 and schoolId='$school_no'";         
        	$result =$mysqli->query($query);
		while($result->num_rows > 0) {
           		while($row = $result->fetch_assoc()) {
               		 $Applications[]=$row["application_id"];
		}
	}
	$length=count($Applications);
	$Application_Objects[] = array();
	//save marks in array
	$Application_Marks[] = array();
	//final list of schools in descenting order  of marks
	$schoolselectids[]=array();
	for ($x = 0; $x <$length; $x++) {
		$application = new application();
   		 $query = "select SUM('no_of_years_live_35','residence_proof_10','res_proof_other_5','closeness_50') as total from close_proximity_mark where application_id='$Applications[$x]'";         
        	$result =$mysqli->query($query);
		 if ($result->num_rows > 0) {
        	
        	if($row = $result->fetch_assoc()) {
        		$application->setMark($row["total"]);   
        		$Application_Marks[]=$row["total"];
			}
		}
		$application->setApplicant_id($Applications[$x]); 
		$Application_Objects[] = $application;  
	}
	$objectlength=count($Application_Objects); 
	$max_key = -1;
    $max_val = -1;
    //get final school ids in des. order.
    for ($x = 0; $x <count($$Application_Marks); $x++) {
    foreach ($Application_Marks as $key => $value) {
      if ($value > $max_val) {
        $max_key = $key;
        $max_val = $value;
         }
     }
     $schoolselectids[]=$Applications[$max_key];
     $Application_Marks[$max_key]=0;
 }

 
$capacityquota=$capacity* 0.5;
for ($x = 0; $x <$capacityquota; $x++) {
		$query = "select applicantId from  Application where application_id='$schoolselectids[$x]'";         
        	$result =$mysqli->query($query);
        	$applicant_no;
        if ($result->num_rows > 0) {
        	
        	if($row = $result->fetch_assoc()) {
        		$applicant_no=	$row["applicantId"];
			}
		}
		$query = "UPDATE studentApplicant SET selectedSchoolId='$school_no' WHERE applicantId='$applicant_no'";
		$mysqli->query($query);
	}
        	}  	
	}
	



}



}
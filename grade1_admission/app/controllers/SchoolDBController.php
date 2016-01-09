<?php
/**
*  
*/
include("Model/school.php");
class SchoolDBController extends BaseController
{
	
	public function getIndex()
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from school;";
        $result =$mysqli->query($query);
        $schools= array();

        if ($result->num_rows > 0) {
        	
        	while ($row = $result->fetch_assoc()) {
        		$school = new school();
        		$school->setSchool_id($row["schoolId"]);
        		$school->setSchool_name($row["name"]);
        		$school->setMale_percentage($row["genderRatio"]);
        		$school->setCategory($row["category"]);
        		$school->setSinhala_percentage($row["mediumRatio"]);
        		$school->setContact_no($row["contactNumber"]);
        		$school->setNo_of_classes($row["noofClasses"]);
        		$school->setEmail($row["email"]);
        		$school->setPassword($row["password"]);
        		$schools[] = $school;
        	}
        	

        }
       return  View :: make ('G1SAS/selection')->with ('schools',$schools);
	
		
	}

    public function postNext(){
        $school1 = Input::get("school_name1");
        $school2 = Input::get("school_name2");
        $school3 = Input::get("school_name3");
        $school4 = Input::get("school_name4");
        $school5 = Input::get("school_name5");
        $school6 = Input::get("school_name6");
        
        $schoolid_array=array($school1,$school2,$school3,$school4,$school5,$school6);


        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $schools= array();

        foreach ($schoolid_array as $schoolid) {
            $query="select * from school where schoolId='$schoolid';";
            $result =$mysqli->query($query);
        
            if ($result->num_rows > 0) {
            
                if ($row = $result->fetch_assoc()) {
                    $school = new school();
                    $school->setSchool_id($row["schoolId"]);
                    $school->setSchool_name($row["name"]);
                    $school->setMale_percentage($row["genderRatio"]);
                    $school->setCategory($row["category"]);
                    $school->setSinhala_percentage($row["mediumRatio"]);
                    $school->setContact_no($row["contactNumber"]);
                    $school->setNo_of_classes($row["noofClasses"]);
                    $school->setEmail($row["email"]);
                    $school->setPassword($row["password"]);
                    $schools[] = $school;
                }
            }

        } 

        return View :: make ('G1SAS/SelectionType')->with ('schools',$schools);
    }

    public function postApplication()
    {
        Input::get("schoolPiority");
        Input::get("schoolPiority");
        Input::get("schoolId");
        $type=Input::get("type");
        
        switch ($type) {
            case 0:
                return  View :: make ('G1SAS/category1');
                break;
            case 1: // never reached because "a" is already matched with 0
               return  View :: make ('G1SAS/category2');
                break;
            case 2:
                return  View :: make ('G1SAS/category3');
                break;
            case 3: // never reached because "a" is already matched with 0
                return  View :: make ('G1SAS/category4');
                break;
            case 4:
                return  View :: make ('G1SAS/category5');
                break;
        }   
    }
}

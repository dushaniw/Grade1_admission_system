<?php

class ChildController extends BaseController{

	public function getIndex()
    {
        return View :: make ('G1SAS/AddNewChild');
    }
    
	public function postAdd(){
    
        //$g_email=Input::get('usernameText');
        //$guardian=DBGuardianController::getGuardian($g_email);    
        //$first_name = Input::get("firstNameText");
        //$last_name = Input::get("lastNameText");
        //$gender=Input::get("gender");
        //$religion=Input::get("religionText");
        //$year=Input::get("year");
        //$month=Input::get("month");
        //$date=Input::get("date");
        //$dob=$year."/".$month."/".$date;
        //$nic=$guardian->getNic();
        //$applicantId=intval(DBStudentApplicantController::getLastApplicantId()) +1;

        //$db=Connection::getInstance();
        //$mysqli=$db->getConnection();
        //$query="insert into studentApplicant values('$nic','$applicantId','$first_name','$last_name','$gender','$religion','$dob',null); ";
        //$mysqli->query($query);
        
        $db=Connection::getInstance();
        $conn=$db->getConnection();
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO studentApplicant  VALUES (?, ?, ?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $nic,$applicantId,$first_name,$last_name,$gender,$religion,$dob,$isverified);

        $g_email=Input::get('usernameText');
        $guardian=DBGuardianController::getGuardian($g_email);    
        $first_name = Input::get("firstNameText");
        $last_name = Input::get("lastNameText");
        $gender=Input::get("gender");
        $religion=Input::get("religionText");
        $year=Input::get("year");
        $month=Input::get("month");
        $date=Input::get("date");
        $dob=$year."/".$month."/".$date;
        $nic=$guardian->getNic();
        $applicantId=intval(DBStudentApplicantController::getLastApplicantId()) +1;
        $isverified=null;

        $stmt->execute();

        return View :: make ('G1SAS/userpage')->with('username',$g_email)->with('labelText','New Child Added Successfully');
    }

}
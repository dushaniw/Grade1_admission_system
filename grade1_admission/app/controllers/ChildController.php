<?php

class ChildController extends BaseController{

	public function getIndex()
    {
        return View:: make ('G1SAS/AddNewChild');
    }
    

    public function getChildrenoverview(){
        $username=$_GET['username'];
        return View::make('G1SAS/children_overview')->with('username',$username);
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
        $pagename='userpage/studentadd?username='+$g_email;
         if (!preg_match("/^[a-zA-Z'-]+$/",$first_name)){ 
        return Redirect::back()->withInput()->with('error',"First Name is invalid");
    }
    elseif (!preg_match("/^[a-zA-Z'-]+$/",$last_name)){ 
        return Redirect::back()->withInput()->with('error',"Last Name is invalid");
    }
    elseif((date("Y")-(int)$year)<6){
         return Redirect::back()->withInput()->with('error',"Child should be at least 6 years old");
    }
     elseif (!preg_match("/^[a-zA-Z'-]+$/",$religion)){ 
        return Redirect::back()->withInput()->with('error',"Religion is invalid");
    }
    else{
        $stmt->execute();

        return View :: make ('G1SAS/userpage')->with('username',$g_email)->with('labelText','New Child Added Successfully');
    }
    }

}
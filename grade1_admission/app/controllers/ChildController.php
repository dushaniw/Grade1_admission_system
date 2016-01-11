<?php

class ChildController extends BaseController{

	public function getIndex()
    {
        return View :: make ('G1SAS/AddNewChild');
    }
    
	public function postAdd(){
        
        $first_name = Input::get("firstNameText");
        $last_name = Input::get("lastNameText");
        $gender=Input::get("gender");
        $religion=Input::get("religionText");
        $year=Input::get("year");
        $month=Input::get("month");
        $date=Input::get("date");
        $dob=$year."/".$month."/".$date;
        

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="insert into guardian values('$nic','$first_name','$last_name','$relation_to_child','$nationality','$religion','$permanent_address','$email','$telephone_number','$grama_niladry_division_number','$password' ); ";
        $mysqli->query($query);


        
        //DB::Insert("insert into guardian values(?,?,?,?,?,?,?,?,?,?,?)",array($nic,$first_name,$last_name,$relation_to_child,$nationality,$religion,$permanent_address,$email,$telephone_number,$grama_niladry_division_number,$password ));
        return View :: make ('G1SAS/AddGuardianSuccessfull');
    }

}
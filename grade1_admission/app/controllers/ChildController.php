<?php

class ChildController extends BaseController{

	public function getIndex()
    {
        return View :: make ('G1SAS/AddNewChild');
    }
    
	public function postAdd(){
        
        $first_name = Input::get("firstNameText");
        $last_name = Input::get("lastNameText");
        $email = Input::get("emailTest");
        $permanent_address = Input::get("addressTest");
        $password = Input::get("password");
        $conform_password = Input::get("conform_password");
        $nic = Input::get("nicTest");
        $telephone_number =Input::get("telephoneTest");
        $relation_to_child=Input::get("relationshiptochild");
        $religion=Input::get("religionTest");
        $nationality = Input::get("nationalityTest");
        $grama_niladry_division_number = Input::get("gramaNiladariDivisionNumberTest");
        //$district = Input::get("RESULT_RadioButton-12");
        

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="insert into guardian values('$nic','$first_name','$last_name','$relation_to_child','$nationality','$religion','$permanent_address','$email','$telephone_number','$grama_niladry_division_number','$password' ); ";
        $mysqli->query($query);


        
        //DB::Insert("insert into guardian values(?,?,?,?,?,?,?,?,?,?,?)",array($nic,$first_name,$last_name,$relation_to_child,$nationality,$religion,$permanent_address,$email,$telephone_number,$grama_niladry_division_number,$password ));
        return View :: make ('G1SAS/AddGuardianSuccessfull');
    }

}
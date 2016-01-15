<?php

/**
 * Created by PhpStorm.
 * User: Gimhani
 * Date: 12/15/2015
 * Time: 4:36 PM
 */

class GuardianController extends BaseController
{
    
    public function getIndex()
    {
        $divisions=DBGNDDivisionController::getAllDivision();
        $divisionIdA=array();
        foreach ($divisions as $division) {
            $divisionIdA[]=$division->getGrama_niladari_div_no();
        }
        return View :: make ('G1SAS/AddGuardian')->with('divisions',$divisionIdA);
    }   
    
    public function postAdd(){
        
        $first_name = Input::get("firstNameTex");
        $last_name = Input::get("lastNameTex");
        $email = Input::get("emailTex");
        $permanent_address = Input::get("addressTex");
        $password = Input::get("password");
        $conform_password = Input::get("conform_password");
        $nic = Input::get("nicTex");
        $telephone_number =Input::get("telephoneTex");
        $relation_to_child=Input::get("relationshiptochild");
        $religion=Input::get("religionTex");
        $nationality = Input::get("nationalityTex");
        $grama_niladry_division_number = Input::get("gramaNiladariDivisionNumberTex");
        //$district = Input::get("RESULT_RadioButton-12");
        

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="insert into guardian values('$nic','$first_name','$last_name','$relation_to_child','$nationality','$religion','$permanent_address','$email','$telephone_number','$grama_niladry_division_number','$password' ); ";
        $result=$mysqli->query($query);
        if($result){
        return View :: make ('G1SAS/AddGuardianSuccessfull');
        
        }else{
            return "not wel";
        }
    }
    

}
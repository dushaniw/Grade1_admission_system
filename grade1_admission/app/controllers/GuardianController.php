<?php
include('Common/validationhandler.php');
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
        $divisions=DBGNDDivisionController::getAllDivision();
        $divisionIdA=array();
        foreach ($divisions as $division) {
            $divisionIdA[]=$division->getGrama_niladari_div_no();
        }
        
        $first_name = Input::get("firstNameText");
        $last_name = Input::get("lastNameText");
        $email = Input::get("emailText");
        $permanent_address = Input::get("addressText");
        $password = Input::get("password");
        $conform_password = Input::get("confirm_password");
        $nic = Input::get("nicText");
        $telephone_number =Input::get("telephoneText");
        $relation_to_child=Input::get("relationshiptochild");
        $religion=Input::get("religionText");
        $nationality = Input::get("nationalityText");
        $div_val = Input::get("gramaNiladariDivisionNumberText");
        $grama_niladry_division_number = $divisionIdA[$div_val];


 /*$rules=array('$conform_password' => 'same:$password', );
    $validator=Validator::make(Input::all(),$rules);
    if($validator->fails())
            return Redirect::to('/');*/
    if(strcmp($conform_password,$password)!=0){

        return Redirect::to('guardian')->withInput()->with('error',"Passwords dont match");
    }
    elseif(validationhandler::checkNIC($nic)==false){

      return Redirect::to('guardian')->withInput()->with('error',"NIC is invalid");
    }  
    elseif (!preg_match("/^[a-zA-Z'-]+$/",$first_name)){ 
        return Redirect::to('guardian')->withInput()->with('error',"First Name is invalid");
    }
    elseif (!preg_match("/^[a-zA-Z'-]+$/",$last_name)) { 
        return Redirect::to('guardian')->withInput()->with('error',"Last Name is invalid");
    }
     elseif (!preg_match("/^[a-zA-Z'-]+$/",$religion)) { 
        return Redirect::to('guardian')->withInput()->with('error',"Religion is invalid");
    }
     elseif (!preg_match("/^[a-zA-Z'-]+$/",$nationality)) { 
        return Redirect::to('guardian')->withInput()->with('error',"Nationality is invalid");
    }
    elseif (!preg_match("/^[0]{1}[0-9]{9}$/",$telephone_number)) { 
        return Redirect::to('guardian')->withInput()->with('error',"Telephone Number is invalid");
    }
    
    //return Redirect::to('guardian')->withErrors($validator->messages());

    else{  
        $guardian=new Guardian();
        $guardian->setNic($nic);
        $guardian->setFirstName($first_name);
        $guardian->setLastName($last_name);
        $guardian->setEmail($email);
        $guardian->setPermanent_address($permanent_address);
        $guardian->setPassword($password);
        $guardian->setContact_number($telephone_number);
        $guardian->setRelationship($relation_to_child);
        $guardian->setReligion($religion);
        $guardian->setNationality($nationality);
        $guardian->setGrama_nil_div_no($grama_niladry_division_number);

        $result=DBGuardianController::addGuardian($guardian);
        if($result){
            return View :: make ('G1SAS/AddGuardianSuccessfull');
        
        }else{
            return "not added successfully";
        }
    }
    }
    
  
    

   

}
 //d($errors->all());









    
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
        $grama_niladry_division_number = Input::get("gramaNiladariDivisionNumberText");
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
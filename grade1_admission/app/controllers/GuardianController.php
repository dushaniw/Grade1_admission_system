<?php

/**
 * Created by PhpStorm.
 * User: Gimhani
 * Date: 12/15/2015
 * Time: 4:36 PM
 */
class GuardianController extends BaseController
{
    public function addGuardian(){
        $first_name = Input::get("RESULT_TextField-1");
        $last_name = Input::get("RESULT_TextField-2");
        $email = Input::get("RESULT_TextField-3");
        $password = Input::get("RESULT_TextField-4");
        //$conform_password = Input::get("RESULT_TextField-5");
        $nic = Input::get("RESULT_TextField-6");
        $telephone_number =Input::get("RESULT_TextField-7");
        $relation_to_child=Input::get("RESULT_RadioButton-8");
        $religion=Input::get("RESULT_TextField-9");
        $nationality = Input::get("RESULT_TextField-10");
        $grama_niladry_division_number = Input::get("RESULT_TextField-11");
        //$district = Input::get("RESULT_RadioButton-12");
        $permanent_address = Input::get("RESULT_TextArea-13");


        DB::Insert("insert into guardian values(?,?,?,?,?,?,?,?,?,?,?)",array($nic,$first_name,$last_name,$relation_to_child,$nationality,$religion,$permanent_address,$email,$telephone_number,$grama_niladry_division_number,$password ));
        return Redirect ::to('/SignUpGuardian');

    }

}
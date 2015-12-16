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
        $full_name = Input::get("RESULT_TextField-2");
        $name_with_initial = Input::get("RESULT_TextField-1");
        $nic = Input::get("RESULT_TextField-3");
        $religion = Input::get("RESULT_TextField-4");
        $relation_shift_to_child = Input::get("RESULT_RadioButton-5");
        $telephone_number = Input::get("RESULT_TextField-5");
        $district = Input::get("RESULT_RadioButton-7");
        $permanent_address=Input::get("RESULT_TextField-6");
        $divisional_secretariat_division = Input::get("RESULT_TextField-7");
        $grama_niladari_division = Input::get("RESULT_TextField-8");
        $email="fdfd";
        $nationality="sinhaala";
        DB::Insert("insert into gurdian values(?,?,?,?,?,?,?,?,?)",array($nic,$name_with_initial,$full_name,$relation_shift_to_child,$nationality,$religion,$permanent_address,$email,$telephone_number ));
       // return View:: make('Welcome/submitted')->with('var',$full_name);
        return Redirect ::to('/SignUpGuardian');

    }

}
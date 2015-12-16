<?php

/**
 * Created by PhpStorm.
 * User: Gimhani
 * Date: 12/16/2015
 * Time: 12:38 PM
 */
class StudentController extends BaseController
{
 public  function addStudent(){

     $guardian_nic= Input::get("RESULT_TextField-1");
     $student_id = Input::get("RESULT_TextField-2");
     $first_name= Input::get("RESULT_TextField-3");
     $last_name = Input::get("RESULT_TextField-4");
     $gender = Input::get("RESULT_RadioButton-5");
     $religion = Input::get("RESULT_TextField-6");
     $date = Input::get("RESULT_TextField-7");

     DB::Insert("insert into studentApplicant values(?,?,?,?,?,?,?)",array($guardian_nic,$student_id,$first_name,$last_name,$gender,$religion,$date));


     return "return successfully added to system";
 }

 public   function chootyball(){
    return 1;
}

}
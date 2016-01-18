<?php

class EditController extends BaseController{

	public function postIndex()
    {
        $username=Input::get("username");
       	$guardian=DBGuardianController::getGuardian($username);

        return View :: make ('G1SAS/EditCategoryDetail')->with('nic',$guardian->getNic());
    }
    
    public function postEditcategory()
    {
    	$type=Input::get("type");
    	$nic=Input::get("nic");

    	if($type==0){
    		$hasCategory1=DBCategory1Controller::hasCategory1($nic);
    		if($hasCategory1){
    			$category1=DBCategory1Controller::getCategory1($nic);
    			return View :: make ('G1SAS/category1edit')->with('category1',$category1);
    		}else{
    			return "you don't have category 1 type application";
    		}	
    	}
    }


}
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

    public function postEditcategory1()
    {
         
            $guardianNic=Input::get("guardianNic");
            $noOfYearsInElectrocalRegister=Input::get('noOfYearsInElectrocalRegister');
            $noOfYearsSpouseInElectrocalRegister=Input::get('noOfYearsSpouseInElectrocalRegister');
            $typeOfTitleDeed =Input::get('typeOfTitleDeed');
            $noOfAditionalDocumentForResident=Input::get('noOfAditionalDocumentForResident');
            $closeSchoolCount=Input::get('closeSchoolCount');  

          $category=new Resident_in_closeProximity();     
          $category->setNoOfAditionalDocumentForResident($noOfAditionalDocumentForResident);
          $category->setCloseSchoolCount($closeSchoolCount);
          $category->setTypeOfTitleDeed($typeOfTitleDeed);
          $category->setNoOfYearsSpouseInElectrocalRegister($noOfYearsSpouseInElectrocalRegister);
          $category->setNoOfYearsInElectrocalRegister($noOfYearsInElectrocalRegister);
          $category->setNic($guardianNic); 

          $result=DBCategory1Controller::editCategory1($category); 
          if($result){
               return "category 1 editted well"; 
          }else{
            return "category 1 not editted well";
          }  
    }


}
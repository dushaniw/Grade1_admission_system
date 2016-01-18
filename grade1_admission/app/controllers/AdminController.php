<?php

include("Algorithms/MarksCalculator.php");
include("Algorithms/SchoolSelector.php");
class AdminController extends BaseController
{
	
    public  function postIndex()
	{
	       return "calculate marks";   
    
    }

    public  function postCalculate()
	{
	       
        MarksCalculator::calculatemarks();
        SchoolSelector::calculateschool();
        
        return "marks calculated successfully";
    
    }

    public  function postAddnewschool()
    {
        return View::make("G1SAS/AddNewSchool");
            $schoolid=Input::get('schoolidtext');
            $schoolname=Input::get('schoolnametext');
            $category=Input::get('category');
            $no_of_classes=Input::get('capacitytext');
            $contact_number=Input::get('contacttext');

            $school=new school();
            $school->setSchool_id($schoolid);
            $school->setSchool_name($schoolname);
            $school->setCategory($category);
            $school->setContact_no($contact_number);
            $school->setNo_of_classes($no_of_classes);
            
            $result=DBSchoolController::updateSchool($school);
    }

} 
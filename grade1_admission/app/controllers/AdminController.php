<?php

include("Algorithms/MarksCalculator.php");
include("Algorithms/SchoolSelector.php");
include 'DatabaseController/DBDeadlineController.php';

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
            
    }

    public  function postDeadline()
    {
        $deadline=DBDeadlineController::getDeadline();
        $date=explode('-',$deadline,-1);        
        return View::make("G1SAS/ChangeDeadline")->with('deadline',$deadline)->with('date',$date);       
    }


} 
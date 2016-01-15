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

} 
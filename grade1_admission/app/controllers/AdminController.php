<?php

include("Algorithms/MarksCalculator.php");
include("Algorithms/SchoolSelector.php");
include 'DatabaseController/DBDeadlineController.php';
include 'DatabaseController/DBMarkController.php';
include 'Model/Close_proximity_mark.php';
include 'Model/Current_student_mark.php';
include 'Model/PastPupil_mark.php';
include 'Model/Educational_staff_mark.php';
include 'Model/Officer_on_transfer_mark.php';
include 'Model/Person_abroad_mark.php';

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

    public  function postShowmarks()
    {
        $applications=DBApplicationController::getAllApplications();
        foreach ($applications as $application) {
            if($application->getType()==1){
                $mark=DBMarkController::getCloseProximityMark($application->getApplication_id());
                $application->setMark($mark);
            }elseif($application->getType()==2){
                $mark=DBMarkController::getPastPupilMark($application->getApplication_id());
                $application->setMark($mark);
            }elseif($application->getType()==3){
                $mark=DBMarkController::getCurrentStudentMark($application->getApplication_id());
                $application->setMark($mark);
            }elseif($application->getType()==4){
                $mark=DBMarkController::getEducationalStaffMark($application->getApplication_id());
                $application->setMark($mark);
            }elseif($application->getType()==5){
                $mark=DBMarkController::getOfficerOnTransferMark($application->getApplication_id());
                $application->setMark($mark);
            }elseif($application->getType()==6){
                $mark=DBMarkController::getPersonAbroadMark($application->getApplication_id());
                $application->setMark($mark);
            }
           
        }
        
        return View::make("G1SAS/viewmarks")->with('applications',$applications);
            
    }

    public  function postDeadline()
    {
        $deadline=DBDeadlineController::getDeadline();
        $date=explode('-',$deadline,-1);        
        return View::make("G1SAS/ChangeDeadline")->with('deadline',$deadline)->with('date',$date);       
    }


} 
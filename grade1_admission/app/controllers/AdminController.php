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
include 'DatabaseController/DBBackUp.php';

class AdminController extends BaseController
{
	
    public  function postIndex()
	{
	       return "calculate marks";   
    
    }

    public  function postCalculate()
	{
	       
        calculatemarks::calculate();
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
        $date=explode('-',$deadline,3);
        if($date[1]=='01'){$month=1;}
        elseif ($date[1]=='02') {$month=2;}
        elseif ($date[1]=='03') {$month=3;}        
        elseif ($date[1]=='04') {$month=4;}
        elseif ($date[1]=='05') {$month=5;}
        elseif ($date[1]=='06') {$month=6;}
        elseif ($date[1]=='07') {$month=7;}
        elseif ($date[1]=='08') {$month=8;}
        elseif ($date[1]=='09') {$month=9;}
        elseif ($date[1]=='10') {$month=10;}
        elseif ($date[1]=='11') {$month=11;}
        elseif ($date[1]=='12') {$month=12;}
        

        return View::make("G1SAS/ChangeDeadline")->with('deadline',$deadline)->with('date',$date)->with('month',$month);       
    }

    public  function postChangedeadline()
    {
        $year=Input::get("year");
        $month=Input::get("month");
        $date=Input::get("date");
        $deadline=$year."/".$month."/".$date;  
        $result=DBDeadlineController::setDeadline($deadline); 
        if($result){
            return View::make("G1SAS/adminpage")->with('title',"Deadline changed successfully");
        }else{
            return View::make("G1SAS/adminpage")->with('title',"Deadline was not changed successfully");
        }

    }

    public function postBackup(){
        DBBackUp::backup();
    }


} 
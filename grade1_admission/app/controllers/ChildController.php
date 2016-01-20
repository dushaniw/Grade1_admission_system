<?php

class ChildController extends BaseController{

	public function getIndex()
    {
        return View:: make ('G1SAS/AddNewChild');
    }
    

    public function getChildrenoverview(){
        $username=$_GET['username'];
        return View::make('G1SAS/children_overview')->with('username',$username);
    }


	public function postAdd(){
    
        $g_email=Input::get('usernameText');
        $guardian=DBGuardianController::getGuardian($g_email);    
        $first_name = Input::get("firstNameText");
        $last_name = Input::get("lastNameText");
        $gender=Input::get("gender");
        $religion=Input::get("religionText");
        $year=Input::get("year");
        $month=Input::get("month");
        $date=Input::get("date");
        $dob=$year."/".$month."/".$date;
        $nic=$guardian->getNic();
        $applicantId=intval(DBStudentApplicantController::getLastApplicantId()) +1;
        

        $pagename='userpage/studentadd?username='+$g_email;
            if (!preg_match("/^[a-zA-Z'-]+$/",$first_name)){ 
                return Redirect::back()->withInput()->with('error',"First Name is invalid");
            }
            elseif (!preg_match("/^[a-zA-Z'-]+$/",$last_name)){ 
                return Redirect::back()->withInput()->with('error',"Last Name is invalid");
            }
            elseif((date("Y")-(int)$year)<6){
                 return Redirect::back()->withInput()->with('error',"Child should be at least 6 years old");
            }
             elseif (!preg_match("/^[a-zA-Z'-]+$/",$religion)){ 
                return Redirect::back()->withInput()->with('error',"Religion is invalid");
            }else{

                $applicant=new StudentApplicant();
                $applicant->setApplicantId($applicantId);
                $applicant->setFirstname($first_name);
                $applicant->setLastName($last_name);
                $applicant->setGender($gender);
                $applicant->setReligion($religion);
                $applicant->setDateOfBirth($dob);
                $applicant->setSelectedSchool(null);
                $applicant->setGuardianNic($nic);
                               
                $result=DBStudentApplicantController::addchild($applicant);
                if($result){
                    return View :: make ('G1SAS/userpage')->with('guardian',$guardian)->with('username',$g_email)->with('labelText','Added successfully');
                }else{
                    return View :: make ('G1SAS/userpage')->with('guardian',$guardian)->with('username',$g_email)->with('labelText','Added successfully');
                }

                
            }
    }

}
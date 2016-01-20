<?php 

/**
* 
*/
include("AdminController.php");
include("/DatabaseController/DBAdminController.php");
include ('Model/Admin_user.php');

class LoginController extends BaseController
{
	
	public function postIndex()
	{
		$user_type = Input::get("userTypeA");
        $user_name = Input::get("userNameText");
        $password = Input::get("password");
        

        if($user_type==2){
            $guardian=DBGuardianController::getGuardian($user_name);
    		if($guardian->getPassword()==$password){
            //if (Hash::check($password, $guardian->getPassword())){
    			return View :: make ('G1SAS/userpage')->with('guardian',$guardian)->with('username',$user_name)->with('labelText','Your Child-Your School');
    		}else{
    			return View :: make ('G1SAS/login')->with('greet','Applications for this year is closed.')->with('message','Password you enttered is incorrect');
    		}	
	   }elseif ($user_type==0) {
            $user=DBAdminController::getAdmin($user_name);
            if($user->getPassword()==$password){
           // if (Hash::check($password, $user->getPassword())){
                return View :: make ('G1SAS/adminpage')->with('title',"You are logged in as:".$user_name);
            }else{
                return View :: make ('G1SAS/login')->with('greet','Applications for this year is closed.')->with('message','Password you enttered is incorrect');
            }
                    
       }else{
            $school=DBSchoolController::getSchoolByEmail($user_name);
            if($school->getPassword()==$password){
            //if (Hash::check($password, $school->getPassword())){
                return View :: make ('G1SAS/schoolpage')->with('school',$school)->with('notice','School information here');
            }else{
                return View :: make ('G1SAS/login')->with('greet','Applications for this year is closed.')->with('message','Password you enttered is incorrect');
            }
       }

	}

   


    public function postSearch(){
        $childId = Input::get("childIDText");
       // return Redirect::to('/')->with('resultText',$childId);

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();           
        $query = "select name from studentapplicant st  left join school sc on st.selectedSchoolId=sc.schoolId where applicantId='$childId'";         
        $result =$mysqli->query($query);
        
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
                if($row['name']!=null){
                    return Redirect::to('/')->with('result',$row['name'])->with('childId',$childId);
                }else{
                    return Redirect::to('/')->with('result','Not yet assigned')->with('childId',$childId);
                }
            }
        } else {
            return Redirect::to('/')->with('result','Sorry! No School Found')->with('childId',$childId);
        }
        
    }
  
}


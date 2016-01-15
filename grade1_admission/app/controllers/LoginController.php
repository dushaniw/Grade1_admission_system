<?php 

/**
* 
*/
include("AdminController.php");

class LoginController extends BaseController
{
	
	public function postIndex()
	{
		$user_type = Input::get("userTypeA");
        $user_name = Input::get("userNameText");
        $password = Input::get("password");

        if($user_type==2){
           
            
            $db=Connection::getInstance();
            $mysqli=$db->getConnection();       	
            $query = "select password from guardian where email ='$user_name'";        	
            $result =$mysqli->query($query);
            
            if ($result->num_rows > 0) {
        		if($row = $result->fetch_assoc()) {
            		if($row["password"]==$password){
            			return View :: make ('G1SAS/userpage')->with('username',$user_name)->with('labelText','Your Child-Your School');
            		}else{
            			return Redirect::to('/');
            		}
        		}
    		} else {
        		return Redirect::to('/');
    		}
	   }elseif ($user_type==0) {
                return View :: make ('G1SAS/adminpage')->with('username',$user_name);
                
       }else{
             return View :: make ('G1SAS/schoolpage')->with('labelText',$user_name." signed in");
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
            return Redirect::to('/')->with('result','Not found')->with('childId',$childId);
        }
        
    }
  
}


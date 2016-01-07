<?php 

/**
* 
*/
class LoginController extends BaseController
{
	
	public function postIndex()
	{
		$user_name = Input::get("userNameTest");
        $password = Input::get("password");
        
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();       	
        $query = "select password from guardian where email ='$user_name'";        	
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {
    		if($row = $result->fetch_assoc()) {
        		if($row["password"]==$password){
        			return "login succefull";
        		}else{
        			return Redirect::to('/');
        		}
    		}
		} else {
    		return Redirect::to('/');
		}
	

	}
}


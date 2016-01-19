<?php


class DBAdminController{
	public static function getAdmin($username)
    {
            $db=Connection::getInstance();
            $mysqli=$db->getConnection();
            $query="select * from admin_user where username='$username'";
            $result =$mysqli->query($query);
            $user = new Admin_user();             
            if ($result->num_rows > 0) {    
                    if($row = $result->fetch_assoc()) {
                            $user->setUsername($row["username"]);
                            $user->setPassword($row["password"]);
                    }
            }
            return $user;
    }

}
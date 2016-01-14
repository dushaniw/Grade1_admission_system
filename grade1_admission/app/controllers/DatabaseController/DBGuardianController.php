<?php

class DBGuardianController
{
	public static function getAllGuardian($username){

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from guardian where email='$username'";
        $result =$mysqli->query($query);
        $guardian=new Guardian('','','');
        if ($result->num_rows > 0) {    
            if ($row = $result->fetch_assoc()) {                            
                $guardian->setNic($row["NIC"]);
                $guardian->setEmail($row["email"]);
                $guardian->setFirstName($row["firstName"]);
                $guardian->setLastName($row["lastName"]);
            }
        }
        return $guardian;
	}
}
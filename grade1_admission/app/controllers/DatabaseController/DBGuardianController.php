<?php

class DBGuardianController
{
	public static function getGuardian($username){

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from guardian where email='$username'";
        $result =$mysqli->query($query);
        $guardian=new Guardian();
        if ($result->num_rows > 0) {    
            if ($row = $result->fetch_assoc()) {                            
                $guardian->setNic($row["NIC"]);
                $guardian->setEmail($row["email"]);
                $guardian->setFirstName($row["firstName"]);
                $guardian->setLastName($row["lastName"]);
				$guardian->setRelationship($row["relationship"]);
                $guardian->setNationality($row["nationality"]);
                $guardian->setReligion($row["religion"]);
                $guardian->setPermanent_address($row["permanent_address"]);
                $guardian->setEmail($row["email"]);
                $guardian->setContact_number($row["contactNumber"]);
                $guardian->setGrama_nil_div_no($row["grama_niladari_div_no"]);
                $guardian->setPassword($row["password"]);
            }
        }else{
        	return NULL;
        }

        return $guardian;
	}

	public static function hasApplicant($guardianNic)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();	
		$query="select *  from studentApplicant where NIC='$guardianNic'";
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return FALSE;
        }
        return TRUE;	
	}

     public static function isGuardianHasEL($guardianNic){

                $db=Connection::getInstance();
                $mysqli=$db->getConnection();
                $query="select * from electoral_name_list_proof where NIC='$guardianNic'";
                $result =$mysqli->query($query);
                if ($result->num_rows > 0) {    
                        return TRUE;
                }
                return FALSE;

        }
}
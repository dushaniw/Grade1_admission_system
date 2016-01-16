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
                $guardian->setFirstName($row["g_firstName"]);
                $guardian->setLastName($row["g_lastName"]);
				$guardian->setRelationship($row["relationship"]);
                $guardian->setNationality($row["g_nationality"]);
                $guardian->setReligion($row["g_religion"]);
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

    public static function addGuardian($guardian){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="insert into guardian values('$guardian->getNic()','$guardian->getFirstName()','$guardian->getLastName()','$guardian->getRelationship()','$guardian->getNationality()','$guardian->getReligion()','$guardian->getPermanent_address()','$guardian->getEmail()','$guardian->getContact_number()','$guardian->getGrama_nil_div_no()','$guardian->getPassword()' ); ";
        $result=$mysqli->query($query);
        return $result;
    }    
    

}
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

    public static function getGuardianByNic($guardianNic){

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from guardian where NIC='$guardianNic'";
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
		$query="select *  from  studentApplicant where NIC='$guardianNic'";
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;	
	}

    public static function hasCategory1Detail($guardianNic)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from residentInClosedProximity where NIC='$guardianNic'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
    }
     public static function hasCategory4Detail($guardianNic)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from educationalServiceOfficer where NIC='$guardianNic'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
    }

       public static function hasCategory5Detail($guardianNic)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from OfficerOnTransfer where NIC='$guardianNic'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
    }

       public static function hasCategory6Detail($guardianNic)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from personComingFromAboard where NIC='$guardianNic'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
    }

        public static function hasCategory2Detail($guardianNic,$schoolId)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from pastPupil where NIC='$guardianNic' and schoolId='$schoolId'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
    }
    


        public static function hasCategory3Detail($admissionNumber,$schoolId)
    {
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();   
        $query="select *  from CurrentStudent where admissionNumber ='$admissionNumber' and schoolId='$schoolId'";        
        $result =$mysqli->query($query);
         if($result->num_rows === 0)
        {
            return false;
        }
        return true;    
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
        
        $nic=$guardian->getNic();
        $first_name =  $guardian->getFirstName();
        $last_name =  $guardian->getLastName();
        $email =  $guardian->getEmail();
        $permanent_address =  $guardian->getPermanent_address();
        $password =  $guardian->getPassword();
        $telephone_number = $guardian->getContact_number();
        $relation_to_child= $guardian->getRelationship();
        $religion= $guardian->getReligion();
        $nationality =  $guardian->getNationality();
        $grama_niladry_division_number =  $guardian->getGrama_nil_div_no();

        $query="insert into guardian values('$nic','$first_name','$last_name','$relation_to_child','$nationality','$religion','$permanent_address','$email','$telephone_number','$grama_niladry_division_number','$password' );";
        $result=$mysqli->query($query);
        return $result;
    }    
    

}
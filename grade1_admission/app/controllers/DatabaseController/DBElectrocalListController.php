<?php
class DBElectrocalListController{

	public static function addElectrocalListDetail($dArray,$yArray,$guardianNic){

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		for ($i=0; $i <5 ; $i++){
            $year=$yArray[$i];
            $division=$dArray[$i];
        	$query="insert into electoral_name_list_proof values('$guardianNic','$year','$division')";
        	if($mysqli->query($query)==false){
            	return false;
        	}
        }                                   
        return true;  
	}

    public static function getElectrocalListDetails($guardianNic){

        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from electoral_name_list_proof where NIC='$guardianNic';";
        $result=$mysqli->query($query);
        
        $lists= array();
        if ($result->num_rows > 0) {    
            while ($row = $result->fetch_assoc()) {
                $enlp = new Electoral_name_list_proof();
                $enlp->setGrama_niladari_div_no($row["grama_niladari_div_no"]);
                $enlp->setYear($row["year"]);
                $enlp->setNIC($row["NIC"]);
                
                $lists[] = $enlp;
            }
        }
        return $lists; 
    }
}

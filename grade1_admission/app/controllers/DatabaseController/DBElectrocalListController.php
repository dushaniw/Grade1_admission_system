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
}

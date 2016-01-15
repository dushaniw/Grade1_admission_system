<?php
class DBElectrocalListController{

	public static function addElectrocalListDetail($dArray,$yArray,$guardianNic){

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		for ($i=0; $i <5 ; $i++){
        
        	$query="insert into electoral_name_list_proof values( '$guardianNic','$yArray[$i]','$dArray[$i]')";
        	if($mysqli->query($query)=false){
            	return false;
        	}
        }                                   
        return true;  
	}
}
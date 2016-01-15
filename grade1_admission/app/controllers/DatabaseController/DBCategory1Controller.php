<?php

class DBCategory1Controller{

	public static function addCategory1($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
       	$query="insert into residentInClosedProximity values( '$category->getNic()','$category->getNoOfYearsInElectrocalRegister()','$category-> getNoOfYearsSpouseInElectrocalRegister()','$category->getTypeOfTitleDeed()','$category->getTotalServicePeriod()','$category->getNoOfAditionalDocumentForResident()')";
       	return $mysqli->query($query);
	}
}
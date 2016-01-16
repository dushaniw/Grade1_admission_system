<?php

class DBCategory1Controller{

	public static function addCategory1($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $nic=$category->getNic();
        $noOfYearsInElectrocalRegister=$category->getNoOfYearsInElectrocalRegister();
       	$typeOfTitleDeed=$category->getTypeOfTitleDeed();
       	$noOfYearsSpouseInElectrocalRegister=$category-> getNoOfYearsSpouseInElectrocalRegister();
       	$closeSchoolCount=$category->getCloseSchoolCount();
       	$noOfAditionalDocumentForResident=$category->getNoOfAditionalDocumentForResident();
       	$query="insert into residentInClosedProximity values('$nic','$noOfYearsInElectrocalRegister','$noOfYearsSpouseInElectrocalRegister','$typeOfTitleDeed','$closeSchoolCount','$noOfAditionalDocumentForResident')";
       	return $mysqli->query($query);
	}
}
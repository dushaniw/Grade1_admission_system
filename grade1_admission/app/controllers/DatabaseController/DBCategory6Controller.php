<?php
class DBCategory6Controller{
	public static function addCategory6($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $nic=$category->getNic();
        $dateOfReturned=$category->getDateOfReturned();
        $periodAboardStay=$category->getPerioadAbroadStay();
        $reasonsForStay=$category->getReasonsForStay();
       	$query="insert into personComingFromAboard values('$nic','$dateOfReturned','$periodAboardStay','$reasonsForStay')";
       	return $mysqli->query($query);
	}

}
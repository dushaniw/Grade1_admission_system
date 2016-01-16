<?php
class DBCategory5Controller{
	public static function addCategory5($category){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $nic=$category->getNic();
        $dateOfTransferReceived=$category->getDateOfTransferReceived();
		$beforeWorkedPlace=$category->getBeforeWorkedPlace();        
		$afterWorkedPlace=$category->getAfterWorkedPlace();
		$distanceOfTransfer=$category->getDistanceOfTransfer();
        $year1RemLeave=$category->getYear1RemLeave();
        $year2RemLeave=$category->getYear2RemLeave();
        $year3RemLeave=$category->getYear3RemLeave();
        $year4RemLeave=$category->getYear4RemLeave();
        $servicePeriod=$category->getServicePeriod();
	   	$query="insert into officerOnTransfer values('$nic','$dateOfTransferReceived','$beforeWorkedPlace','$afterWorkedPlace','$distanceOfTransfer','$year1RemLeave','$year2RemLeave','$year3RemLeave','$year4RemLeave','$servicePeriod')";
       	return $mysqli->query($query);
	}

}
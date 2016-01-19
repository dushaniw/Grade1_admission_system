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

    public static function getCategory5($NIC){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from officerOnTransfer where NIC='$NIC';";
        $result=$mysqli->query($query);
        $category=new OfficerOnTransfer();
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $category->setNic($row["NIC"]);
                $category->setDateOfTransferReceived($row["dateOfTransferReceived"]);
                $category->setBeforeWorkedPlace($row["beforeWorkedPlace"]);        
                $category->setAfterWorkedPlace($row["afterWorkedPlace"]);
                $category->setDistanceOfTransfer($row["distanceOfTransfer"]);
                $category->setYear1RemLeave($row["year1RemLeave"]);
                $category->setYear2RemLeave($row["year2RemLeave"]);
                $category->setYear3RemLeave($row["year3RemLeave"]);
                $category->setYear4RemLeave($row["year4RemLeave"]);
                $category->setServicePeriod($row["servicePeriod"]);
            }
        }
        return $category;
    }


    public static function hasCategory5($NIC){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from officerOnTransfer where NIC='$NIC';";
        $result=$mysqli->query($query);
        $category=new OfficerOnTransfer();
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }


    public static function editCategory5($category){
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
        $query="update officerOnTransfer set dateOfTransferReceived='$dateOfTransferReceived',beforeWorkedPlace='$beforeWorkedPlace',afterWorkedPlace='$afterWorkedPlace',distanceOfTransfer='$distanceOfTransfer',year1RemLeave='$year1RemLeave',year2RemLeave='$year2RemLeave',year3RemLeave='$year3RemLeave',year4RemLeave='$year4RemLeave',servicePeriod='$servicePeriod' where NIC='$nic'";
        return $mysqli->query($query);
    }

}
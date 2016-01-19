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

  public static function getCategory6($NIC){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from personComingFromAboard where NIC='$NIC';";
        $result=$mysqli->query($query);
        $category=new PersonComingFromAbroad();
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $category->setNic($row["NIC"]);
                $category->setDateOfReturned($row["dateOfReturned"]);
                $category->setPerioadAbroadStay($row["periodAboardStay"]);
                $category->setReasonsForStay($row["reasonsForStay"]);
            }
         }        
        return $category;
  }


  public static function hasCategory6($NIC){
        
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from personComingFromAboard where NIC='$NIC';";
        $result=$mysqli->query($query);
        $category=new PersonComingFromAbroad();
        if ($result->num_rows > 0) {
            return true;
        }        
        return false;
  }

  public static function editCategory6($category){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $nic=$category->getNic();
        $dateOfReturned=$category->getDateOfReturned();
        $periodAboardStay=$category->getPerioadAbroadStay();
        $reasonsForStay=$category->getReasonsForStay();
        $query="update personComingFromAboard set dateOfReturned='$dateOfReturned',periodAboardStay='$periodAboardStay',reasonsForStay='$reasonsForStay' where NIC='$nic'";
        return $mysqli->query($query);
    }
}



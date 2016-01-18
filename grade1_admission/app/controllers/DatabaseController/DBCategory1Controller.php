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

  public static function getCategory1($NIC){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from residentInClosedProximity where NIC='$NIC'";
        $result=$mysqli->query($query);

        $category=new Resident_in_closeProximity();
        if ($result->num_rows > 0) {    
            if($row = $result->fetch_assoc()) {
                    $category->setNic($row["NIC"]);
                    $category->setNoOfYearsInElectrocalRegister($row["noOfYearsInElectrocalRegister"]);
                    $category->setTypeOfTitleDeed($row["typeOfTitleDeed"]);
                    $category-> setNoOfYearsSpouseInElectrocalRegister($row["noOfYearsSpouseInElectrocalRegister"]);
                    $category->setCloseSchoolCount($row["closeSchoolCount"]);
                    $category->setNoOfAditionalDocumentForResident($row["noOfAditionalDocumentForResident"]);           
            }
        }
        return $category;
  }

  public static function hasCategory1($NIC){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from residentInClosedProximity where NIC='$NIC'";
        $result=$mysqli->query($query);
        $category=new Resident_in_closeProximity();
        if ($result->num_rows > 0) {    
            return true;
        }
        return false;
  }


  public static function editCategory1($category){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $nic=$category->getNic();
        $noOfYearsInElectrocalRegister=$category->getNoOfYearsInElectrocalRegister();
        $typeOfTitleDeed=$category->getTypeOfTitleDeed();
        $noOfYearsSpouseInElectrocalRegister=$category-> getNoOfYearsSpouseInElectrocalRegister();
        $closeSchoolCount=$category->getCloseSchoolCount();
        $noOfAditionalDocumentForResident=$category->getNoOfAditionalDocumentForResident();
       
        $query="update residentInClosedProximity set noOfYearsInElectrocalRegister ='$noOfYearsInElectrocalRegister',noOfYearsSpouseInElectrocalRegister='$noOfYearsSpouseInElectrocalRegister',typeOfTitleDeed='$typeOfTitleDeed',closeSchoolCount='$closeSchoolCount',noOfAditionalDocumentForResident='$noOfAditionalDocumentForResident' where NIC='$nic'";
        return $mysqli->query($query);
  }

  
}
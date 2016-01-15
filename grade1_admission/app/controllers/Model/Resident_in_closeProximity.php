<?php

class Resident_in_closeProximity{
	private $NIC;
	private $noOfYearsInElectrocalRegister;
	private $noOfYearsSpouseInElectrocalRegister;
	private $typeOfTitleDeed;
	private $closeSchoolCount;
	private $noOfAditionalDocumentForResident;

public function getNoOfAditionalDocumentForResident()
{
    return $this->noOfAditionalDocumentForResident;
}

public function setNoOfAditionalDocumentForResident($noOfAditionalDocumentForResident)
{
    $this->noOfAditionalDocumentForResident = $noOfAditionalDocumentForResident;
    return $this;
}

public function getCloseSchoolCount()
{
    return $this->closeSchoolCount;
}

public function setCloseSchoolCount($closeSchoolCount)
{
    $this->closeSchoolCount = $closeSchoolCount;
    return $this;
}

public function getTypeOfTitleDeed()
{
    return $this->typeOfTitleDeed;
}

public function setTypeOfTitleDeed($typeOfTitleDeed)
{
    $this->typeOfTitleDeed = $typeOfTitleDeed;
    return $this;
}

public function getNoOfYearsSpouseInElectrocalRegister()
{
    return $this->noOfYearsSpouseInElectrocalRegister;
}

public function setNoOfYearsSpouseInElectrocalRegister($noOfYearsSpouseInElectrocalRegister)
{
    $this->noOfYearsSpouseInElectrocalRegister = $noOfYearsSpouseInElectrocalRegister;
    return $this;
}
public function getNoOfYearsInElectrocalRegister()
{
    return $this->noOfYearsInElectrocalRegister;
}

public function setNoOfYearsInElectrocalRegister($noOfYearsInElectrocalRegister)
{
    $this->noOfYearsInElectrocalRegister = $noOfYearsInElectrocalRegister;
    return $this;
}
	public function getNIC()
	{
	    return $this->NIC;
	}
	
	public function setNIC($NIC)
	{
	    $this->NIC = $NIC;
	    return $this;
	}


	
}
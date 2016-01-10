<?php

class OfficerOnTransfer{
	private $NIC;
	private $dateOfTransferReceived;
	private $beforeWorkedPlace;
	private $afterWorkedPlace;
	private $distanceOfTransfer;
	private $year1RemLeave;
	private $year2RemLeave;
	private $year3RemLeave;
	private $year4RemLeave;
	private $servicePeriod;


	public function getServicePeriod()
	{
	    return $this->servicePeriod;
	}
	
	public function setServicePeriod($servicePeriod)
	{
	    $this->servicePeriod = $servicePeriod;
	    return $this;
	}

public function getYear4RemLeave()
{
    return $this->year4RemLeave;
}

public function setYear4RemLeave($year4RemLeave)
{
    $this->year4RemLeave = $year4RemLeave;
    return $this;
}
	public function getYear3RemLeave()
	{
	    return $this->year3RemLeave;
	}
	
	public function setYear3RemLeave($year3RemLeave)
	{
	    $this->year3RemLeave = $year3RemLeave;
	    return $this;
	}

public function getYear1RemLeave()
{
    return $this->year1RemLeave;
}

public function setYear1RemLeave($year1RemLeave)
{
    $this->year1RemLeave = $year1RemLeave;
    return $this;
}

public function getYear2RemLeave()
{
    return $this->year2RemLeave;
}

public function setYear2RemLeave($year2RemLeave)
{
    $this->year2RemLeave = $year2RemLeave;
    return $this;
}

public function getDistanceOfTransfer()
{
    return $this->distanceOfTransfer;
}

public function setDistanceOfTransfer($distanceOfTransfer)
{
    $this->distanceOfTransfer = $distanceOfTransfer;
    return $this;
}


public function getAfterWorkedPlace()
{
    return $this->afterWorkedPlace;
}

public function setAfterWorkedPlace($afterWorkedPlace)
{
    $this->afterWorkedPlace = $afterWorkedPlace;
    return $this;
}

public function getBeforeWorkedPlace()
{
    return $this->beforeWorkedPlace;
}

public function setBeforeWorkedPlace($beforeWorkedPlace)
{
    $this->beforeWorkedPlace = $beforeWorkedPlace;
    return $this;
}

public function getDateOfTransferReceived()
{
    return $this->dateOfTransferReceived;
}

public function setDateOfTransferReceived($dateOfTransferReceived)
{
    $this->dateOfTransferReceived = $dateOfTransferReceived;
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
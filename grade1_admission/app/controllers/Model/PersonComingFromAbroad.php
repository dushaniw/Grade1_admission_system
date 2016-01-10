<?php

class PersonComingFromAbroad{
private $NIC;
	private $dateOfReturned;
	private $perioadAbroadStay;
	private $reasonsForStay;


public function getReasonsForStay()
{
    return $this->reasonsForStay;
}

public function setReasonsForStay($reasonsForStay)
{
    $this->reasonsForStay = $reasonsForStay;
    return $this;
}

	public function getPerioadAbroadStay()
	{
	    return $this->perioadAbroadStay;
	}
	
	public function setPerioadAbroadStay($perioadAbroadStay)
	{
	    $this->perioadAbroadStay = $perioadAbroadStay;
	    return $this;
	}
public function getDateOfReturned()
{
    return $this->dateOfReturned;
}

public function setDateOfReturned($dateOfReturned)
{
    $this->dateOfReturned = $dateOfReturned;
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
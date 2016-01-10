<?php

class Person_abroad_mark{

	private $application_id;
	private $time_in_abroad;
	private $reason_of_transfer;
	private $closeness_mark;

public function getCloseness_mark()
{
    return $this->closeness_mark;
}

public function setCloseness_mark($closeness_mark)
{
    $this->closeness_mark = $closeness_mark;
    return $this;
}

public function getReason_of_transfer()
{
    return $this->reason_of_transfer;
}

public function setReason_of_transfer($reason_of_transfer)
{
    $this->reason_of_transfer = $reason_of_transfer;
    return $this;
}

public function getTime_in_abroad()
{
    return $this->time_in_abroad;
}

public function setTime_in_abroad($time_in_abroad)
{
    $this->time_in_abroad = $time_in_abroad;
    return $this;
}
	public function getApplication_id()
	{
	    return $this->application_id;
	}
	
	public function setApplication_id($application_id)
	{
	    $this->application_id = $application_id;
	    return $this;
	}

}
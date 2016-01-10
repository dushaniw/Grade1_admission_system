<?php

class Educational_staff_mark{
	private $application_id;
	private $no_working_years;
	private $distance_mark;
	private $difficult_service_mark;
	private $utilized_leave_mark;
	private $if_in_same_school_mark;



public function getIf_in_same_school_mark()
{
    return $this->if_in_same_school_mark;
}

public function setIf_in_same_school_mark($if_in_same_school_mark)
{
    $this->if_in_same_school_mark = $if_in_same_school_mark;
    return $this;
}
public function getUtilized_leave_mark()
{
    return $this->utilized_leave_mark;
}

public function setUtilized_leave_mark($utilized_leave_mark)
{
    $this->utilized_leave_mark = $utilized_leave_mark;
    return $this;
}

public function getDifficult_service_mark()
{
    return $this->difficult_service_mark;
}

public function setDifficult_service_mark($difficult_service_mark)
{
    $this->difficult_service_mark = $difficult_service_mark;
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
public function getNo_working_years()
{
    return $this->no_working_years;
}

public function setNo_working_years($no_working_years)
{
    $this->no_working_years = $no_working_years;
    return $this;
}

public function getDistance_mark()
{
    return $this->distance_mark;
}

public function setDistance_mark($distance_mark)
{
    $this->distance_mark = $distance_mark;
    return $this;
}

}
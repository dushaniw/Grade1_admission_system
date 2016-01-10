<?php

class Closeschoolset{
	private $closeSchoolId;
	private $applicantId;


	public function getCloseSchoolId()
	{
	    return $this->closeSchoolId;
	}
	
	public function setCloseSchoolId($closeSchoolId)
	{
	    $this->closeSchoolId = $closeSchoolId;
	    return $this;
	}

public function getApplicantId()
{
    return $this->applicantId;
}

public function setApplicantId($applicantId)
{
    $this->applicantId = $applicantId;
    return $this;
}
}
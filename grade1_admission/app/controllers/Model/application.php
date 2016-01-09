<?php

class application
{
	private $application_id;
	private $school_id;
	private $applicant_id;
	private $type;
	private $medium;
	private $orderOfPreference;
	private $distance;

	public function getSchool_id()
	{
	    return $this->school_id;
	}
	
	public function setSchool_id($school_id)
	{
	    $this->school_id = $school_id;
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
	public function getApplicant_id()
		{
		    return $this->applicant_id;
		}
		
		public function setApplicant_id($applicant_id)
		{
		    $this->applicant_id = $applicant_id;
		    return $this;
		}	

		public function getType()
		{
		    return $this->type;
		}
		
		public function setType($type)
		{
		    $this->type = $type;
		    return $this;
		}

		public function getMedium()
		{
		    return $this->medium;
		}
		
		public function setMedium($medium)
		{
		    $this->medium = $medium;
		    return $this;
		}
	
		public function getOrderOfPreference()
		{
		    return $this->orderOfPreference;
		}
		
		public function setOrderOfPreference($orderOfPreference)
		{
		    $this->orderOfPreference = $orderOfPreference;
		    return $this;
		}


		public function getDistance()
		{
    		return $this->distance;
		}

		public function setDistance($distance)
		{
    		$this->distance = $distance;
    		return $this;
		}


}
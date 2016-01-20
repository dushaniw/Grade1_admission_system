<?php

class parser
{
	private $school_id;
	private $orderOfPreference;

	

	public function getSchool_id()
	{
	    return $this->school_id;
	}
	
	public function setSchool_id($school_id)
	{
	    $this->school_id = $school_id;
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

}
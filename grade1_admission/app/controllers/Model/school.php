<?php

/**
* 
*/
class school 
{
	private $school_id;
	private $school_name;
	private $male_percentage;
	private $category;
	private $sinhala_percentage;
	private $contact_no;
	private $no_of_classes;
	private $email;
	private $password;


	public function getSchool_id()
	{
	    return $this->school_id;
	}
	
	public function setSchool_id($school_id)
	{
	    $this->school_id = $school_id;
	    return $this;
	}

	public function getSchool_name()
	{
	    return $this->school_name;
	}
	

	public function setSchool_name($school_name)
	{
	    $this->school_name = $school_name;

	    return $this;
	}
	public function getMale_percentage()
		{
		    return $this->male_percentage;
		}
		
		public function setMale_percentage($male_percentage)
		{
		    $this->male_percentage = $male_percentage;
		    return $this;
		}	

		public function getCategory()
		{
		    return $this->category;
		}
		
		public function setCategory($category)
		{
		    $this->category = $category;
		    return $this;
		}

		public function getSinhala_percentage()
		{
		    return $this->sinhala_percentage;
		}
		
		public function setSinhala_percentage($sinhala_percentage)
		{
		    $this->sinhala_percentage = $sinhala_percentage;
		    return $this;
		}
	
		public function getContact_no()
		{
		    return $this->contact_no;
		}
		
		public function setContact_no($contact_no)
		{
		    $this->contact_no = $contact_no;
		    return $this;
		}


		public function getNo_of_classes()
		{
    		return $this->no_of_classes;
		}

		public function setNo_of_classes($no_of_classes)
		{
    		$this->no_of_classes = $no_of_classes;
    		return $this;
		}

		public function getEmail()
		{
    		return $this->email;
		}

		public function setEmail($email)
		{
    		$this->email = $email;
    		return $this;
		}

		public function getPassword()
		{
    		return $this->password;
		}

		public function setPassword($password)
		{
    		$this->password = $password;
    		return $this;
		}


}
	




	

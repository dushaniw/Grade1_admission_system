<?php 

class Child {

    private $applicantid;
    private $guardian_nic;
    private $first_name;
    private $last_name;
    private $gender;
    private $religion;
    private $dob;

    private $schoolset; //a list
    
    public function __construct($applicantid,$guardian_nic,$first_name,$last_name,$gender,$religion,$dob) {
        $this->applicantid=$applicantid;
        $this->guardian_nic=$guardian_nic;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->gender=$gender;
        $this->religion=$religion;
        $this->dob=$dob;   
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getGuardianNic()
    {
        return $this->guardian_nic;
    }
    
    public function setGuardianNic($guardian_nic)
    {
        $this->guardian_nic = $guardian_nic;
        return $this;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }
    
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getDob()
    {
        return $this->dob;
    }
    
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }
        
    public function getReligion()
    {
        return $this->religion;
    }
    
    public function setReligion($religion)
    {
        $this->religion = $religion;
        return $this;
    }

}
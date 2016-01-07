<?php 

class Child {

    private $nic;
    private $first_name;
    private $last_name;
    private $relationship;
    private $religion;
    private $nationality;
    private $permanent_address;
    private $email;
    private $contact_number;
    private $grama_nil_div_no;
    private $password;


    private $schoolset; //a list
    
    public function __construct($nic,$email,$password) {
        $this->nic=$nic;
        $this->email=$email;
        $this->password=$password;
          
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
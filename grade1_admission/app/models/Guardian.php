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

    public function getNic()
    {
        return $this->nic;
    }
    
    public function setNic($nic)
    {
        $this->nic = $nic;
        return $this;
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

    public function getFirstName()
    {
        return $this->first_name;
    }
    
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }
    public function getRelationship()
    {
        return $this->relationship;
    }
    
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
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
    
    public function getNationality()
    {
        return $this->nationality;
    }
    
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    public function getPermanent_address()
    {
        return $this->permanent_address;
    }
    
    public function setPermanent_address($permanent_address)
    {
        $this->permanent_address = $permanent_address;
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

    public function getContact_number()
    {
        return $this->contact_number;
    }
    
    public function setContact_number($contact_number)
    {
        $this->contact_number = $contact_number;
        return $this;
    }

    public function getGrama_nil_div_no()
    {
        return $this->grama_nil_div_no;
    }
    
    public function setGrama_nil_div_no($grama_nil_div_no)
    {
        $this->grama_nil_div_no = $grama_nil_div_no;
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
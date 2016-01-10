<?php

class StudentApplicant{
private $NIC:
private $applicantId;
private $firstname;
private $lastname;
private $gender;
private $religion;
private $dateOfBirth;


public function getDateOfBirth()
{
    return $this->dateOfBirth;
}

public function setDateOfBirth($dateOfBirth)
{
    $this->dateOfBirth = $dateOfBirth;
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

public function getGender()
{
    return $this->gender;
}

public function setGender($gender)
{
    $this->gender = $gender;
    return $this;
}
public function getLastname()
{
    return $this->lastname;
}

public function setLastname($lastname)
{
    $this->lastname = $lastname;
    return $this;
}
public function getFirstname()
{
    return $this->firstname;
}

public function setFirstname($firstname)
{
    $this->firstname = $firstname;
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
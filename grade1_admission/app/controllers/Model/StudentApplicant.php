<?php

class StudentApplicant{
private $NIC;
private $applicantId;
private $firstname;
private $lastname;
private $gender;
private $religion;
private $dateOfBirth;
private $selectedSchool;
private $guardian_firstname;
private $guardian_lastname;
private $guardian_contact;

public function getGuardian_lastname()
{
    return $this->guardian_lastname;
}

public function setGuardian_lastname($lastname)
{
    $this->guardian_lastname = $lastname;
    return $this;
}
public function getGuardian_firstname()
{
    return $this->guardian_firstname;
}

public function setGuardian_firstname($firstname)
{
    $this->guardian_firstname = $firstname;
    return $this;
}

public function getGuardian_contact()
{
    return $this->guardian_contact;
}

public function setGuardian_contact($contact)
{
    $this->guardian_contact = $contact;
    return $this;
}

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
public function getGuardianNIC()
{
    return $this->NIC;
}

public function setGuardianNIC($NIC)
{
    $this->NIC = $NIC;
    return $this;
}
public function getSelectedSchool()
{
    return $this->selectSchool;
}

public function setSelectedSchool($selectSchool)
{
    $this->selectSchool = $selectSchool;
    return $this;
}





}
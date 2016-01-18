<?php

class Currentstudent{
private $schoolId;
private $admissionNumber;
private $lastName;
private $firstName;
private $dateOfAdmission;
private $gradeOfAdmission;
private $cur_pup_donation_set;
private $cur_pup_ach_set;

public function getCur_pup_donation_set()
{
    return $this->cur_pup_donation_set;
}

public function setCur_pup_donation_set($cur_pup_donation_set)
{
    $this->cur_pup_donation_set = $cur_pup_donation_set;
    return $this;
}
public function getCur_pup_ach_set()
{
    return $this->cur_pup_ach_set;
}

public function setCur_pup_ach_set($cur_pup_ach_set)
{
    $this->cur_pup_ach_set = $cur_pup_ach_set;
    return $this;
}

public function getGradeOfAdmission()
{
    return $this->gradeOfAdmission;
}

public function setGradeOfAdmission($gradeOfAdmission)
{
    $this->gradeOfAdmission = $gradeOfAdmission;
    return $this;
}
public function getDateOfAdmission()
{
    return $this->dateOfAdmission;
}

public function setDateOfAdmission($dateOfAdmission)
{
    $this->dateOfAdmission = $dateOfAdmission;
    return $this;
}

public function getFirstName()
{
    return $this->firstName;
}

public function setFirstName($firstName)
{
    $this->firstName = $firstName;
    return $this;
}

public function getLastName()
{
    return $this->lastName;
}

public function setLastName($lastName)
{
    $this->lastName = $lastName;
    return $this;
}

public function getAdmissionNumber()
{
    return $this->admissionNumber;
}

public function setAdmissionNumber($admissionNumber)
{
    $this->admissionNumber = $admissionNumber;
    return $this;
}

public function getSchoolId()
{
    return $this->schoolId;
}

public function setSchoolId($schoolId)
{
    $this->schoolId = $schoolId;
    return $this;
}


}
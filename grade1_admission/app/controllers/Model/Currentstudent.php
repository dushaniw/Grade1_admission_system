<?php

class Currentstudent{
private $schoolId;
private $admissionNumber;
private $lastName;
private $surName;
private $dateOfAdmission;
private $gradeOfAdmission;

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

public function getSurName()
{
    return $this->surName;
}

public function setSurName($surName)
{
    $this->surName = $surName;
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
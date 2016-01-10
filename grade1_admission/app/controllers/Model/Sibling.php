<?php


Class Sibling {
private $admissionNumber;
private $applicantId;
private $schoolId;

public function getAdmissionNumber()
{
    return $this->admissionNumber;
}

public function setAdmissionNumber($admissionNumber)
{
    $this->admissionNumber = $admissionNumber;
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
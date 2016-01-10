<?php

 class Cur_pupil_donation{
private $schoolId;
private $admissionNumber;
private $donationId;
private $donationDetail;

public function getDonationDetail()
{
    return $this->donationDetail;
}

public function setDonationDetail($donationDetail)
{
    $this->donationDetail = $donationDetail;
    return $this;
}


public function getDonationId()
{
    return $this->donationId;
}

public function setDonationId($donationId)
{
    $this->donationId = $donationId;
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
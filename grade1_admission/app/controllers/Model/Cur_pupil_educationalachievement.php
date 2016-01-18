<?php

class Cur_pupil_educationalachievement{
private $schoolId;
private $admissionNumber;
private $eAchievementId;
private $achievementDetail;


public function getAchievementDetail()
{
    return $this->achievementDetail;
}

public function setAchievementDetail($achievementDetail)
{
    $this->achievementDetail = $achievementDetail;
    return $this;
}

public function getAchievementId()
{
    return $this->eAchievementId;
}

public function setAchievementId($eAchievementId)
{
    $this->eAchievementId = $eAchievementId;
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
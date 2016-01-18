<?php

class PastPupil_achievement{

	private $schoolId;
	private $NIC;
	private $AchievementID;
	private $type;
	private $achievementDetail;


	public function getSchoolId()
	{
	    return $this->schoolId;
	}
	
	public function setSchoolId($schoolId)
	{
	    $this->schoolId = $schoolId;
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

	public function getAchievementID()
	{
	    return $this->AchievementID;
	}
	
	public function setAchievementID($AchievementID)
	{
	    $this->AchievementID = $AchievementID;
	    return $this;
	}

public function getType()
{
    return $this->type;
}

public function setType($type)
{
    $this->type = $type;
    return $this;
}

public function getAchievementDetail()
{
    return $this->achievementDetail;
}

public function setAchievementDetail($achievementDetail)
{
    $this->achievementDetail = $achievementDetail;
    return $this;
}


}
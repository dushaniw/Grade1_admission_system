<?php

class EducationalServiceOfficer{
	private $NIC;
	private $permenentEmployeePost;
	private $totalServicePeriod;
	private $distanceFromResidentToWork;
	private $nowInDifficultSchoolService;
	private $periodOfDifficultSchoolService;
	private $servingSchoolId;
	private $servingPeriodOfSchool;
	private $year1RemLeave;
	private $year2RemLeave;
	private $year3RemLeave;
	private $year4RemLeave;


public function getYear1RemLeave()
{
    return $this->year1RemLeave;
}

public function setYear1RemLeave($year1RemLeave)
{
    $this->year1RemLeave = $year1RemLeave;
    return $this;
}
	public function getYear2RemLeave()
	{
	    return $this->year2RemLeave;
	}
	
	public function setYear2RemLeave($year2RemLeave)
	{
	    $this->year2RemLeave = $year2RemLeave;
	    return $this;
	}
public function getYear3RemLeave()
{
    return $this->year3RemLeave;
}

public function setYear3RemLeave($year3RemLeave)
{
    $this->year3RemLeave = $year3RemLeave;
    return $this;
}

	public function getYear4RemLeave()
	{
	    return $this->year4RemLeave;
	}
	
	public function setYear4RemLeave($year4RemLeave)
	{
	    $this->year4RemLeave = $year4RemLeave;
	    return $this;
	}
public function getServingPeriodOfSchool()
{
    return $this->servingPeriodOfSchool;
}

public function setServingPeriodOfSchool($servingPeriodOfSchool)
{
    $this->servingPeriodOfSchool = $servingPeriodOfSchool;
    return $this;
}

public function getServingSchoolId()
{
    return $this->servingSchoolId;
}

public function setServingSchoolId($servingSchoolId)
{
    $this->servingSchoolId = $servingSchoolId;
    return $this;
}

public function getPeriodOfDifficultSchoolService()
{
    return $this->periodOfDifficultSchoolService;
}

public function setPeriodOfDifficultSchoolService($periodOfDifficultSchoolService)
{
    $this->periodOfDifficultSchoolService = $periodOfDifficultSchoolService;
    return $this;
}
public function getNowInDifficultSchoolService()
{
    return $this->nowInDifficultSchoolService;
}

public function setNowInDifficultSchoolService($nowInDifficultSchoolService)
{
    $this->nowInDifficultSchoolService = $nowInDifficultSchoolService;
    return $this;
}
public function getDistanceFromResidentToWork()
{
    return $this->distanceFromResidentToWork;
}

public function setDistanceFromResidentToWork($distanceFromResidentToWork)
{
    $this->distanceFromResidentToWork = $distanceFromResidentToWork;
    return $this;
}
public function getTotalServicePeriod()
{
    return $this->totalServicePeriod;
}

public function setTotalServicePeriod($totalServicePeriod)
{
    $this->totalServicePeriod = $totalServicePeriod;
    return $this;
}

public function getPermenentEmployeePost()
{
    return $this->permenentEmployeePost;



}

public function setPermenentEmployeePost($permenentEmployeePost)
{
    $this->permenentEmployeePost = $permenentEmployeePost;
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
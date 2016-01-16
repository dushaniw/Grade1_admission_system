<?php

class pastPupil_markingCriteria{
	private $schoolId;
	private $refYear;
	private $internationalEduAchieve;
	private $nationalEduAchieve;
	private $provincialEduAchieve;
	private $districtEduAchieve;
	private $zonalEduAchieve;

	private $internationalExtraCurricular;
	private $nationalExtraCurricular;
	private $provincialExtraCurricular;
	private $districtExtraCurricular;
	private $zonalExtraCurricular;
	private $pastPupilOrgMemeber;
	private $contribution;
	private $other_after_school;

    public function setAll($schoolId,$refYear,$internationalEduAchieve,$nationalEduAchieve,$provincialEduAchieve,$districtEduAchieve,$zonalEduAchieve,
        $internationalExtraCurricular,$nationalExtraCurricular,$provincialExtraCurricular,$districtExtraCurricular,$zonalExtraCurricular,$pastPupilOrgMemeber,$contribution,$other_after_school){
        
        $this->schoolId=$schoolId;
        $this->refYear=$refYear;
        $this->internationalEduAchieve=$internationalEduAchieve;
        $this->nationalEduAchieve=$nationalEduAchieve;
        $this->provincialEduAchieve=$provincialEduAchieve;
        $this->districtEduAchieve=$districtEduAchieve;
        $this->zonalEduAchieve=$zonalEduAchieve;
        $this->internationalExtraCurricular=$internationalExtraCurricular;
        $this->nationalExtraCurricular=$nationalExtraCurricular;
        $this->provincialExtraCurricular=$provincialExtraCurricular;
        $this->districtExtraCurricular=$districtExtraCurricular;
        $this->zonalExtraCurricular=$zonalExtraCurricular;
        $this->pastPupilOrgMemeber=$pastPupilOrgMemeber;
        $this->contribution=$contribution;
        $this->other_after_school=$other_after_school;
    }


public function getOther_after_school()
{
    return $this->other_after_school;
}

public function setOther_after_school($other_after_school)
{
    $this->other_after_school = $other_after_school;
    return $this;
}

public function getContribution()
{
    return $this->contribution;
}

public function setContribution($contribution)
{
    $this->contribution = $contribution;
    return $this;
}


public function getPastPupilOrgMemeber()
{
    return $this->pastPupilOrgMemeber;
}

public function setPastPupilOrgMemeber($pastPupilOrgMemeber)
{
    $this->pastPupilOrgMemeber = $pastPupilOrgMemeber;
    return $this;
}

public function getZonalExtraCurricular()
{
    return $this->zonalExtraCurricular;
}

public function setZonalExtraCurricular($zonalExtraCurricular)
{
    $this->zonalExtraCurricular = $zonalExtraCurricular;
    return $this;
}
public function getDistrictExtraCurricular()
{
    return $this->districtExtraCurricular;
}

public function setDistrictExtraCurricular($districtExtraCurricular)
{
    $this->districtExtraCurricular = $districtExtraCurricular;
    return $this;
}
	public function getProvincialExtraCurricular()
	{
	    return $this->provincialExtraCurricular;
	}
	
	public function setProvincialExtraCurricular($provincialExtraCurricular)
	{
	    $this->provincialExtraCurricular = $provincialExtraCurricular;
	    return $this;
	}
public function getNationalExtraCurricular()
{
    return $this->nationalExtraCurricular;
}

public function setNationalExtraCurricular($nationalExtraCurricular)
{
    $this->nationalExtraCurricular = $nationalExtraCurricular;
    return $this;
}

public function getInternationalExtraCurricular()
{
    return $this->internationalExtraCurricular;
}

public function setInternationalExtraCurricular($internationalExtraCurricular)
{
    $this->internationalExtraCurricular = $internationalExtraCurricular;
    return $this;
}


public function getZonalEduAchieve()
{
    return $this->zonalEduAchieve;
}

public function setZonalEduAchieve($zonalEduAchieve)
{
    $this->zonalEduAchieve = $zonalEduAchieve;
    return $this;
}
public function getDistrictEduAchieve()
{
    return $this->districtEduAchieve;
}

public function setDistrictEduAchieve($districtEduAchieve)
{
    $this->districtEduAchieve = $districtEduAchieve;
    return $this;
}
	public function getProvincialEduAchieve()
	{
	    return $this->provincialEduAchieve;
	}
	
	public function setProvincialEduAchieve($provincialEduAchieve)
	{
	    $this->provincialEduAchieve = $provincialEduAchieve;
	    return $this;
	}
public function getNationalEduAchieve()
{
    return $this->nationalEduAchieve;
}

public function setNationalEduAchieve($nationalEduAchieve)
{
    $this->nationalEduAchieve = $nationalEduAchieve;
    return $this;
}
public function getInternationalEduAchieve()
{
    return $this->internationalEduAchieve;
}

public function setInternationalEduAchieve($internationalEduAchieve)
{
    $this->internationalEduAchieve = $internationalEduAchieve;
    return $this;
}
public function getRefYear()
{
    return $this->refYear;
}

public function setRefYear($refYear)
{
    $this->refYear = $refYear;
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
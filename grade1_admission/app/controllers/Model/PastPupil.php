<?php


class PastPupil{
	private $schoolId;
	private $NIC;
	private $gradeOfAdmission;
	private $gradeOfLeaving;
	private $pastPupilOrganizationMembership;


	public function getPastPupilOrganizationMembership()
	{
	    return $this->pastPupilOrganizationMembership;
	}
	
	public function setPastPupilOrganizationMembership($pastPupilOrganizationMembership)
	{
	    $this->pastPupilOrganizationMembership = $pastPupilOrganizationMembership;
	    return $this;
	}
	public function getGradeOfLeaving()
	{
	    return $this->gradeOfLeaving;
	}
	
	public function setGradeOfLeaving($gradeOfLeaving)
	{
	    $this->gradeOfLeaving = $gradeOfLeaving;
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
	
	public function getNIC()
	{
	    return $this->NIC;
	}
	
	public function setNIC($NIC)
	{
	    $this->NIC = $NIC;
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
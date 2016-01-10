<?php

class PastPupil_contribution{
	private $contributionId;
	private $NIC;
	private $contributionDetail;

	public function getContributionId()
	{
	    return $this->contributionId;
	}
	
	public function setContributionId($contributionId)
	{
	    $this->contributionId = $contributionId;
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

public function getContributionDetail()
{
    return $this->contributionDetail;
}

public function setContributionDetail($contributionDetail)
{
    $this->contributionDetail = $contributionDetail;
    return $this;
}
}

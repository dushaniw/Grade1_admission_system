<?php

class Current_student_mark{
	private $application_id;
	private $no_learnt_grades;
	private $no_living_years;
	private $closeness_mark;
	private $residence_proof_mark;
	private $contribution_mark;


public function getContribution_mark()
{
    return $this->contribution_mark;
}

public function setContribution_mark($contribution_mark)
{
    $this->contribution_mark = $contribution_mark;
    return $this;
}

public function getResidence_proof_mark()
{
    return $this->residence_proof_mark;
}

public function setResidence_proof_mark($residence_proof_mark)
{
    $this->residence_proof_mark = $residence_proof_mark;
    return $this;
}
public function getCloseness_mark()
{
    return $this->closeness_mark;
}

public function setCloseness_mark($closeness_mark)
{
    $this->closeness_mark = $closeness_mark;
    return $this;
}

public function getNo_living_years()
{
    return $this->no_living_years;
}

public function setNo_living_years($no_living_years)
{
    $this->no_living_years = $no_living_years;
    return $this;
}
public function getNo_learnt_grades()
{
    return $this->no_learnt_grades;
}

public function setNo_learnt_grades($no_learnt_grades)
{
    $this->no_learnt_grades = $no_learnt_grades;
    return $this;
}

	public function getApplication_id()
	{
	    return $this->application_id;
	}
	
	public function setApplication_id($application_id)
	{
	    $this->application_id = $application_id;
	    return $this;
	}



}
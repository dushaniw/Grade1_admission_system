<?php

class PastPupil_mark{
	private $application_id;
	private $no_learnt_grades;
	private $achievement_mark;
	private $co_curricular_mark;
	private $contribution_mark;

	public function getApplication_id()
	{
	    return $this->application_id;
	}
	
	public function setApplication_id($application_id)
	{
	    $this->application_id = $application_id;
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

	public function getAchievement_mark()
	{
	    return $this->achievement_mark;
	}
	
	public function setAchievement_mark($achievement_mark)
	{
	    $this->achievement_mark = $achievement_mark;
	    return $this;
	}

	public function getCo_curricular_mark()
	{
	    return $this->co_curricular_mark;
	}
	
	public function setCo_curricular_mark($co_curricular_mark)
	{
	    $this->co_curricular_mark = $co_curricular_mark;
	    return $this;
	}

	public function getContribution_mark()
	{
	    return $this->contribution_mark;
	}
	
	public function setContribution_mark($contribution_mark)
	{
	    $this->contribution_mark = $contribution_mark;
	    return $this;
	}



}
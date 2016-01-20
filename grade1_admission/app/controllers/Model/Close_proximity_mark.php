<?php

class Close_proximity_mark {
    private $application_id;
    private $no_years_live_35;
    private $residence_proof_10;
    private $res_proof_other_5;
    private $closeness_50;


    public function getApplication_id()
    {
        return $this->application_id;
    }

    public function setApplication_id($application_id)
    {
        $this->application_id = $application_id;
        return $this;
    }


    public function getNo_years_live_35()
    {
        return $this->no_years_live_35;
    }

    public function setNo_years_live_35($no_years_live_35)
    {
        $this->no_years_live_35 = $no_years_live_35;
        return $this;
    }


    public function getResidence_proof_10()
    {
        return $this->residence_proof_10;
    }

    public function setResidence_proof_10($residence_proof_10)
    {
        $this->residence_proof_10 = $residence_proof_10;
        return $this;
    }


    public function getRes_proof_other_5()
    {
        return $this->res_proof_other_5;
    }

    public function setRes_proof_other_5($res_proof_other_5)
    {
        $this->res_proof_other_5 = $res_proof_other_5;
        return $this;
    }

    public function getCloseness_50()
    {
        return $this->closeness_50;
    }

    public function setCloseness_50($closeness_50)
    {
        $this->closeness_50 = $closeness_50;
        return $this;
    }
}
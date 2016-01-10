<?php

class Electoral_name_list_proof{
	private $NIC;
	private $year;
	private $grama_niladari_div_no;

public function getGrama_niladari_div_no()
{
    return $this->grama_niladari_div_no;
}

public function setGrama_niladari_div_no($grama_niladari_div_no)
{
    $this->grama_niladari_div_no = $grama_niladari_div_no;
    return $this;
}
public function getYear()
{
    return $this->year;
}

public function setYear($year)
{
    $this->year = $year;
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
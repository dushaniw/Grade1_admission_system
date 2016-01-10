<?php
class Grama_Niladari_Division{
private $grama_niladari_div_no;
private $name;
private $division;
private $district;


public function getDistrict()
{
    return $this->district;
}

public function setDistrict($district)
{
    $this->district = $district;
    return $this;
}

public function getDivision()
{
    return $this->division;
}

public function setDivision($division)
{
    $this->division = $division;
    return $this;
}

public function getName()
{
    return $this->name;
}

public function setName($name)
{
    $this->name = $name;
    return $this;
}

public function getGrama_niladari_div_no()
{
    return $this->grama_niladari_div_no;
}

public function setGrama_niladari_div_no($grama_niladari_div_no)
{
    $this->grama_niladari_div_no = $grama_niladari_div_no;
    return $this;
}
}
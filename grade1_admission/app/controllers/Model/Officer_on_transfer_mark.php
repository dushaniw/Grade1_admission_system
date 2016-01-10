<?php


class Officer_on_transfer_mark{

private $application_id;
private $distance_on_trans_mark;
private $closeness_mark;
private $no_serving_years;
private $time_by_transfer_mark;
private $unutilized_leave_mark;


public function getUnutilized_leave_mark()
{
    return $this->unutilized_leave_mark;
}

public function setUnutilized_leave_mark($unutilized_leave_mark)
{
    $this->unutilized_leave_mark = $unutilized_leave_mark;
    return $this;
}

public function getTime_by_transfer_mark()
{
    return $this->time_by_transfer_mark;
}

public function setTime_by_transfer_mark($time_by_transfer_mark)
{
    $this->time_by_transfer_mark = $time_by_transfer_mark;
    return $this;
}

public function getNo_serving_years()
{
    return $this->no_serving_years;
}

public function setNo_serving_years($no_serving_years)
{
    $this->no_serving_years = $no_serving_years;
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

public function getDistance_on_trans_mark()
{
    return $this->distance_on_trans_mark;
}

public function setDistance_on_trans_mark($distance_on_trans_mark)
{
    $this->distance_on_trans_mark = $distance_on_trans_mark;
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
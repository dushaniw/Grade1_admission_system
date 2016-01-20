<?php
class DBMarkController{
	public static function getCloseProximityMarkSet($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from close_proximity_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Close_proximity_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setNo_years_live_35($row["no_of_years_live_35"]);
                        $mark_set->setResidence_proof_10($row["residence_proof_10"]);
                        $mark_set->setRes_proof_other_5($row["res_proof_other_5"]);
                        $mark_set->setCloseness_50($row["closeness_50"]);
                }
        }
        return $mark_set;
	}

	public static function getCloseProximityMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from close_proximity_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Close_proximity_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setNo_years_live_35($row["no_of_years_live_35"]);
                        $mark_set->setResidence_proof_10($row["residence_proof_10"]);
                        $mark_set->setRes_proof_other_5($row["res_proof_other_5"]);
                        $mark_set->setCloseness_50($row["closeness_50"]);
                }
        }
        return intval($mark_set->getNo_years_live_35())+intval($mark_set->getResidence_proof_10())+
                        +intval($mark_set->getRes_proof_other_5())+intval($mark_set->getCloseness_50());
	}

	public static function getCurrentStudentMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from current_student_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Current_student_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setContribution_mark($row["contribution_mark"]);
                        $mark_set->setResidence_proof_mark($row["residence_proof_mark"]);
                        $mark_set->setCloseness_mark($row["closeness_mark"]);
                        $mark_set->setNo_living_years($row["no_living_years"]);
                        $mark_set->setNo_learnt_grades($row["no_learnt_grades"]);
                }
        }
        return intval($mark_set->getContribution_mark())+intval($mark_set->getResidence_proof_mark())+
                        +intval($mark_set->getCloseness_mark())+intval($mark_set->getNo_living_years())
                        +intval($mark_set->getNo_learnt_grades());
	}

	public static function getPastPupilMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from pastpupil_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new PastPupil_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setNo_learnt_grades($row["no_learnt_grades"]);
                        $mark_set->setAchievement_mark($row["achievement_mark"]);
                        $mark_set->setCo_curricular_mark($row["co_curricular_mark"]);
                        $mark_set->setContribution_mark($row["contribution_mark"]);
                }
        }
        return intval($mark_set->getNo_learnt_grades())+intval($mark_set->getAchievement_mark())+
                        +intval($mark_set->getCo_curricular_mark())+intval($mark_set->getContribution_mark());
	}

	public static function getEducationalStaffMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from educational_staff_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Educational_staff_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setIf_in_same_school_mark($row["if_in_same_school_mark"]);
                        $mark_set->setUtilized_leave_mark($row["unutilized_leave_mark"]);
                        $mark_set->setDifficult_service_mark($row["difficult_service_mark"]);
                        $mark_set->setNo_working_years($row["no_working_years"]);
                        $mark_set->setDistance_mark($row["distance_mark"]);
                }
        }
        return intval($mark_set->getIf_in_same_school_mark())+intval($mark_set->getUtilized_leave_mark())+
                        +intval($mark_set->getDifficult_service_mark())+intval($mark_set->getNo_working_years())
                        +intval($mark_set->getDistance_mark());
	}

	public static function getOfficerOnTransferMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from officer_on_transfer_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Officer_on_transfer_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setUnutilized_leave_mark($row["unutilized_leave_mark"]);
                        $mark_set->setTime_by_transfer_mark($row["time_by_transfer_mark"]);
                        $mark_set->setNo_serving_years($row["no_serving_years"]);
                        $mark_set->setCloseness_mark($row["closeness_mark"]);
                        $mark_set->setDistance_on_trans_mark($row["distance_on_trans_mark"]);
                }
        }
        return intval($mark_set->getUnutilized_leave_mark())+intval($mark_set->getTime_by_transfer_mark())+
                        +intval($mark_set->getNo_serving_years())+intval($mark_set->getCloseness_mark())
                        +intval($mark_set->getDistance_on_trans_mark());
	}

	public static function getPersonAbroadMark($application_id)
	{
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select * from person_abroad_mark where application_id='$application_id'";
        $result =$mysqli->query($query);
        $mark_set = new Person_abroad_mark();             
        if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {
                        $mark_set->setApplication_id($row["application_id"]);
                        $mark_set->setCloseness_mark($row["closeness_mark"]);
                        $mark_set->setReason_of_transfer($row["reason_of_transfer"]);
                        $mark_set->setTime_in_abroad($row["time_in_abroad"]);
                        
                }
        }
        return intval($mark_set->getCloseness_mark())+intval($mark_set->getReason_of_transfer())+
                        +intval($mark_set->getTime_in_abroad());
	}
}
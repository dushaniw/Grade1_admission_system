<?php

class DBPastPupilMarkingCriteriaController{
	public static function  addCriteria($ppmc){
		$schoolid=$ppmc->getSchoolId();
		$year=$ppmc->getRefYear();

		$intEduAch=$ppmc->getInternationalEduAchieve();
		$natEduAch=$ppmc->getNationalEduAchieve();
		$proEduAch=$ppmc->getProvincialEduAchieve();
		$disEduAch=$ppmc->getDistrictEduAchieve();
		$zonEduAch=$ppmc->getZonalEduAchieve();

		$intExtAch=$ppmc->getInternationalExtraCurricular();
		$natExtAch=$ppmc->getNationalExtraCurricular();
		$proExtAch=$ppmc->getProvincialExtraCurricular();
		$disExtAch=$ppmc->getDistrictExtraCurricular();
		$zonExtAch=$ppmc->getZonalExtraCurricular();

		$pastPupOrg=$ppmc->getPastPupilOrgMemeber();
		$contribution=$ppmc->getContribution();
		$other=$ppmc->getOther_after_school();

		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="insert into pastpupilmarkingcriteria values('$schoolid','$year','$intEduAch','$natEduAch','$proEduAch','$disEduAch','$zonEduAch','$intExtAch','$natExtAch','$proExtAch','$disExtAch','$zonExtAch','$pastPupOrg','$contribution','$other');";
        $result =$mysqli->query($query);
		
		return $result;
	}

	public static function getPastPupilMarkingCriteria($schoolid,$year){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select * from pastpupilmarkingcriteria where schoolid='$schoolid' and refyear='$year';";
        $result =$mysqli->query($query);

        $ppmc=new pastPupil_markingCriteria();
        if ($result->num_rows > 0) {	
        	if ($row = $result->fetch_assoc()) {
        		$ppmc->setSchoolId($row["schoolId"]);
				$ppmc->setRefYear($row["refYear"]);

				$ppmc->setInternationalEduAchieve($row["internationalEduAchieve"]);
				$ppmc->setNationalEduAchieve($row["nationalEduAchieve"]);
				$ppmc->setProvincialEduAchieve($row["provincialEduAchieve"]);
				$ppmc->setDistrictEduAchieve($row["districtEduAchieve"]);
				$ppmc->setZonalEduAchieve($row["zonalEduAchieve"]);

				$ppmc->setInternationalExtraCurricular($row["internationalExtraCurricular"]);
				$ppmc->setNationalExtraCurricular($row["nationalExtraCurricular"]);
				$ppmc->setProvincialExtraCurricular($row["provincialExtraCurricular"]);
				$ppmc->setDistrictExtraCurricular($row["districtExtraCurricular"]);
				$ppmc->setZonalExtraCurricular($row["zonalExtraCurricular"]);

				$ppmc->setPastPupilOrgMemeber($row["pastPupilOrgMember"]);
				$ppmc->setContribution($row["contribution"]);
				$ppmc->setOther_after_school($row["other_after_school"]);
				return $ppmc;
        	}
        	return null;
        }
        return null;
       

	}

	public static function getYearsOfAvailableCriteria($schoolid){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select refyear from pastpupilmarkingcriteria where schoolid='$schoolid' order by refyear desc ;";
        $result =$mysqli->query($query);

        $years= array();
        if ($result->num_rows > 0) {	
        	while ($row = $result->fetch_assoc()) {
        		$years[] =$row["refyear"];
        	}
        }
        return $years;
	}

	public static function getLastYearOfAvailableCriteria($schoolid){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
		$query="select refyear from pastpupilmarkingcriteria where schoolid='$schoolid' order by refyear desc limit 1 ;";
        $result =$mysqli->query($query);

        if ($result->num_rows > 0) {	
        	if ($row = $result->fetch_assoc()) {
        		$year =$row["refyear"];
        	}
        }
        return $year;
	}

}
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

}
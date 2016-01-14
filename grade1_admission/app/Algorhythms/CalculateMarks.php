<?php
class calculatemarks{

public function calculatemarks(){

$db=Connection::getInstance();
$mysqli=$db->getConnection();
//get data from application table and store them
$query = "select * from Application";         
$result =$mysqli->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
	$typeOfApplication=$row["typeOfApplication"];
	$distanceToSchool=$row["distanceToSchool"];
	$application_id=$row["application_id"];
	$schoolId=$row["schoolId"];
	$applicantId=$row["applicantId"];
	$orderOfPreference=$row["orderOfPreference"];
	$NIC;	
	$query = "select NIC from studentApplicant where applicantId ='$applicantId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $NIC=$row["NIC"];
		}
	}

	if($typeOfApplication=='1'){
	$closeness=0;
	if($distanceToSchool<1.0){
	$closeness=$closeness+50;}
	elseif($distanceToSchool<2.0){
	$closeness=$closeness+40;}
	elseif($distanceToSchool<3.0){
	$closeness=$closeness+30;}
	elseif($distanceToSchool<4.0){
	$closeness=$closeness+20;}
	elseif($distanceToSchool<5.0){
	$closeness=$closeness+10;}
	else{$closeness=$closeness+0;}

	$no_of_years_live=0;
	
	$noOfYearsInElectrocalRegister=0;
	$query = "select noOfYearsInElectrocalRegister from residentInClosedPosimaty where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $noOfYearsInElectrocalRegister=$row["noOfYearsInElectrocalRegister"];
		}
	}
	if($noOfYearsInElectrocalRegister<=5){
		$no_of_years_live=$no_of_years_live+(7*$noOfYearsInElectrocalRegister);
	}
	else{
	$no_of_years_live=$no_of_years_live+35;
		}
	$residence_proof=0;
	$typeOfTitleDeed=5;
	$query = "select typeOfTitleDeed from residentInClosedPosimaty where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $typeOfTitleDeed=$row["typeOfTitleDeed"];
		}
	}
	if($typeOfTitleDeed==0){
		$residence_proof=$residence_proof+10;	
	}
	elseif($typeOfTitleDeed==1){
		$residence_proof=$residence_proof+6;	
	}
	elseif($typeOfTitleDeed==2){
		$residence_proof=$residence_proof+4;	
	}
	elseif($typeOfTitleDeed==3){
		$residence_proof=$residence_proof+2;	
	}
	else{
		$residence_proof=$residence_proof+0;	
	}

	$res_proof_other=0;
	$noOfAditionalDocumentForResident=0;
	$query = "select noOfAditionalDocumentForResident from residentInClosedPosimaty where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $noOfAditionalDocumentForResident=$row["noOfAditionalDocumentForResident"];
		}
	}
	if($noOfAditionalDocumentForResident>=2){
		$res_proof_other=$res_proof_other+5;
	}
	elseif($noOfAditionalDocumentForResident==1){
		$res_proof_other=$res_proof_other+3;
	}
	else{
	$res_proof_other=$res_proof_other+0;
		}

	$query="insert into close_proximity_mark values('$application_id','$no_of_years_live','$residence_proof','$res_proof_other','$closeness'); ";
     	$mysqli->query($query);
}

if($typeOfApplication=='2'){
	$no_learnt_grades=0;
	$query = "select * from pastPupil where schoolId ='$schoolId'and NIC ='$NIC'";         
        $result =$mysqli->query($query);
	$gradeOfAdmission=0;
	$gradeOfLeaving=0;
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $gradeOfAdmission=(int) $row["gradeOfAdmission"];
		$gradeOfLeaving=(int) $row["gradeOfLeaving"];}
	}
	$no_of_years=$gradeOfLeaving-$gradeOfAdmission+1;
	$no_learnt_grades=$no_of_years*2;
	$achievement_mark=0;
	$query = "select * from PastPupilMarkingCriteria where schoolId ='$schoolId'";         
        $result =$mysqli->query($query);
	$internationalEduAchieve=0;
	$nationalEduAchieve=0;
	$provincialEduAchieve=0;
	$districtEduAchieve=0;
	$zonalEduAchieve=0;
	$internationalExtraCurricular=0;
	$nationalExtraCurricular=0;
	$provincialExtraCurricular=0;
	$districtExtraCurricular=0;
	$zonalExtraCurricular=0;
	$pastPupilOrgMember=0;
	$contributionType1=0;
	$contributionType2=0;
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $internationalEduAchieve=$row["internationalEduAchieve"];
		$nationalEduAchieve=$row["nationalEduAchieve"];
		$provincialEduAchieve=$row["provincialEduAchieve"];
		$districtEduAchieve=$row["districtEduAchieve"];
		$zonalEduAchieve=$row["zonalEduAchieve"];
		$internationalExtraCurricular=$row["internationalExtraCurricular"];
		$nationalExtraCurricular=$row["nationalExtraCurricular"];
		$provincialExtraCurricular=$row["provincialExtraCurricular"];
		$districtExtraCurricular=$row["districtExtraCurricular"];
		$zonalExtraCurricular=$row["zonalExtraCurricular"];
		$pastPupilOrgMember=$row["pastPupilOrgMember"];
		$contributionType1=$row["contributionType1"];
		$contributionType2=$row["contributionType2"];
		
		}
	}
	$achievement_mark=0;
	$co_curricular_mark=0;
	$query = "select type from paspupil_Achievement where NIC ='$NIC' and schoolId ='$schoolId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                if($row["type"]=='Education'){
			$achievement_mark= $internationalEduAchieve+$nationalEduAchieve+$provincialEduAchieve+$districtEduAchieve+$zonalEduAchieve;
			}
		 if($row["type"]=='Co_curricular'){
			$co_curricular_mark= $internationalExtraCurricular+$nationalExtraCurricular+$provincialExtraCurricular+$districtExtraCurricular+$zonalExtraCurricular;
			}
		}
	}
	if($achievement_mark>25){
		$achievement_mark=25;
		}
	if($co_curricular_mark>25){
		$co_curricular_mark=25;
		}
	$contribution_mark=0;
	$query = "select contributionDtail from pastpupil_contribution where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $contribution_mark=$pastPupilOrgMember+$contributionType1+$contributionType2;
		}
	}
	if($contribution_mark>24){
		$contribution_mark=24;
		}
	
	$query="insert into pastpupil_mark values('$application_id','$no_learnt_grades','$achievement_mark','$co_curricular_mark','$contribution_mark'); ";
     	$mysqli->query($query);
}

if($typeOfApplication=='3'){
	$year=0;
	$no_living_years=0;
	$query = "select year from electoral_name_list_proof where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $year=$row["year"];
		}
	}
	if($year<=5){
	$no_living_years=$year*3;
		}
	else{
	$no_living_years=15;
		}
	$closeness=0;
	if($distanceToSchool<1.0){
	$closeness=$closeness+35;}
	elseif($distanceToSchool<2.0){
	$closeness=$closeness+30;}
	elseif($distanceToSchool<3.0){
	$closeness=$closeness+25;}
	elseif($distanceToSchool<4.0){
	$closeness=$closeness+20;}
	elseif($distanceToSchool<5.0){
	$closeness=$closeness+10;}
	else{$closeness=$closeness+0;}
	$residence_proof=0;
	$typeOfTitleDeed=5;
	$query = "select typeOfTitleDeed from residentInClosedPosimaty where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $typeOfTitleDeed=$row["typeOfTitleDeed"];
		}
	}
	if($typeOfTitleDeed==0){
		$residence_proof=$residence_proof+10;	
	}
	elseif($typeOfTitleDeed==1){
		$residence_proof=$residence_proof+6;	
	}
	elseif($typeOfTitleDeed==2){
		$residence_proof=$residence_proof+4;	
	}
	elseif($typeOfTitleDeed==3){
		$residence_proof=$residence_proof+2;	
	}
	else{
		$residence_proof=$residence_proof+0;	
	}
	$contribution=0;
	$admissionNumber;
	$query = "select admissionNumber from sibling where applicantId ='$applicantId' and schoolId='$schoolId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $admissionNumber=$row["admissionNumber"];
		}
	}
	$var1=0;
	$query = "select * from cur_pupil_educationalAchievement where admissionNumber ='$admissionNumber' and schoolId='$schoolId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
               $var1=1;
		}
	}
	if($var1==1){$contribution=$contribution+5;}
	$var2=0;
	$query = "select * from cur_pupil_donation where admissionNumber ='$admissionNumber' and schoolId='$schoolId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
               $var2=1;
		}
	}
	if($var2==1){$contribution=$contribution+5;}
	$no_learnt_grades=0;
	$dateOfAdmission=0;
	$query = "select dateOfAdmission from CurrentStudent where admissionNumber ='$admissionNumber' and schoolId='$schoolId'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
              $dateOfAdmission=$row["dateOfAdmission"];
		}
	}
	$split_date = split("-", $dateOfTransferReceived);
	$year =(int) $split_date[0];
	$yrgap=2016-$year;
	$no_learnt_grades=$year*3;
	if($no_learnt_grades>30){
		$no_learnt_grades==30;
		}
	$query="insert into current_student_mark values('$application_id','$no_learnt_grades','$no_living_years','$closeness','$residence_proof','$contribution'); ";
     	$mysqli->query($query);
}

if($typeOfApplication=='4'){
		$totalServicePeriod=0;
		$no_working_years=0;
	$query = "select totalServicePeriod from educationalServiceOfficer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $totalServicePeriod=$row["totalServicePeriod"];
		}
	}
	$no_working_years=$totalServicePeriod*20;
	if($no_working_years>20){
		$no_working_year=20;
	}
	$distance_mark=0;
	$distanceFromResidentToWork=0;
	$query = "select distanceFromResidentToWork from educationalServiceOfficer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $distanceFromResidentToWork=$row["distanceFromResidentToWork"];
		}
	}
	if($distanceFromResidentToWork>100){
		$distance_mark=$distance_mark+35;
		}
	elseif($distanceFromResidentToWork>50){
		$distance_mark=$distance_mark+25;
		}
	elseif($distanceFromResidentToWork>25){
		$distance_mark=$distance_mark+15;
		}
	else{$distance_mark=$distance_mark+5;}

	$difficult_service_mark=0;
	$periodOfDifficultSchoolService=0;
	$query = "select periodOfDifficultSchoolService from educationalServiceOfficer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $periodOfDifficultSchoolService=$row["periodOfDifficultSchoolService"];
		}
	}
	$difficult_service_mark=$periodOfDifficultSchoolService*5;
	if($difficult_service_mark>25){
		$difficult_service_mark=25;
		}
	$no_of_leaves=0;
	$unutilized_leave_mark=0;
	$query = "select * from educationalServiceOfficer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
		if($row["year1RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
               if($row["year2RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			} 
		if($row["year3RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
		if($row["year4RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
		}
	}
	$if_in_same_school_mark=0;
	$servingSchoolId;
	$servingPeriodOfSchool=0;
	$query = "select * from educationalServiceOfficer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $servingSchoolId=$row["servingSchoolId"];
		$servingPeriodOfSchool=$row["servingPeriodOfSchool"];
		}
	}
	if(strcmp($schoolId,$servingSchoolId)==0){
		if($servingPeriodOfSchool>=3){
			$if_in_same_school_mark=$if_in_same_school_mark+10;}
		else{$if_in_same_school_mark=$if_in_same_school_mark+5;}
               }

     $query="insert into educational_staff_mark values('$application_id','$no_working_years','$distance_mark','$difficult_service_mark','$unutilized_leave_mark','$if_in_same_school_mark'); ";
     	$mysqli->query($query);
	}
	
	if($typeOfApplication=='5'){
		$distanceOfTransfer=0;
		$distance_on_trans_mark=0;
	$query = "select distanceOfTransfer from officerOnTransfer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $distanceOfTransfer=$row["distanceOfTransfer"];
		}
	}
	if($distanceOfTransfer>100){
		$distance_on_trans_mark=$distance_on_trans_mark+40;
		}
	elseif($distanceOfTransfer>50){
		$distance_on_trans_mark=$distance_on_trans_mark+30;
		}
	elseif($distanceOfTransfer>25){
		$distance_on_trans_mark=$distance_on_trans_mark+20;
		}
	else{
	$distance_on_trans_mark=$distance_on_trans_mark+10;}
	$closeness_mark=0;
	if($distanceToSchool<1.0){
	$closeness_mark=$closeness_mark+35;}
	elseif($distanceToSchool<2.0){
	$closeness_mark=$closeness_mark+30;}
	elseif($distanceToSchool<3.0){
	$closeness_mark=$closeness_mark+25;}
	elseif($distanceToSchool<4.0){
	$closeness_mark=$closeness_mark+20;}
	elseif($distanceToSchool<5.0){
	$closeness_mark=$closeness_mark+10;}
	else{$closeness_mark=$closeness_mark+0;}
	$no_serving_years=0;
	$servicePeriod=0;
	$query = "select servicePeriod from officerOnTransfer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $servicePeriod=$row["servicePeriod"];
		}
	}
	$no_serving_years=$servicePeriod*1;
	if($no_serving_years>10){
		$no_serving_years=10;
		}
	$time_by_transfer_mark=0;
	$dateOfTransferReceived;
	$query = "select dateOfTransferReceived from officerOnTransfer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $dateOfTransferReceived=$row["dateOfTransferReceived"];
		}
	}
	//i dnt know the delimeter
	$split_date = split("-", $dateOfTransferReceived);
	$year =(int) $split_date[0];
	$yrgap=2016-$year;
	if($yrgap==1){
		$time_by_transfer_mark=$time_by_transfer_mark+5;
		}
	elseif($yrgap==2){
		$time_by_transfer_mark=$time_by_transfer_mark+4;
		}
	elseif($yrgap==3){
		$time_by_transfer_mark=$time_by_transfer_mark+3;
		}
	elseif($yrgap==4){
		$time_by_transfer_mark=$time_by_transfer_mark+2;
		}
	elseif($yrgap==5){
		$time_by_transfer_mark=$time_by_transfer_mark+1;
		}
	else{$time_by_transfer_mark=$time_by_transfer_mark+0;
		}
	$unutilized_leave_mark=0;
	$query = "select * from officerOnTransfer where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
		if($row["year1RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
               if($row["year2RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			} 
		if($row["year3RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
		if($row["year4RemLeave"]>=20){
			$unutilized_leave_mark=$unutilized_leave_mark+2.5;
			}
		}
	}
	$query="insert into officer_on_transfer_mark values('$application_id','$distance_on_trans_mark','$closeness_mark','$no_serving_years','$time_by_transfer_mark','$unutilized_leave_mark'); ";
     	$mysqli->query($query);
//f	
}

if($typeOfApplication=='6'){
	$periodAboardStay=0;
	$time_in_abroad=0;
	$query = "select periodAboardStay from personComingFromAboard where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $periodAboardStay=$row["periodAboardStay"];
		}
	}
	if($periodAboardStay>=3){
		$time_in_abroad=$time_in_abroad+25;
		}
	if($periodAboardStay=2){
		$time_in_abroad=$time_in_abroad+15;
		}
	if($periodAboardStay=1){
		$time_in_abroad=$time_in_abroad+10;
		}
	$reasonsForStay=0;
	$reason_of_transfer=0;
	//In schema reasonForStay in personComingFromAboard should be int
	$query = "select reasonsForStay from personComingFromAboard where NIC ='$NIC'";         
        $result =$mysqli->query($query);
	if ($result->num_rows > 0) {
           if($row = $result->fetch_assoc()) {
                $reasonsForStay=$row["reasonsForStay"];
		}
	}
	if($reasonsForStay==1){
		$reason_of_transfer=$reason_of_transfer+40;
		}
	if($reasonsForStay==2){
		$reason_of_transfer=$reason_of_transfer+30;
		}
	if($reasonsForStay==3){
		$reason_of_transfer=$reason_of_transfer+20;
		}
	
	if($reasonsForStay==4){
		$reason_of_transfer=$reason_of_transfer+10;
		}
	$closeness_mark=0;
	if($distanceToSchool<1.0){
	$closeness_mark=$closeness_mark+35;}
	elseif($distanceToSchool<2.0){
	$closeness_mark=$closeness_mark+30;}
	elseif($distanceToSchool<3.0){
	$closeness_mark=$closeness_mark+25;}
	elseif($distanceToSchool<4.0){
	$closeness_mark=$closeness_mark+20;}
	elseif($distanceToSchool<5.0){
	$closeness_mark=$closeness_mark+10;}
	else{$closeness_mark=$closeness_mark+0;}
	$query="insert into person_abroad_mark values('$application_id','$time_in_abroad,'$reason_of_transfer','$closeness_mark'); ";
     	$mysqli->query($query);
	
		
//f	
}

	}
}

}


}
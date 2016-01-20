<?php
class SchoolSelector{

public static function calculateschool(){

$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query1="select * from school;";
        $result1 =$mysqli->query($query1);
        $schools= array();
        if ($result1->num_rows > 0) {
          
          while($row = $result1->fetch_assoc()) {
            $school_no;
            $school = new school();
            $school->setSchool_id($row["schoolId"]);
            $school_no=$row["schoolId"];
            $school->setSchool_name($row["name"]);
            $school->setMale_percentage($row["malePercentage"]);
            $school->setCategory($row["category"]);
            $school->setSinhala_percentage($row["sinhalaPercentage"]);
            $school->setContact_no($row["contactNumber"]);
            $school->setNo_of_classes($row["noofClasses"]);
            $capacity;
            $capacity=$row["noofClasses"]*40;
            $school->setEmail($row["email"]);
            $school->setPassword($row["password"]);
            $schools[] = $school;

          //get all application ids
        //$length=sizeof($Applications);
            for($t=1;$t<7;$t++){
              for($m=1;$m<7;$m++){
    $Applications[] = array();
        $i=0;
    $query4 = "select * from Application where typeOfApplication='$m' and orderOfPreference='$t' and schoolId='$school_no' and isverified='1'";         
          $result4 =$mysqli->query($query4);
    if($result4->num_rows > 0) {
              while($row = $result4->fetch_assoc()) {
                
                   $Applications[$i]=$row["application_id"];
                     $i++;

    }

  }

  $length=sizeof($Applications);
  //save marks in array
  $Application_Marks[] = array();
  //final list of scools in descenting order  of marks
  $schoolselectids[]=array();

 /////errrroooooooorrrrrrrrrrrrrrrr
  if ($result4->num_rows  > 0) {
        // do one thing{
    for ($x = 0; $x <sizeof($Applications); $x++) {
        $id=$Applications[$x];
        if($t==1){
       $query = "select * from close_proximity_mark where application_id='$id'";         
          $result =$mysqli->query($query);
        $capacityquota=$capacity* 0.5;}
        elseif($t==2){
       $query = "select * from pastpupil_mark where application_id='$id'";         
          $result =$mysqli->query($query);
          $capacityquota=$capacity* 0.25;} 
         elseif($t==3){
       $query = "select * from current_student_mark where application_id='$id'";         
          $result =$mysqli->query($query);
          $capacityquota=$capacity* 0.15;} 
         elseif($t==4){
       $query = "select * from educational_staff_mark where application_id='$id'";         
          $result =$mysqli->query($query);
          $capacityquota=$capacity* 0.05;} 
         elseif($t==5){
       $query = "select * from officer_on_transfer_mark where application_id='$id'";         
          $result =$mysqli->query($query);
          $capacityquota=$capacity* 0.04;} 
         elseif($t==6){
       $query = "select * from person_abroad_mark where application_id='$id'";         
          $result =$mysqli->query($query);
          $capacityquota=$capacity* 0.01;}  
     if ($result->num_rows > 0) {
          
          if($row = $result->fetch_assoc()) {
            if($t==1){
            $total=$row["no_of_years_live_35"]+$row["residence_proof_10"]+$row["res_proof_other_5"] +$row["closeness_50"] ;}  
            if($t==2){
             $total=$row["no_learnt_grades"]+$row["achievement_mark"]+$row["co_curricular_mark"] +$row["contribution_mark"] ;}   
             if($t==3){
             $total=$row["no_learnt_grades"]+$row["no_living_years"]+$row["closeness_mark"] +$row["residence_proof_mark"]+$row["contribution_mark"] ;}
             if($t==4){
            $total=$row["no_working_years"]+$row["distance_mark"]+$row["difficult_service_mark"] +$row["unutilized_leave_mark"]+$row["if_in_same_school_mark"] ;}  
            if($t==5){
             $total=$row["distance_on_trans_mark"]+$row["closeness_mark"]+$row["no_serving_years"] +$row["no_serving_years"]+$row["unutilized_leave_mark"] ;}  
             if($t==6){
             $total=$row["time_in_abroad"]+$row["reason_of_transfer"]+$row["closeness_mark"] ;}    
             $Application_Marks[$x]=$total;
            }
              
            }
            else{var_dump('');}
            
      }
      
      $length=sizeof($Application_Marks);

    for ($x = 0; $x <$length; $x++) {
      $max_key = -1;
    $max_val = -1;
      for ($y = 0; $y <$length; $y++) {
            if (($Application_Marks[$y])> $max_val){
                $max_val=$Application_Marks[$y];
                $max_key=$y;
            }
         }
     $schoolselectids[$x]=$Applications[$max_key];
     var_dump($schoolselectids[$x]);
     $Application_Marks[$max_key]=0;
 }

    if($capacityquota>$length){
    $capacityquota=$length;
}
for ($x = 0; $x <$capacityquota; $x++) {
    $id=$schoolselectids[$x];
    $query = "select applicantId from  Application where application_id='$id'";         
          $result =$mysqli->query($query);
          $applicant_no;
        if ($result->num_rows > 0) {
          
          if($row = $result->fetch_assoc()) {
            $applicant_no=  $row["applicantId"];
      }
    }
    $query = "UPDATE studentApplicant SET selectedSchoolId='$school_no' WHERE applicantId=$applicant_no";
    $mysqli->query($query);
  }
  unset($Applications);
  unset($Application_Marks);
  unset($schoolselectids);
}
else{
  unset($Applications);
  unset($Application_Marks);
  unset($schoolselectids);}
    }
  }
  }
   
  
    

  
  }
        }   
  }//
  



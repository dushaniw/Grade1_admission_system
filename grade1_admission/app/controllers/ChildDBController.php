<?php

class ChildDBController{
	public static function getAllChildren($guardian_nic){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();       	
        $query = "select * from studentapplicant where NIC ='$guardian_nic'";        	
        $result =$mysqli->query($query);

        if (mysqli_num_rows($result) > 0) {
    	// output data of each row
        	$array = array();
    		while($row = mysqli_fetch_assoc($result)) {
    			$child=new Child($row["applicantid"],$row["NIC"],$row["firstname"],$row["lastname"],$row["gender"],$row["religion"],$row["dob"]);
      			array_push($array, $child);
    		}
		}else{
			return null;
    	}
	}

}
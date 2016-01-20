<?php
class DBDeadlineController{
	public static function getDeadline(){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select deadline from deadline;";
        $result =$mysqli->query($query);

        if ($result!=null){
                   
            if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {  
                    return ($row["deadline"]);
                }
            }
        }
        
        
	}
	public static function setDeadline($deadline){
		$db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="update deadline set deadline='$deadline';";
        $result =$mysqli->query($query);
        return $result;    
	}

    public static function getIsdatepassed(){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="select isdatepassed from deadline;";
        $result =$mysqli->query($query);

        if ($result!=null){
                   
            if ($result->num_rows > 0) {    
                if($row = $result->fetch_assoc()) {  
                    return ($row["isdatepassed"]);
                }
            }
        }
        
        
    }
    public static function setIsdatepassed($isdatepassed){
        $db=Connection::getInstance();
        $mysqli=$db->getConnection();
        $query="update deadline set isdatepassed='$isdatepassed';";
        $result =$mysqli->query($query);
        return $result;    
    }
}



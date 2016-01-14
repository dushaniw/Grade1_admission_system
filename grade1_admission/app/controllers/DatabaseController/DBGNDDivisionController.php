<?php
class DBGNDDivisionController
{

	public static function getAllDivision()
	{

			$db=Connection::getInstance();
            $mysqli=$db->getConnection();
			$query="select * from grama_niladari_division";
            $result =$mysqli->query($query);
            $divisions= array();
            if ($result->num_rows > 0) {	
            	while ($row = $result->fetch_assoc()) {
            		$division=new GramaNiladariDivision();
            		$division->setGrama_niladari_div_no($row["grama_niladari_div_no"]);
                    $division->setName($row["name"]);
                  $division->setDivision($row["division"]);        
                    $division->setDivision($row["district"]);
                    $divisions[]=$division;
    			}
            }
            return $divisions;

	}
}
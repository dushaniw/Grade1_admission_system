<?php
class validationhandler{

public static function checkNIC($NIC){
    $last_character = substr($NIC,-1);
    $idnum=substr($NIC,0,-1);
    if(strlen($idnum)!=9){
        return false;
    }
   elseif (!preg_match("/^[0-9]{9}$/",$idnum)) { 
             return false;
   }
     elseif( $last_character=='V' or $last_character=='v'){
            return true;
    }
    else{
        return false;
    }
    }

}
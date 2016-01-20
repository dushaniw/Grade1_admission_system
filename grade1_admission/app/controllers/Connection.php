<?php

/**
 * Created by PhpStorm.
 * User: DinsuG
 * Date: 12/17/2015
 * Time: 8:51 AM
 */
class Connection
{
    private $_connection;
    private static $_instance;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "g1ams";

    public static function getInstance() {
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);


        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    private function __clone() { }

    public function getConnection() {
        return $this->_connection;
    }
}
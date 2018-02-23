<?php


class MySQLConnection {

    public static $db=null;

    /* ------ constructor ---------- */
    private function __construct($host, $usernname ,$password, $database){
        MySQLConnection::$db = mysqli_connect($host, $usernname, $password, $database) or die("Mysql connection error is occured.");
        MySQLConnection::$db->set_charset("utf8mb4");
    }

    public static function getConnection($host, $usernname ,$password, $database){
        $con=new MySQLConnection($host, $usernname ,$password, $database);
		return MySQLConnection::$db;
    }



} 
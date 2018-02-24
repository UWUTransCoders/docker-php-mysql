<?php




session_start();





define("DB_HOST","localhost");
define("DB_USER","phpmyadmin");
define("DB_PASSWORD","abc123");
define("DB_NAME","test");



require(__DIR__."/classes/MySQLConnection.php");
$db=MySQLConnection::getConnection(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//var_dump($db);







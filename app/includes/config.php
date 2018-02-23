<?php




session_start();





define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","test");



require(__DIR__."/classes/MySQLConnection.php");
$db=MySQLConnection::getConnection(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//var_dump($db);







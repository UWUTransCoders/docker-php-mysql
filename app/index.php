<?php
require("includes/config.php");


$result = $db->query("SELECT * FROM test");
$a = array();
while($node = $result->fetch_assoc()){
    $a[] = $node;
}

echo(json_encode($a));
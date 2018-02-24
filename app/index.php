<?php
require("includes/config.php");

header("Content-Type:application/json");

$result = $db->query("SELECT * FROM test");
$a = array();
while($node = $result->fetch_assoc()){
    $a[] = $node;
}

echo(json_encode($a));
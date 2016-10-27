<?php

$con = mysql_connect("localhost", "root", "");

if (!$con) {
    die("cant connect".mysql_error());
}  else {
$db = mysql_selectdb("demo_tuition_db", $con);    
}



?>

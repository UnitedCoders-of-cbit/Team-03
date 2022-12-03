<?php

$sname= "localhost";
$unmae= "akhil";
$password = "CBIT@3510";
$db_name = "demo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>
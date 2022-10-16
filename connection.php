<?php

$dbhost = "10.98.158.10";
$dbuser = "root";
$dbpass = "panicap";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

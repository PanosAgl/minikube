<?php

$dbhost = "10.104.185.62";
$dbuser = "root";
$dbpass = "panicap";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

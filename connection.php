<?php

$dbhost = "10.109.226.31";
$dbuser = "root";
$dbpass = "panicap";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

<?php

$dbhost = "10.99.86.205";
$dbuser = "root";
$dbpass = "panos";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

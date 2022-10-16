<?php

$dbhost = "10.109.216.91";
$dbuser = "root";
$dbpass = "panos";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

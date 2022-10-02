<?php

$dbhost = "10.106.127.56";
$dbuser = "root";
$dbpass = "panos";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>

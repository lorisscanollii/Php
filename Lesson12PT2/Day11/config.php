<?php

$user="root";
$pass="";
$server="localhost";
$dbname="dblorisi";

try {
	
	$conn =new PDO("mysql:host=$server;dbname=$dblorisi",$user,$pass);


} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}




?>
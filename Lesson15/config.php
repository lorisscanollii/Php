<?php

$users="root";
$pass="";
$server="localhost";
$dbname="dblorisi";
try {
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$users,$pass);
} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>
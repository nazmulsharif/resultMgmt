<?php

 function databaseConnection(){
 	global $conn;
 	$serverName = "localhost";
 	$userName = "root";
 	$password = "";
 	$dbName = "websoft";
 	$conn = new mysqli($serverName, $userName, $password, $dbName);

 }


?>
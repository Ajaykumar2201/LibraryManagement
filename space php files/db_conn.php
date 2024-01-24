<?php


// initializing variables

$sname= "localhost";
$username="root";
$possword  = "";

$db_name = "library";
// connect to the database
$conn = mysqli_connect($sname, $username, $possword, $db_name);

if (!$conn) {
	echo "connection failed";
	exit();
}
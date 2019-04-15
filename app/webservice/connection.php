<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "host=aa1bdr1mp3fpivs.casa8f2ijdnu.us-west-2.rds.amazonaws.com"; 
$port = "port=5432";
$dbname = "dbname=bantay";
$user = "user=bantay password=zaq12wsx";

$conn = pg_connect( "$host $port $dbname $user" );

if(!$conn){
	echo "Error : Unable to open database\n";
} 
else {
	#echo "Opened database successfully\n";
}
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "host=bigeye.msugensan.edu.ph";
$port = "port=5440";
$dbname = "dbname=bantaymsu";
$credentials = "user=bea password=bea";

$conn = pg_connect( "$host $port $dbname $credentials" );

if(!$conn){
	echo "Error : Unable to open database\n";
} 
else {
	#echo "Opened database successfully\n";
}
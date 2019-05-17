<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "host=3.1.247.137";
$port = "port=5432";
$dbname = "dbname=bantaymsu1";
$credentials = "user=beabaebay password=beabaebay";

$conn = pg_connect( "$host $port $dbname $credentials" );

if(!$conn){
	echo "Error : Unable to open database\n";
} 
else {
	#echo "Opened database successfully\n";
}
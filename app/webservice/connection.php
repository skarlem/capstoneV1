<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=bantaymsu";
$credentials = "user=postgres password=12345";

$conn = pg_connect( "$host $port $dbname $credentials" );

if(!$conn){
	echo "Error : Unable to open database\n";
} 
else {
	#echo "Opened database successfully\n";
}
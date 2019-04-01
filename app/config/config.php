<?php
function getConn(){
$host = "host=aa1bdr1mp3fpivs.casa8f2ijdnu.us-west-2.rds.amazonaws.com";
$port = "port=5432";
$dbname = "dbname=bantay";
$credentials = "user=bantay password=zaq12wsx";

$db = pg_connect( "$host $port $dbname $credentials" );

return $db;
}

?>
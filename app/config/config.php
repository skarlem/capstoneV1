<?php
function getConn(){
$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=bantaychuchu";
$credentials = "user=postgres password=1318";

$db = pg_connect( "$host $port $dbname $credentials" );

return $db;
}

?>
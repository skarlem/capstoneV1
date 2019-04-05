<?php
include 'connection.php';

$query = "SELECT  * FROM crime_db.mapdata";

$result = pg_query($conn, $query);
$arr = array();

$recNo = 1;

while ($row = pg_fetch_array($result)) {
	$arr[] = $row;
}

echo json_encode($arr);

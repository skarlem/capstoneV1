<?php
header('Content-Type: text/plain');
$jsontext = utf8_encode($_POST['jsontext']); // Don't forget the encoding
$data = json_decode($jsontext, true);

$eid = $data['emergency_id'][0];

echo updtemergencystat($eid);;

exit();

######################

function updtemergencystat($id){
	include 'connection.php';
	$data = array(
		'e_report_status' => 2
	);
	$condition = array(
		'e_report_id' => $id 
	);

	return $result = pg_update($conn, 'crime_db.emergency_report', $data, $condition) or die ("Cannot update!");
	
}
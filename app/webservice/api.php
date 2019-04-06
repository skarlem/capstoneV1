<?php
require_once 'connection.php';

$response = array();

if(isset($_GET['apicall'])){

	switch ($_GET['apicall']) {

		case 'register':
			include 'register.php';
			break;

		case 'login':
			include 'login.php';
			break;

		case 'getmapdata':
			include 'getmapdata.php';
			break;

		default:
			$response['error'] 		= true;
			$response['message'] 	= 'Invalid operation called.';
			break;
	}
}
else{
	$response['error'] 		= true;
	$response['message'] 	= 'Invalid API call.';
}

echo json_encode($response);


 
 function checkParameters($params){ 
	foreach($params as $param){
	 	if(!isset($_POST[$param])){
	 		return false; 
	 	}
	}
	return true; 
 }

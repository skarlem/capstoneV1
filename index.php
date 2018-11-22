<?php

if (isset($_GET[md5("controller")]) ) {	
	session_start();
	include_once('app/helper/helper.php');	
	include_once('app/controllers/controller.php');
	// Close the connection
}
else{
	 header("Location: index.php?".md5("controller")."=".md5('login')); 	
}




?>

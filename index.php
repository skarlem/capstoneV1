<?php

if (isset($_GET[md5("controller")]) ) {		
	include_once('app/controllers/controller.php');
	
}
else{
	 header("Location: index.php?".md5("controller")."=".md5('login')); 	
}

?>
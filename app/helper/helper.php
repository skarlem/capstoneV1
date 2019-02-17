<?php
function locked(){ 
	if(empty($_SESSION)) {
		header("Location: index.php?".md5("controller")."=".md5('login')); 	
		exit();
	}
}

?>
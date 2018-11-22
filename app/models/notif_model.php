<?php

//select function
function getNotif(){

	$result = pg_query(getConn(), "SELECT * FROM transactions");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	else{
		while($row = pg_fetch_array($result)){
              $markers[] = $row;
            }
	}
	    
	return $markers;
}


// get number of rows in
function getNumRows(){
	$result = pg_query(getConn(), "SELECT * FROM transactions");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	else{
		$rows = pg_num_rows($result);
	}    
	return $rows;
}

function butaw(){
	$x = '5';
	return $x;
}

?>
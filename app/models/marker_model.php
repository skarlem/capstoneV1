<?php

//select function
function getMarkers(){
	//open the json file
	$fp = fopen('app/controllers/results.json', 'w+');
	$markers =array();

	$result = pg_query(getConn(), "
		
	
select a.*,f.classification_desc,f.category_desc,f.status_description,f.action_taken,f.what_happened from crime_db.incident_report as a
left OUTER join crime_db.mapdata as f on f.marker_id = a.marker_id order by marker_id;


	
	");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	else{
		while($row = pg_fetch_array($result)){
              $markers[] = $row;
            }
	}
	//print into the json file
        fwrite($fp, json_encode($markers, JSON_PRETTY_PRINT)); 
        fclose($fp);       
	return $markers;
}

//update function
function updateMarker($data,$where){
	$res = pg_update(getConn(), 'crime_db.mapdata', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}


//delete function
function deleteMarker($where){
	$res = pg_delete(getConn(), 'crime_db.mapdata', $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}

//insert function
	function insertMarker($data){
	//foreach ($data as $key => $users) {
	    $res = pg_insert(getConn(), 'crime_db.incident_records' , $data);
	    if ($res) {
	      echo "Inserted user";
	      $is_inserted = true;
	    } else {
	      echo pg_last_error(getConn()) . " <br />";
	      $is_inserted = false;	
	    }
	//}
	return $is_inserted;
}

//insert into item table
function insertItem($data){
	$res = pg_insert(getConn(), 'crime_db.item_involved' , $data);
	if ($res) {
		echo "Inserted item";
		$is_inserted = true;
	} else {
		echo pg_last_error(getConn()) . " <br />";
		$is_inserted = false;	
	}
//}
return $is_inserted;
}


//insert into incident narrative table
function insertNarrative($data){
	$res = pg_insert(getConn(), 'crime_db.incident_narratives' , $data);
	if ($res) {
		echo "Inserted item";
		$is_inserted = true;
	} else {
		echo pg_last_error(getConn()) . " <br />";
		$is_inserted = false;	
	}
//}
return $is_inserted;
}
//insert into persons involved
function insertPerson($data){
	$res = pg_insert(getConn(), 'crime_db.persons_involved' , $data);
	if ($res) {
		echo "Inserted persons";
		$is_inserted = true;
	} else {
		echo pg_last_error(getConn()) . " <br />";
		$is_inserted = false;	
	}
//}
return $is_inserted;
}

//get the most recent id of markers
function getMarkerId(){
		$markers =array();

		$result = pg_query(getConn(), "
				select max(incident_records.marker_id) as marker_id from crime_db.incident_records;
		");
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

//insert function
function insertCategory($data){
	//foreach ($data as $key => $users) {
	    $res = pg_insert(getConn(), 'crime_db.category' , $data);
	    if ($res) {
	      echo "Inserted user";
	      $is_inserted = true;
	    } else {
	      echo pg_last_error(getConn()) . " <br />";
	      $is_inserted = false;	
	    }
	//}
	return $is_inserted;
}



function getCategory(){

$markers =array();

$result = pg_query(getConn(), "
select * from crime_db.category order by category_id asc;
");
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



function getEmergency(){
	
$result = pg_query(getConn(), "
select * from crime_db.emergency_report;
");
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

function getAccounts(){
	
$result = pg_query(getConn(), "
select * from crime_db.accounts;
");
if (!$result) {
		echo "An error occurred.\n";
		exit;
}
else{
	while($row = pg_fetch_array($result)){
						$account[] = $row;
					}
}       
return $account;
}


?>
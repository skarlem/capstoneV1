<?php

//select function
function getMarkers(){
	//open the json file
	$fp = fopen('app/controllers/results.json', 'w+');
	$markers =array();

	$result = pg_query(getConn(), "
	select distinct school_id,marker_id,lat,lng,date,location_description,persons_involved,victim,suspect,incident_narrative,action_taken,
	classification_desc,category_desc,class_type,fullname as reported_by
	from(
		
		(select f.marker_id,f.lat,f.lng,f.date,f.location_description,f.class,f.classification_id,f.category,f.persons_involved,f.victim,f.suspect,h.category_id,h.category_desc,f.incident_narrative,f.action_taken,
		 f.reported_by,g.fullname,g.school_id,j.class_type from crime_db.mapdata as f
			natural join crime_db.accounts as g
		 	natural join crime_db.category as h
		 	natural join crime_db.class_type as j
		 where f.reported_by = g.school_id and f.category = h.category_id and f.class = j.class_type_id
		
		) as a
	inner join 
	
	(select classification_id,classification_desc from crime_db.classification 
	
	
	) as b
	
	on a.classification_id = b.classification_id
		
	);
	
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
	    $res = pg_insert(getConn(), 'crime_db.mapdata' , $data);
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


?>
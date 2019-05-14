<?php




function getConn(){
$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=bantaymsu";
$credentials = "user=postgres password=12345";

$db = pg_connect( "$host $port $dbname $credentials" );
	
	return $db;
}


//select function
function getMarkers(){
	//open the json file
	$fp = fopen('app/controllers/results.json', 'w+');
	$markers =array();

	$result = pg_query(getConn(), "
	SELECT a.*,f.classification_desc,f.category_desc,f.status_description,f.action_taken,f.what_happened,f.status_id,f.narrative_id,f.classification_id,f.recommendation
	FROM crime_db.incident_report as a 
	LEFT OUTER JOIN crime_db.mapdata as f ON f.marker_id = a.marker_id 
	ORDER BY date DESC;
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

function encodeDate(){
	
}

//update function
function updateMarker($data,$where){
	$res = pg_update(getConn(), 'crime_db.incident_records', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}




//update function narrative
function updateNarrative($data,$where){
	$res = pg_update(getConn(), 'crime_db.incident_narratives', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}


//update function account
 function updateAccount($data,$where){
	$res = pg_update(getConn(), 'crime_db.accounts', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}




//update function item
function updateItem($data,$where){
	$res = pg_update(getConn(), 'crime_db.item_involved', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}



//update function item
function updatePerson($data,$where){
	$res = pg_update(getConn(), 'crime_db.persons_involved', $data, $where);
	if ($res) {
	  	echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 echo "error in input.. <br />";
		 
		$is_updated = false;
	}
	return $is_updated;
}



//delete emergency function
function deleteEmergency($where){
	$res = pg_delete(getConn(), 'crime_db.emergency_report', $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}




//delete item function
function deleteItem($where){
	$res = pg_delete(getConn(), 'crime_db.item_involved', $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}


//delete item function
function deletePerson($where){
	$res = pg_delete(getConn(), 'crime_db.persons_involved', $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}

//delete account
function deleteAccount($where){
	$res = pg_delete(getConn(), 'crime_db.accounts', $where);	
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
function insertAccount($data){
	$res = pg_insert(getConn(), 'crime_db.accounts' , $data);
	if ($res) {
		echo "Inserted account";
		$is_inserted = true;
	} else {
		echo pg_last_error(getConn()) . " <br />";
		$is_inserted = false;	
	}
//}
return $is_inserted;
}



//insert into account
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


//get the most recent id of markers
function getLatestMarker(){
	$markers =array();

	$result = pg_query(getConn(), "
	
select a.*,f.classification_desc,f.category_desc,f.status_description,f.action_taken,f.what_happened,f.status_id,f.narrative_id from crime_db.incident_report as a
left OUTER join crime_db.mapdata as f on f.marker_id = a.marker_id order by marker_id;

	where a.marker_id= (select max(incident_records.marker_id) from crime_db.incident_records);
	
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
SELECT * FROM crime_db.emergencyview
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
select * from crime_db.accounts as a inner join crime_db.role as b on a.role_id = b.role_id
order by school_id;
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


function getItems(){
	//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
	$result = pg_query(getConn(), "
	select * from crime_db.item_involved");
	// $a = trim('1'); 
	// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
	// $result = pg_query(getConn(), $query); 
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

	
function getPersons(){
	//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
	$result = pg_query(getConn(), "
	select * from crime_db.persons_involved as a inner join crime_db.involvement b on a.involvement = b.involvement_id");
	// $a = trim('1'); 
	// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
	// $result = pg_query(getConn(), $query); 
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

	function getTotalCrime(){
		//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
		$result = pg_query(getConn(), "
		select count(marker_id) as total_crime from crime_db.incident_records ");
		// $a = trim('1'); 
		// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
		// $result = pg_query(getConn(), $query); 
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
	
		function getTotalUsers(){
			//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
			$result = pg_query(getConn(), "
			select count(school_id) as total_users from crime_db.accounts where role_id=1
			");
			// $a = trim('1'); 
			// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
			// $result = pg_query(getConn(), $query); 
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
	
	
			function getTotalInvestitation(){
				//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
				$result = pg_query(getConn(), "
				
	select count(narrative_id) as under_investigation from crime_db.incident_narratives where incident_status =3
	
				");
				// $a = trim('1'); 
				// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
				// $result = pg_query(getConn(), $query); 
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
	
		
				function getTotalResolved(){
					//$result = pg_query_params(getConn(), 'select * from crime_db.item_involved where marker_id = $1', array($where));
					$result = pg_query(getConn(), "
			
	select count(narrative_id) as resolved_cases from crime_db.incident_narratives where incident_status =1 
	or incident_status=7
	or incident_status=6
	or incident_status=68
					");
					// $a = trim('1'); 
					// $query = "select * from crime_db.item_involved where marker_id = '" . "2" . "';"; 
					// $result = pg_query(getConn(), $query); 
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
	









require ('login_handler.php');
if (isset($_GET[md5("controller")])){
	if( $_GET[md5("controller")] === md5('login' )) {
		if(empty($_SESSION)){
			session_start();		
			include('login.php');
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$user =  $_POST['username'];
				$password =  ($_POST['password']);
				loginAdmin($user,$password);
				
			}
		}
		
		else{
			header("Location: index.php?".md5('controller')."=".md5('login')); 
		}
	}//end if session id is empty



	
	else{
		if($_GET[md5("controller")]===md5('map')){
			getMarkers();
			$_SESSION['page']=md5('map');
			include_once('app/views/map.php');
		}







		elseif($_GET[md5("controller")]===md5('dashboard_support')){
			session_start();
			include('app/views/support/dashboard_support.php');
		}

		elseif($_GET[md5("controller")]===md5('edit_marker_support')){
			session_start();
			include('app/views/support/edit_marker_support.php');
		}

		
		elseif($_GET[md5("controller")]===md5('map_support')){
			session_start();
			include('app/views/support/map_support.php');
		}
		elseif($_GET[md5("controller")]===md5('emergency_support')){
			session_start();
			include('app/views/support/emergency_support.php');
			if(isset($_POST['delete_emergency'])){
				$where = array("e_report_id" => $_POST['delete_id']);
				deleteEmergency($where);
				echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';
			}
		}
		elseif($_GET[md5("controller")]===md5('add_marker_support')){
			session_start();
			include('app/views/support/add_marker_support.php');
			$_SESSION['page']=md5('add_marker');	
			if (isset($_POST['add-form'])){
				(int)$marker_id = (int)getMarkerId()[0][0]+1;
				//(int)$marker_id = $_POST['marker_id'];
				$time = strtotime($_POST['date']);

				$newDate = date('Y-m-d',$time);
			  //  $id = $_POST['id'];
				$lat = $_POST['lat'];
				$lng = $_POST['lng'];
				$location = $_POST['location'];
				
				$date = $newDate;
				$reported_by = $_POST['reported_by'];
		
				$class = $_POST['class'];
				$category = $_POST['category'];

				$what_happened = $_POST['narrative'];
				$action_taken = $_POST['action_taken'];
				$incident_status = $_POST['incident_status'];
			  $marker = array(
							'marker_id'=>$marker_id,
							'lat' => $lat,
							'lng' => $lng,
							'date' => $date,
							'location_description'=>$location,
							'category'=>$category,
							'class'=>$class,
							'reported_by'=>$reported_by
				);

				$narrative = array(
					'narrative_id'=>$marker_id,
					'marker_id'=>$marker_id,

					'what_happened'=>$what_happened,
					'action_taken'=>$action_taken,
					'incident_status'=>$incident_status
				);
				
				insertMarker($marker);

				insertNarrative($narrative);
				$where = array("e_report_id" => (int)$marker_id);
				//deleteEmergency($where);
			
					var_dump($_POST); // this will show all posts received 
			
				echo '<script>console.log("add na oy");</script>';
			}
			if(isset($_POST['add-item-form'])){
				$marker_id = (int)getMarkerId()[0][0];

				$item_name = $_POST['item'];
				$item_desc = $_POST['item_desc'];
				$item_worth = $_POST['item_worth'];
				$item_quantity = $_POST['item_quantity'];
				
				$item = array(
					'marker_id'=> $marker_id,
					'item_name'=>$item_name,
					'item_description'=>$item_desc,
					'quantity'=>$item_quantity,
					'est_worth'=>$item_worth
				);
				insertItem($item);
				echo '<script>console.log("add na oy");</script>';
			}
			
			if(isset($_POST['add-person-form'])){
				$marker_id = (int)getMarkerId()[0][0];
				$fullname = $_POST['fullname'];
				$affiliation = $_POST['affiliation'];
				(int)$involvement = $_POST['involvement'];

				$person = array(
					'marker_id'=>$marker_id,
					'fullname'=>$fullname,
					'affiliation'=>$affiliation,
					'involvement'=>$involvement
				);

				insertPerson($person);
				echo '<script>console.log("add na oy");</script>';
			}

			if(isset($_POST['cancel-all'])){
				$marker_id = (int)getMarkerId()[0][0];
			}
		}


		elseif($_GET[md5("controller")]===md5('emergency')){
			session_start();
			include('app/views/emergency.php');
			if(isset($_POST['delete_emergency'])){
				$where = array("e_report_id" => $_POST['delete_id']);
				deleteEmergency($where);
				echo'asd';
			}

		}
		elseif($_GET[md5("controller")]===md5('table')){
			
			include('app/views/markers.php');
			
			$_SESSION['page']=md5('table');
			$cont = md5('controller');
			$table = md5('table');
			getMarkers();
		
			
		}// end elseif for table

		




		///////////////////////////////////////////////
		///////////////////////////////////////////////
		///////////////////////////////////////////////
	
		elseif($_GET[md5("controller")]===md5('edit_marker')){
			session_start();
			$_SESSION['page']=md5('edit_marker');
			include('app/views/edit_marker.php');

			if(isset($_POST['add_item'])){
				$marker_id = $_POST['item_id'];

				$item_name = $_POST['item_name'];
				$item_desc = $_POST['item_desc'];
				$item_worth = $_POST['item_worth'];
				$item_quantity = $_POST['item_quantity'];
				
				$item = array(
					'marker_id'=> $marker_id,
					'item_name'=>$item_name,
					'item_description'=>$item_desc,
					'quantity'=>$item_quantity,
					'est_worth'=>$item_worth
				);
				insertItem($item);
				echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';
			}
			


			if(isset($_POST['add-person-form'])){
				$marker_id = $_POST['person_id'];
				$fullname = $_POST['fullname'];
				$affiliation = $_POST['affiliation'];
				(int)$involvement = $_POST['involvement'];

				$person = array(
					'marker_id'=>$marker_id,
					'fullname'=>$fullname,
					'affiliation'=>$affiliation,
					'involvement'=>$involvement
				);

				insertPerson($person);
				echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';
			}

			if(isset($_POST['delete_item'])){

				$where = array("item_id" => $_POST['delete_id']);
				//echo 
				deleteItem($where);
				echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';

			}

			if(isset($_POST['delete_person'])){

				$where = array("persons_involved_id" => $_POST['delete_id']);
				//echo 
				deletePerson($where);
				echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';

			}

			if(isset($_POST['edit_item'])){

						$item_name = $_POST['item_name'];
						$item_desc = $_POST['item_desc'];
						$quantity = $_POST['quantity'];
						$est_worth=$_POST['est_worth'];

						$marker = array(
							'item_name' => $item_name,
							'item_description' => $item_desc,
							'quantity' => $quantity,
							'est_worth'=>$est_worth
				);

					$where = array("item_id" => $_POST['edit_item_id']);
					updateItem($marker,$where);
					echo'<script> Swal.fire(
            "Saved!",
            "Changes have been saved",
            "success"
          ).then((result) => {
							window.location.reload();
						});
						</script>';
			}

			if(isset($_POST['edit_person'])){

				$fullname = $_POST['fullname'];
				$affiliation = $_POST['affiliation'];
				//(int)$involvement = $_POST['involvement'];

				$person = array(
					'fullname'=>$fullname,
					'affiliation'=>$affiliation,
				//	'involvement'=>$involvement
				);
		
				print_r($_POST);	
			$where = array("persons_involved_id" => $_POST['edit_person_id']);
			updatePerson($person,$where);
			echo'<script> Swal.fire(
				"Saved!",
				"Changes have been saved",
				"success"
			).then((result) => {
					window.location.reload();
				});
				</script>';

			}

			if(isset($_POST['edit_form'])){
				

				$newformat = date('Y-m-d',(int)$_POST['date']);

				$location = $_POST['location'];
				$date= $newformat;
				$category = $_POST['category'];
				$class=$_POST['class'];
				$reported_by=$_POST['reported_by'];

				$indicent_narrative = $_POST['narrative'];
				$action_taken = $_POST['action_taken'];

				$reported_by = $_POST['reported_by'];
				$incident_status =$_POST['incident_status'];
			

			  	$marker = array(
							'date' => $date,
							'location_description'=>$location,
						//	'classification_id'=>$classification,
							'category'=>$category,
							'class'=>$class,
							'reported_by'=>$reported_by
	 
				);

				$narrative = array(
						'what_happened'=>$indicent_narrative,
						'action_taken'=>$action_taken,
						'incident_status'=>(int)$incident_status
				);

				$where = array("marker_id" => $_POST['edit_id']);
				$narrative_id = array("narrative_id" => $_POST['edit_id']);
				 updateMarker($marker,$where);

				 updateNarrative($narrative,$narrative_id);
				
				 echo'<script> Swal.fire(
					"Saved!",
					"Changes have been saved",
					"success"
				).then((result) => {
						window.location.reload();
					});
					</script>';
				 exit();
			
		}//end elseif for edit marker
	}


		elseif($_GET[md5("controller")]===md5('editAccount')){
			include('app/views/account.php');
			$_SESSION['page']=md5('editAccount');
		}//end elseif for edit account



		elseif($_GET[md5("controller")]===md5('edit_marker')){
			session_start();
			$_SESSION['page']=md5('edit_marker');
			
			include('app/views/edit_marker.php');
		
		}//end elseif for edit account


		elseif($_GET[md5("controller")]===md5('dashboard')){
			include('app/views/dashboard.php');
			$_SESSION['page']=md5('dashboard');	
			
		}

		elseif($_GET[md5("controller")]===md5('accountsall')){
			include('app/views/accountsall.php');
			$_SESSION['page']=md5('accountsall');

				if(isset($_POST['delete_account'])){
						$where = array("school_id" => $_POST['delete_id']);
						deleteAccount($where);
						echo'deleeeeeete';
						echo'<script> Swal.fire(
							"Saved!",
							"Changes have been saved",
							"success"
						).then((result) => {
								window.location.reload();
							});
							</script>';
					}
				else if(isset($_POST['update_profile'])){

						$username = $_POST['username'];
						$fullname = $_POST['fullname'];
						$contact = $_POST['contact'];
						$email = $_POST['email'];
						$password =$_POST['password'];

						$marker = array(
							'username' => $username,
							'fullname' => $fullname,
							'contact_no' => $contact,
							'university_email'=>$email,
							'password'=>$password
				);

				$where = array("school_id" => $_POST['update_id']);
					updateAccount($marker,$where);
					echo'<script> Swal.fire(
            "Saved!",
            "Changes have been saved",
            "success"
          ).then((result) => {
							window.location.reload();
						});
						</script>';
					
				}
				else if(isset($_POST['add_account'])){
					$username = $_POST['username'];
					$fullname = $_POST['fullname'];
					$contact = $_POST['contact'];
					$email = $_POST['email'];
					$school_id =$_POST['school_id'];
					$role=$_POST['role'];
					$picture =base64_encode($_POST['profile_pic']);
					$password =$_POST['password'];
					$gender =$_POST['gender'];
					$marker = array(
						'school_id'=>$school_id,
						'role_id'=>$role,
						'username' => $username,
						'fullname' => $fullname,
						'contact_no' => $contact,
						'university_email'=>$email,
						'profile_pic'=>$picture,
						'password'=>$password,
						'gender'=>$gender
					);

					insertAccount($marker);
					echo'<script> Swal.fire(
						"Saved!",
						"Changes have been saved",
						"success"
					).then((result) => {
							window.location.reload();
						});
						</script>';

				}

			
		}




		elseif($_GET[md5("controller")]===md5('add_marker')){
			include('app/views/add_marker.php');
			$_SESSION['page']=md5('add_marker');	

			if (isset($_POST['add-form'])){
				(int)$marker_id = (int)getMarkerId()[0][0]+1;
				//(int)$marker_id = $_POST['marker_id'];
				$time = strtotime($_POST['date']);

				$newDate = date('Y-m-d',$time);
			  //  $id = $_POST['id'];
				$lat = $_POST['lat'];
				$lng = $_POST['lng'];
				$location = $_POST['location'];
				
				$date = $newDate;
				$reported_by = $_POST['reported_by'];
			//	(int)$classification = $_POST['classification'];
				$class = $_POST['class'];
				$category = $_POST['category'];

				$what_happened = $_POST['narrative'];
				$action_taken = $_POST['action_taken'];
				$incident_status = $_POST['incident_status'];
			  $marker = array(
							'lat' => $lat,
							'lng' => $lng,
							'date' => $date,
							'location_description'=>$location,
							//'classification'=>$classification,
							'category'=>$category,
							'class'=>$class,
							'reported_by'=>$reported_by
				);

				$narrative = array(
					'marker_id'=>$marker_id,
					'what_happened'=>$what_happened,
					'action_taken'=>$action_taken,
					'incident_status'=>$incident_status
				);

				insertMarker($marker);

				insertNarrative($narrative);
				$where = array("e_report_id" => (int)$marker_id);
				//deleteEmergency($where);
			
					var_dump($_POST); // this will show all posts received 
			
				echo '<script>console.log("add na oy");</script>';
			}
			if(isset($_POST['add-item-form'])){
				$marker_id = (int)getMarkerId()[0][0];

				$item_name = $_POST['item'];
				$item_desc = $_POST['item_desc'];
				$item_worth = $_POST['item_worth'];
				$item_quantity = $_POST['item_quantity'];
				
				$item = array(
					'marker_id'=> $marker_id,
					'item_name'=>$item_name,
					'item_description'=>$item_desc,
					'quantity'=>$item_quantity,
					'est_worth'=>$item_worth
				);
				insertItem($item);
				echo '<script>console.log("add na oy");</script>';
			}
			
			if(isset($_POST['add-person-form'])){
				$marker_id = (int)getMarkerId()[0][0];
				$fullname = $_POST['fullname'];
				$affiliation = $_POST['affiliation'];
				(int)$involvement = $_POST['involvement'];

				$person = array(
					'marker_id'=>$marker_id,
					'fullname'=>$fullname,
					'affiliation'=>$affiliation,
					'involvement'=>$involvement
				);

				insertPerson($person);
				echo '<script>console.log("add na oy");</script>';
			}

			if(isset($_POST['cancel-all'])){
				$marker_id = (int)getMarkerId()[0][0];
			}
			
		}

		
	}//end else for session id
	

}//end if
else{
	header("Location: index.php?".md5("controller")."=".$_SESSION['page']);
	echo($_SESSION["page"]);
}



?>
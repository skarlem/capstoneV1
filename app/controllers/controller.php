<?php

require 'app/config/config.php';
require 'app/models/marker_model.php';
require 'app/models/admin_model.php';


require_once('login_handler.php');

if (isset($_GET[md5("controller")])){	
	if( $_GET[md5("controller")] === md5('login' )) {
		if(empty($_SESSION)){
			session_start();		
			include('login.php');
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$user =  $_POST['username'];
				$password =  md5($_POST['password']);
				loginAdmin($user,$password);
			}
		}
		
		else{
			//header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
		}
	}//end if session id is empty



	
	elseif ($_GET[md5("controller")]===md5('register')) {
		if(empty($_SESSION)){
			include('app/views/register.php');
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if(isset($_POST['register_submit'])){	
				if(trim($_POST['password']) != trim($_POST['password2'])){
					
					echo'<script> swal({ title:"Warning!", text: "Password do not match!", type: "success", 
						buttonsStyling: false, confirmButtonClass: "btn btn-success"});</script>';
				}//end if password is not equal
				else{	
					unset($_POST['password2']);
					$data= array(
						'username'=>$_POST['username'],
						'password'=>md5($_POST['password'])
					);
					addUser($data);
					header("Location: index.php?controller=".md5('login')); 
					echo "<script>demo.showNotification('top','right','Sucessfully registered');</script>";
					}//end else

				}//end if register submit

			}//end if method is post

		}//end if session is empty
		else{
			header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
		}
	}//end else if 

	else{
		if($_GET[md5("controller")]===md5('map')){
			getMarkers();
			$_SESSION['page']=md5('map');
			include_once('app/views/map.php');	
			if (isset($_POST['add_marker'])){
				 
			  //  $id = $_POST['id'];
				$lat = $_POST['lat'];
				$lng = $_POST['lng'];
				$location = $_POST['location'];
				
				$date = $_POST['date'];
				$victim= $_POST['victim'];
				$suspect = $_POST['suspect'];
				$indicent_narrative = $_POST['incident_nar'];
				$action_taken = $_POST['action_taken'];
				(int)$classification = $_POST['classification'];
				$reported_by = $_POST['reported_by'];
				$persons_involved = $_POST['persons_involved'];
			  	$marker = array(
							'lat' => $lat,
							'lng' => $lng,
							'date' => $date,
							'location_description'=>$location,
							'classification_id'=>$classification,
							'persons_involved'=>$persons_involved,
							'victim'=>$victim,
							'suspect'=>$suspect,
							'incident_narrative'=>$indicent_narrative,
							'action_taken'=>$action_taken,
							'reported_by'=>$reported_by
	 
				);

				insertMarker($marker);
				echo '<script>demo.showNotification("top","right","Insert Successful")</script>';
			}
		}
		elseif($_GET[md5("controller")]===md5('table')){
			include('app/views/markers.php');
			$_SESSION['page']=md5('table');
			
			if(isset($_POST['edit_submit'])){
				
				$lat = $_POST['lat'];
				   $lng = $_POST['lng'];
	
				$type= $_POST['type'];
				$date = $_POST['date'];
				$location = $_POST['location'];
	
				  $data = array(
					'lat' => $lat,
					'lng' => $lng,
					'type' => $type,
					'date'=>$date,
					'location'=>$location             
				   );
	
				$where = array("id" => $_POST['edit_id']);
				 updateMarker($data,$where);
				 
				echo'<script> swal({ title:"Good job!", text: "Delete Successful!", type: "success", 
					buttonsStyling: false, confirmButtonClass: "btn btn-success"});</script>';
				 exit();
				
			 }
			 else if(isset($_POST['delete_submit'])){
				
				 $where = array("id" => $_POST['delete_id']);
				 deleteMarker($where);
				
				echo'<script> swal({ title:"Good job!", text: "Delete Successful!", type: "success", 
					buttonsStyling: false, confirmButtonClass: "btn btn-success"});</script>';
				// header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
				exit;
				 
			 }
			
				
			
		}// end elseif for table
	
		elseif($_GET[md5("controller")]===md5('editAccount')){
			include('app/views/account.php');
			$_SESSION['page']=md5('editAccount');
		}//end elseif for edit account


		elseif($_GET[md5("controller")]===md5('dashboard')){
			include('app/views/dashboard.php');
		}
		elseif($_GET[md5("controller")]===md5('manage_report')){
			include('app/views/report.php');
		}
	}//end else for session id
	

}//end if
else{
	header("Location: index.php?".md5("controller")."=".md5('login')); 
}



?>
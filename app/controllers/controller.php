<?php

require 'app/config/config.php';
require 'app/models/marker_model.php';
require 'app/models/admin_model.php';


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
					echo("<script>location.href = 'index.php?$cont=$dsh';</script>");
				//	
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
			if (isset($_POST['add-form'])){
				 
				$marker_id = (int)getMarkerId()[0][0]+1;
				$time = strtotime($_POST['date']);

				$newDate = date('Y-m-d',$time);
			  //  $id = $_POST['id'];
				$lat = $_POST['lat'];
				$lng = $_POST['lng'];
				$location = $_POST['location'];
				
				$date = $newDate;
				$reported_by = $_POST['reported_by'];
				(int)$classification = $_POST['classification'];
				$class = $_POST['class'];
				$category = $_POST['category'];
			  	$marker = array(
							'lat' => $lat,
							'lng' => $lng,
							'date' => $date,
							'location_description'=>$location,
							'classification'=>$classification,
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

			
				echo '<script>window.reload();</script>';
			}
			if(isset($_POST['add-item-form'])){
				$marker_id = (int)getMarkerId()[0][0]+1;

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
				echo '<script>window.reload();</script>';
			}
			if(isset($_POST['add-person-form'])){
				$marker_id = (int)getMarkerId()[0][0]+1;

				$fullname = $_POST['person_involved_name'];
				$affiliation = $_POST['affiliation'];
				(int)$involvement = $_POST['involvement'];

				$person = array(
					'marker_id'=>$marker_id,
					'fullname'=>$fullname,
					'affiliation'=>$affiliation,
					'involvement'=>$involvement
				);

				$what_happened = $_POST['narrative'];
				$action_taken = $_POST['action_taken'];
				(int)$incident_status= $_POST['incident_status'];
				insertPerson($person);
				echo '<script>window.reload();</script>';
			}

		}
		elseif($_GET[md5("controller")]===md5('emergency')){
			include('app/views/emergency.php');

		}
		elseif($_GET[md5("controller")]===md5('table')){
			
			include('app/views/markers.php');
			
			$_SESSION['page']=md5('table');
			$cont = md5('controller');
			$table = md5('table');
			getMarkers();
			//echo($_SESSION['page']);	
			if(isset($_POST['edit_submit'])){
				

				$lat = $_POST['lat'];
				$lng = $_POST['lng'];
				$location = $_POST['location'];
				
				$date = $_POST['date'];
				$victim= $_POST['victim'];
				$suspect = $_POST['suspect'];
				$indicent_narrative = $_POST['incident_narrative'];
				$action_taken = $_POST['action_taken'];
			//	(int)$classification = $_POST['classification'];
				$reported_by = $_POST['reported_by'];
				$persons_involved = $_POST['persons_involved'];
			  	$marker = array(
							'lat' => $lat,
							'lng' => $lng,
							'date' => $date,
							'location_description'=>$location,
						//	'classification_id'=>$classification,
							'persons_involved'=>$persons_involved,
							'victim'=>$victim,
							'suspect'=>$suspect,
							'incident_narrative'=>$indicent_narrative,
							'action_taken'=>$action_taken,
							'reported_by'=>$reported_by
	 
				);

				$where = array("marker_id" => $_POST['edit_id']);
				 updateMarker($marker,$where);
				
				 echo'<script> swal({ title:"Incident Record Updated!", text: "Successful!", type: "info", 
					buttonsStyling: false, confirmButtonClass: "btn btn-success"});</script>';
					echo("<script>location.href = 'index.php?$cont=$table';
					console.log('na reload na ni');
					</script>");
				 exit();
				
			 }


			 else if(isset($_POST['delete_submit'])){
				
				 $where = array("marker_id" => $_POST['delete_id']);
				 //echo 
				 deleteMarker($where);
				
				echo'<script> swal({ title:"Incident Record Deleted!", text: "Successful!", type: "info", 
					buttonsStyling: false, confirmButtonClass: "btn btn-success"});</script>';
					echo("<script>location.href = 'index.php?$cont=$table';
					console.log('na reload na ni');
					</script>");
				exit;
				 
			 }
			
				
			
		}// end elseif for table
	
		elseif($_GET[md5("controller")]===md5('editAccount')){
			include('app/views/account.php');
			$_SESSION['page']=md5('editAccount');
		}//end elseif for edit account


		elseif($_GET[md5("controller")]===md5('dashboard')){
			include('app/views/dashboard.php');
			$_SESSION['page']=md5('dashboard');
			
		}

		elseif($_GET[md5("controller")]===md5('accountsall')){
			include('app/views/accountsall.php');
			$_SESSION['page']=md5('accountsall');
			
		}

		
	}//end else for session id
	

}//end if
else{
	header("Location: index.php?".md5("controller")."=".$_SESSION['page']);
	echo($_SESSION["page"]);
}



?>
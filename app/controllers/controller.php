<?php
require 'app/config/config.php';
require 'app/models/marker_model.php';
require 'app/models/admin_model.php';

require_once('login_handler.php');


if (isset($_GET[md5("controller")])){
	if( $_GET[md5("controller")] === md5('login' )) {
		if(empty($_SESSION)){		
			include('login.php');
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$user =  $_POST['username'];
				$password =  $_POST['password'];
				loginAdmin($user,md5($password));
			}
		}
		
		else{
			header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
		}
	}//end if session id is empty

	elseif ($_GET[md5("controller")]===md5('register')) {
		if(empty($_SESSION)){
			include('app/views/register.php');
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if(isset($_POST['register_submit'])){	
				if(trim($_POST['password']) != trim($_POST['password2'])){
					
					echo'<div class="alert alert-success">
					Passwords do not match
					</div>';
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
	
				$type= $_POST['type'];
				$date = $_POST['date'];
				$location = $_POST['location'];
			//  $type_id = $_POST['type_id'];
	
			  $marker = array(
							'lat' => $lat,
							'lng' => $lng,
							'type' => $type,
							'date'=>$date,
							'location'=>$location
	 
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
				 header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
				
			 }
			 else if(isset($_POST['delete_submit'])){
				 $where = array("id" => $_POST['delete_id']);
				 deleteMarker($where);
				// echo '<script>window.location.href="index.php?controller='.md5('table').'</script>';
				 header("Location: index.php?".md5("controller")."=".$_SESSION["page"]); 
			 }
		}// end elseif for table
	
		elseif($_GET[md5("controller")]===md5('editAccount')){
			include('app/views/account.php');
			$_SESSION['page']=md5('editAccount');
		}//end elseif for edit account
	}//end else for session id
	

}//end if
else{
	header("Location: index.php?".md5("controller")."=".md5('login')); 
}



?>
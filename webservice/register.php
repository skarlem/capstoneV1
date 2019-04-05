<?php
if(checkParameters(array('id_num', 'fullname', 'password', 'email', 'contact_no'))){

	$id_num 	= $_POST['id_num'];
	#$fullname	= $_POST['firstname']." ".$_POST['lastname'];
	$fullname	= $_POST['fullname'];
	$password	= md5($_POST['password']);
	$email 		= $_POST['email'];
	$contact_no	= $_POST['contact_no'];


	if(isset($_POST['profile_pic'])){
		$profile_pic = $_POST['profile_pic'];
		include 'decode_picture.php';
	}
	else{
		$profile_pic = null;
	}

				//check if user exists
	$result = pg_query($conn, "SELECT * FROM crime_db.accounts WHERE school_id = '".$id_num."' AND password = '".$password."'");

	if(pg_num_rows($result) > 0){
		$response['error'] 		= true;
		$response['message'] 	= 'User id already registered.';
	}
	else{
		$values 	= array(
					'school_id'			=> $id_num,
					'role_id'			=> 1,
					'fullname' 			=> $fullname,
					'password'			=> $password,
					'university_email'	=> $email,
					'contact_no'		=> $contact_no,
					'profile_pic'		=> $target_dir
					);

		$result = pg_insert($conn, 'crime_db.accounts', $values);

		if (pg_affected_rows($result) > 0) {
			$res = pg_query($conn, "SELECT * FROM crime_db.accounts WHERE school_id = '".$id_num."' AND password = '".$password."'");

			$arr = pg_fetch_array($res);

			$user = array(
					'id_num' 	=> $arr["school_id"],
					'fullname' => $arr["fullname"],
					#'lastname'	=> $_POST['lastname'],
					'password'	=> $arr["password"],
					'email'		=> $arr["university_email"],
					'contact_no'=> $arr["contact_no"] );

					$response['error'] 	= false;
					$response['message']= 'Registered successfully';
					$response['user']	= $user;
				}
			}
}
else{
	$response['error']	= true;
	$response['message']= 'required paramaters are not available';
}


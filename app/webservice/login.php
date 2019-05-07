<?php
if(checkParameters(array('email', 'password'))){
	#$id_num		= $_POST['id_num'];
	$email 		= $_POST['email'];
	$password	= md5($_POST['password']);

	$query = "SELECT * FROM crime_db.accounts WHERE university_email = '$email' AND password = '$password'";
	$result = pg_query($conn, $query);

	if(pg_num_rows($result) > 0){
		$arr = pg_fetch_array($result);

		$user = array(
					'id_num' 	=> $arr["school_id"],
					'fullname'	=> $arr["fullname"],
					#'firstname' => $_POST['firstname'],
					#'lastname'	=> $_POST['lastname'],
					'password'	=> $arr["password"],
					'email'		=> $arr["university_email"],
					'contact_no'=> $arr["contact_no"],
					'gender'=> $arr["gender"] );

		$response['error'] 	= false;
		$response['message']= 'Logged in successfully';
		$response['user']	= $user;
	}
	else{
		$response['error']		= true;
		$response['message'] 	= 'Invalid username or password';
	}
	
}
else{
	$response['error']	= true;
	$response['message']= 'required paramaters are not available';
}  
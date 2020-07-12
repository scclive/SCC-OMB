<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
	
	$response = array();
	$dbPassword;
	
	if( mysqli_num_rows($query) > 0 ){
		while ($row = mysqli_fetch_array($query)) {
			$dbPassword =  $row['password']; 
			$response['id'] = $row['id'];
		}
	}
	
	if(password_verify ($password , $dbPassword ) ){
		$response['success'] = 'true';
		$response['message'] = 'Logged In';
	}else{
		$response['success'] = 'false';
		$response['message'] = 'User not found';
	}

	
	
	
	echo json_encode($response);
?>
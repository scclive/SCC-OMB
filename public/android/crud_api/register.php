<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' ");

	$response = array();
	
	if ( mysqli_num_rows($query) > 0 ) {
		$response['exists'] = 'true';
		$response['message'] = 'User Already Exist with this Email';
		echo json_encode($response);
	}else{
		$password = password_hash($password, PASSWORD_DEFAULT);
		$query = mysqli_query($con, "INSERT INTO users (email, password) VALUES('$email', '$password')");
		if($query){
		  $response['success'] = 'true';
		  $response['message'] = 'User Registered';
		}else{
		  $response['success'] = 'false';
		  $response['password'] = $password;
		  $response['message'] = 'Something went wrong!';
		}
	}
	echo json_encode($response);
?>
<?php

	session_start();
	include 'connection.php';

	$response = array();
	$response['firstname'] = $firstname = $con -> real_escape_string($_POST['firstname']);
	$response['surname'] = $surname = $con -> real_escape_string($_POST['surname']);
	$response['email'] = $email = $con -> real_escape_string($_POST['email']);
	$response['gender'] = $gender = $con -> real_escape_string($_POST['gender']);
	$response['phone'] = $phone = $con -> real_escape_string($_POST['phone']);
	$response['dob'] = $dob = $con -> real_escape_string($_POST['dob']);
	$response['cnic'] = $cnic = $con -> real_escape_string($_POST['cnic']);
	$response['aboutme'] = $aboutme = $con -> real_escape_string($_POST['aboutme']);
	$response['employed'] = $employed = $con -> real_escape_string($_POST['employed']);
	$response['province'] = $province = $con -> real_escape_string($_POST['province']);
	$response['city'] = $city = $con -> real_escape_string($_POST['city']);
	$response['address'] = $address = $con -> real_escape_string($_POST['address']);
	$response['created_at'] = $created_at = $con -> real_escape_string($_POST['created_at']);
	
	

	$query = mysqli_query($con, "UPDATE users SET firstname = '$firstname', 
													surname = '$surname',
													gender = '$gender',
													phone = '$phone',
													dob = '$dob',
													cnic = '$cnic',
													aboutme = '$aboutme',
													employed = '$employed',
													province = '$province',
													city = '$city',
													address = '$address'
													WHERE email = '$email'");

	
	
	if ($query ) {
		$response['success'] = 'true';
		$response['message'] = 'Profile Updated';
		echo json_encode($response);
	}else{
		  $response['success'] = 'false';
		  $response['message'] = 'Something went wrong!';
	}
	echo json_encode($response);
?>
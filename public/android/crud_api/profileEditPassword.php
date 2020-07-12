<?php

	session_start();
	include 'connection.php';
	$email = $_POST['email'];
	$old = "";
	$cur = $_POST['cur'];
	$newpass = $_POST['newpass'];
	
	$query = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $old = $row['password'];
	}
	
	if($query){
		if(password_verify ($cur , $old )){
			$newpass = password_hash($newpass, PASSWORD_DEFAULT);
			$query = mysqli_query($con, "UPDATE users SET password = '$newpass' WHERE email = '$email'");
			if($query){
				$response['success'] = 'true';
				$response['message'] = "Password Changed Successful";
			}
			else{
				$response['success'] = 'false';
				$response['message'] = "Something went wrong!";
			}
		}else{
			$response['success'] = 'false';
			$response['message'] = "Current Password Doesn't Match";
		}
	}else{
		$response['success'] = 'false';
		$response['message'] = "Something went wrong!";
	}
	
	
	
	
	echo json_encode($response);
?>
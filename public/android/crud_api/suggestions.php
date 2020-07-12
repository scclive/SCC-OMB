<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$type = $_POST['type'];
	$text = $_POST['text'];
	$uid = "";
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	
	$query = mysqli_query($con, "INSERT INTO suggestions (uid, sugcom, sugcomtext) VALUES('$uid', '$type', '$text')");
	if($query){
		$response['success'] = 'true';
		$response['message'] = "Submitted Successful";
	}
	else{
		$response['success'] = 'false';
		$response['message'] = "Something went wrong!";
	}
	
	
	
	echo json_encode($response);
?>
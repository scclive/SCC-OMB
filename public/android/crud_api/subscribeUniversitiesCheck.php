<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$Uni_id = $_POST['Uni_id'];
	$uid = "";
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	$query = mysqli_query($con, "SELECT * FROM subscribe WHERE uid='$uid' and Uni_id='$Uni_id'");
	if ( mysqli_num_rows($query) != 0 ) {
		$response['exists'] = true;
	}else{
		$response['exists'] = false;
	}
	echo json_encode($response);
?>
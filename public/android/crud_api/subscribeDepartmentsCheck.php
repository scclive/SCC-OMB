<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$Dep_id = $_POST['Dep_id'];
	$uid = "";
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	$query = mysqli_query($con, "SELECT * FROM subscribedepartments WHERE uid='$uid' and Dep_id='$Dep_id'");
	if ( mysqli_num_rows($query) != 0 ) {
		$response['exists'] = true;
	}else{
		$response['exists'] = false;
	}
	echo json_encode($response);
?>
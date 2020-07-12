<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$Uni_id = $_POST['Uni_id'];
	$exists = $_POST['exists'];
	$updated_at = $_POST['updated_at'];
	$uid = "";
	$response = array();
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	if($exists=="true"){
		$query = mysqli_query($con, "DELETE FROM subscribe WHERE Uni_id='$Uni_id'");
		if($query){
		  $response['success'] = true;
		  $response['message'] = 'UnSubscribed Successfully';
		}else{
		  $response['success'] = false;
		  $response['message'] = 'UnSubscription Failed';
		}
	}else{
		$query = mysqli_query($con, "INSERT INTO subscribe (uid, Uni_id, updated_at) VALUES('$uid', '$Uni_id', '$updated_at')");
		if($query){
		  $response['success'] = true;
		  $response['message'] = 'Subscribed Successfully';
		}else{
		  $response['success'] = false;
		  $response['message'] = 'Subscription Failed';
		}
	}
	
	
	$response['uid'] = $uid;
	$response['Uni_id'] = $Uni_id;
	echo json_encode($response);
?>
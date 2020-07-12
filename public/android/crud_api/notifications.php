<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$uid = "";
	$response = array();
	$data = array();
	$i = 0;
	$qry_array = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	$query = mysqli_query($con, "SELECT * FROM notifications WHERE uid='$uid'");
	while ($row = mysqli_fetch_array($query)) {
	  $data['Uni_Name'] = $row['Uni_Name'];
	  $data['messagetext'] = $row['messagetext'];
	  $data['date'] = $row['date'];
	  $qry_array[$i] = $data;
	  $i++;
	}
	
	if($query){
	  $response['success'] = 'true';
	  $response['message'] = 'Data Loaded Successfully';
	  $response['data'] = $qry_array;
	}else{
	  $response['success'] = 'false';
	  $response['message'] = 'Data Loading Failed';
	}

	echo json_encode($response);
?>
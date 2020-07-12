<?php
	include 'connection.php';

	$email = $_POST['email'];
	
	$query = mysqli_query($con, "SELECT * FROM users where email = '$email'");

	$data = array();
	$qry_array = array();
	$i = 0;
	$total = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)) {
	  $data['firstname'] = $row['firstname'];
	  $data['surname'] = $row['surname'];
	  $data['email'] = $row['email'];
	  $data['photo'] = $row['photo'];
	  $data['gender'] = $row['gender'];
	  $data['phone'] = $row['phone'];
	  $data['dob'] = $row['dob'];
	  $data['cnic'] = $row['cnic'];
	  $data['aboutme'] = $row['aboutme'];
	  $data['employed'] = $row['employed'];
	  $data['province'] = $row['province'];
	  $data['city'] = $row['city'];
	  $data['address'] = $row['address'];
	  $data['created_at'] = $row['created_at'];
	  $qry_array[$i] = $data;
	  $i++;
	}
	$response = array();
	if($query){
	  $response['success'] = 'true';
	  $response['message'] = 'Data Loaded Successfully';
	  $response['total'] = $total;
	  $response['data'] = $qry_array;
	}else{
	  $response['success'] = 'false';
	  $response['message'] = 'Data Loading Failed';
	}

	echo json_encode($response);
?>

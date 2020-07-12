<?php
	include 'connection.php';
	
	
	$City_id = $_POST['City_id'];
	$query = mysqli_query($con, "SELECT Dep_id FROM departments where City_id='$City_id'");
	$departmentsTotal = mysqli_num_rows($query);
	
	$response = array();
	if($query){
	  $response['success'] = 'true';
	  $response['departmentsTotal'] = $departmentsTotal;
	  
	}else{
	  $response['success'] = 'false';
	}

	echo json_encode($response);
?>

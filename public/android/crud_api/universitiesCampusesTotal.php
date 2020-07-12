<?php
	include 'connection.php';
	
	
	$Uni_id = $_POST['Uni_id'];
	$query = mysqli_query($con, "SELECT City_id FROM cities where Uni_id='$Uni_id'");
	$campusesTotal = mysqli_num_rows($query);
	
	$response = array();
	if($query){
	  $response['success'] = 'true';
	  $response['campusesTotal'] = $campusesTotal;
	  
	}else{
	  $response['success'] = 'false';
	}

	echo json_encode($response);
?>

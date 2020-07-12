<?php
	include 'connection.php';
	
	
	$Uni_id = $_POST['Uni_id'];
	$City_id = "";
	$departmentsTotal = 0;
	
	$query = mysqli_query($con, "SELECT City_id FROM cities where Uni_id='$Uni_id'");
	$campusesTotal = mysqli_num_rows($query);
	
	while ($row = mysqli_fetch_array($query)) {
	  $City_id = $row['City_id'];
	  $query2 = mysqli_query($con, "SELECT Dep_id FROM departments where City_id='$City_id'");
	  $departmentsTotal = $departmentsTotal + mysqli_num_rows($query2);
	}
	
	$response = array();
	if($query){
	  $response['success'] = 'true';
	  $response['campusesTotal'] = $campusesTotal;
	  $response['departmentsTotal'] = $departmentsTotal;
	  
	}else{
	  $response['success'] = 'false';
	}

	echo json_encode($response);
?>

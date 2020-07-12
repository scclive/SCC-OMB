<?php
	include 'connection.php';


	$Uni_id = $_POST['Uni_id'];
	
	$query = mysqli_query($con, "SELECT * FROM cities where Uni_id='$Uni_id'");
	
	$data = array();
	$qry_array = array();
	$i = 0;
	$total = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)) {
	  $data['City_id'] = $row['City_id'];
	  $data['Campus_City'] = $row['Campus_City'];
	  $data['City_Name'] = $row['City_Name'];
	  $data['Campus_Phone'] = $row['Campus_Phone'];
	  $data['Campus_Email'] = $row['Campus_Email'];
	  $data['Campus_Url'] = $row['Campus_Url'];
	  $data['Uni_id'] = $row['Uni_id'];
	  $data['updated_at'] = $row['updated_at'];
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

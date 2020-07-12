<?php
	include 'connection.php';

	$email = $_POST['email'];
	$uid = "";
	$data = array();
	$qry_array = array();
	$i = 0;
	
	
	//gets user id//
	$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	//gets subscribed uni_ids//
	$query = mysqli_query($con, "SELECT Uni_id FROM subscribe where uid='$uid'");
	
	if ( mysqli_num_rows($query) != 0 ) {
		while ($row = mysqli_fetch_array($query)) {
			$Uni_id = $row['Uni_id'];
			$query2 = mysqli_query($con, "SELECT * FROM universities where Uni_id='$Uni_id'");
			while ($row = mysqli_fetch_array($query2)) {
				$data['Uni_id'] = $row['Uni_id'];
				$data['Uni_Name'] = $row['Uni_Name'];
				$data['Uni_Phone'] = $row['Uni_Phone'];
				$data['Uni_Email'] = $row['Uni_Email'];
				$data['Uni_Rank'] = $row['Uni_Rank'];
				$data['Uni_Url'] = $row['Uni_Url'];
			  $data['Uni_Sector'] = $row['Uni_Sector'];
			  $data['Uni_Address'] = $row['Uni_Address'];
				$data['Uni_Main'] = $row['Uni_Main'];
				$data['updated_at'] = $row['updated_at'];
				$qry_array[$i] = $data;
			}
		  $i++;
		}
	}
	
	
	
	$response = array();
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

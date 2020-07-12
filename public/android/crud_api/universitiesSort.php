<?php
	include 'connection.php';

	$search = "%".$_POST['search']."%";
	$sort = $_POST['sort'];
	$query = mysqli_query($con, "SELECT * FROM universities ORDER BY Uni_Name ASC");
	if($sort == "Rank"){
		$query = mysqli_query($con, "SELECT * FROM universities where Uni_Name LIKE '$search' ORDER BY Uni_Rank  ASC");
	}elseif($sort == "Name"){
		$query = mysqli_query($con, "SELECT * FROM universities where Uni_Name LIKE '$search' ORDER BY Uni_Name  ASC");
	}elseif($sort == 'Private'){
		$query = mysqli_query($con, "SELECT * FROM universities where Uni_Name LIKE '$search' ORDER BY Uni_Sector  ASC");
	}elseif($sort == 'Public'){
		$query = mysqli_query($con, "SELECT * FROM universities where Uni_Name LIKE '$search' ORDER BY Uni_Sector  DESC");
	}else{
		$query = mysqli_query($con, "SELECT * FROM universities where Uni_Name LIKE '$search'");
	}
	

	$data = array();
	$qry_array = array();
	$i = 0;
	$total = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)) {
		$data['Uni_id'] = $row['Uni_id'];
		$data['Uni_Name'] = $row['Uni_Name'];
		$data['Uni_Phone'] = $row['Uni_Phone'];
		$data['Uni_Email'] = $row['Uni_Email'];
		$data['Uni_Rank'] = $row['Uni_Rank'];
		$data['Uni_Url'] = $row['Uni_Url'];
		$data['Uni_Sector'] = $row['Uni_Sector'];
		$data['Uni_Address'] = json_encode($row['Uni_Address']);
		$data['Uni_Main'] = $row['Uni_Main'];
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

<?php
	include 'connection.php';
	
	
	$Uni_id = $_POST['Uni_id'];
	$City_id = "";
	$data = array();
	$qry_array = array();
	$i = 0;
	
	$query = mysqli_query($con, "SELECT City_id FROM cities where Uni_id='$Uni_id'");
	while ($row = mysqli_fetch_array($query)) {
	  $City_id = $row['City_id'];
	  $query2 = mysqli_query($con, "SELECT * FROM departments where City_id='$City_id'");
	  while ($row = mysqli_fetch_array($query2)) {
			$data['Dep_id'] = $row['Dep_id'];
			$data['Dep_Name'] = $row['Dep_Name'];
			$data['City_id'] = $row['City_id'];
			$data['Dep_Tags'] = $row['Dep_Tags'];
			$data['Dep_fees'] = $row['Dep_fees'];
			$data['Dep_PrevAggr'] = $row['Dep_PrevAggr'];


			$data['Dep_AggrMatric'] = $row['Dep_AggrMatric'];
			$data['Dep_AggrHssc'] = $row['Dep_AggrHssc'];
			$data['Dep_AggrNts'] = $row['Dep_AggrNts'];
			$data['Dep_AddmDeadline'] = $row['Dep_AddmDeadline'];
			$data['Dep_TestName'] = $row['Dep_TestName'];
			$data['updated_at'] = $row['updated_at'];

			$qry_array[$i] = $data;
			$i++;
		}
	}
	
	$response = array();
	if($query){
	  $response['success'] = 'true';
	  $response['data'] = $qry_array;
	  
	}else{
	  $response['success'] = 'false';
	}

	echo json_encode($response);
?>

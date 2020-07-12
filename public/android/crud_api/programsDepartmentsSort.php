<?php
	include 'connection.php';

	
	$data = array();
	$qry_array = array();
	$i = 0;
	
	$search = "%".$_POST['search']."%";
	$sort = $_POST['sort'];
	$query = mysqli_query($con, "SELECT * FROM departments ORDER BY Dep_Name ASC");
	if($sort == "Name"){
		$query = mysqli_query($con, "SELECT * FROM departments where Dep_Name LIKE '$search' ORDER BY Dep_Name  ASC");
	}elseif($sort == "Fee"){
		$query = mysqli_query($con, "SELECT * FROM departments where Dep_Name LIKE '$search' ORDER BY Dep_fees  DESC");
	}elseif($sort == 'Deadline'){
		$query = mysqli_query($con, "SELECT * FROM departments where Dep_Name LIKE '$search' ORDER BY Dep_AddmDeadline  ASC");
	}else{
		$query = mysqli_query($con, "SELECT * FROM departments where Dep_Name LIKE '$search'");
	}
	
	

	
	if ( mysqli_num_rows($query) != 0 ) {
		while ($row = mysqli_fetch_array($query)) {
			$Dep_id = $row['Dep_id'];
			$query2 = mysqli_query($con, "SELECT * FROM departments where Dep_id='$Dep_id'");
			while ($row = mysqli_fetch_array($query2)) {
				$data['Dep_id'] = $row['Dep_id'];
				$data['Dep_Name'] = $row['Dep_Name'];
				$City_id = $data['City_id'] = $row['City_id'];
				$data['Dep_Tags'] = $row['Dep_Tags'];
				$data['Dep_fees'] = $row['Dep_fees'];
				$data['Dep_PrevAggr'] = $row['Dep_PrevAggr'];
				$data['Dep_AggrMatric'] = $row['Dep_AggrMatric'];
				$data['Dep_AggrHssc'] = $row['Dep_AggrHssc'];
				$data['Dep_AggrNts'] = $row['Dep_AggrNts'];
				$data['Dep_AddmDeadline'] = $row['Dep_AddmDeadline'];
				$data['Dep_TestName'] = $row['Dep_TestName'];
				$data['updated_at'] = $row['updated_at'];
				
				$Uni_id ="";
				$query3 = mysqli_query($con, "SELECT * FROM cities WHERE City_id='$City_id'");
				while ($row = mysqli_fetch_array($query3)) {
					$data['City_id'] = $row['City_id'];
					$data['Campus_City'] = $row['Campus_City'];
					$data['City_Name'] = $row['City_Name'];
					$data['Campus_Phone'] = $row['Campus_Phone'];
					$data['Campus_Email'] = $row['Campus_Email'];
					$data['Campus_Url'] = $row['Campus_Url'];
					$Uni_id = $data['Uni_id'] = $row['Uni_id'];
					
					//$data['updated_at'] = $row['updated_at'];
					
					
					$query4 = mysqli_query($con, "SELECT * FROM universities WHERE Uni_id='$Uni_id'");
					while ($row = mysqli_fetch_array($query4)) {
						$data['Uni_id'] = $row['Uni_id'];
						$data['Uni_Name'] = $row['Uni_Name'];
						$data['Uni_Phone'] = $row['Uni_Phone'];
						$data['Uni_Email'] = $row['Uni_Email'];
						$data['Uni_Rank'] = $row['Uni_Rank'];
						$data['Uni_Sector'] = $row['Uni_Sector'];
						$data['Uni_Address'] = $row['Uni_Address'];
						$data['Uni_Url'] = $row['Uni_Url'];
						$data['Uni_Main'] = $row['Uni_Main'];
						//$data['updated_at'] = $row['updated_at'];
						
						$qry_array[$i] = $data;
						$i++;
					}
					
				}
			}
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

<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$submit = $_POST['submit'];
	$uid = "";
	$rating = "";
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
		while ($row = mysqli_fetch_array($query)) {
		  $uid = $row['id'];
		}
	
	if($submit=="false"){
		$query = mysqli_query($con, "SELECT rating FROM users WHERE id = '$uid'");
		while ($row = mysqli_fetch_array($query)) {
		  $rating = $row['rating'];
		}
		if($query){
			if($rating =="1" || $rating =="2" || $rating =="3" || $rating =="4" || $rating =="5"){
			$response['success'] = 'true';
			$response['rating'] = $rating;
			}
			else{
				$response['success'] = 'false';
			}
		}
		else{
			$response['success'] = 'false';
		}
	}
	
	
	else if($submit=="true"){
		$rating = $_POST['rating'];
		$query = mysqli_query($con, "UPDATE users SET rating = '$rating' WHERE id = '$uid'");
		if($query){
			$response['success'] = 'true';
			$response['message'] = "Submitted Successful";
		}
		else{
			$response['success'] = 'false';
			$response['message'] = "Something went wrong!";
		}
	}
	
	
	echo json_encode($response);
?>
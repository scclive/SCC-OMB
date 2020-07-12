<?php

	session_start();
	include 'connection.php';
	
	$response = array();
	$data = array();
	
	$response['email'] = $email = $_POST['email'];
	$photo = $_POST['photo'];
	
	$uid = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
	while ($row = mysqli_fetch_array($uid)) {
	  $data['uid'] = $row['id'];
	}
	$response['uid'] = $data['uid'];
	$response['path'] = $path = "/wamp64/www/scc-3/public/images/profile_image/";
	if(!file_exists($path)){
		mkdir($path, 0777, true);
	}
	$response['pathSQL'] = $pathSQL = $data['uid'].".jpg";
	$response['finalPath'] = $finalPath = "/wamp64/www/scc-3/public/images/profile_image/".$data['uid'].".jpg";
	$sql = "UPDATE users SET photo = '$pathSQL' WHERE email = '$email'";
	if (mysqli_query($con, $sql)) {
		if(file_put_contents($finalPath, base64_decode($photo))){
			$response['success'] = true;
			$response['message'] = "Profile Image Updated";
		}else{
			$response['success'] = false;
			$response['message'] = "Error: Profile Image Update ";
		}
	}
	echo json_encode($response);
?>
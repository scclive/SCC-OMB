<?php

	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$uid = "";
	$subscribeData = array();
	$notificationsData = array();
	$responseData = array();
	$response = array();
	
	
	//gets user id//
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	//gets subscribed indexes//
	$i = 0;
	$query = mysqli_query($con, "SELECT * FROM subscribe WHERE uid='$uid'");
	$total = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)) {
		$Uni_id = $subscribeData['Uni_id'] = $row['Uni_id'];
		$updated_at2 = $subscribeData['updated_at'] = $row['updated_at'];
		
		//gets universities' updated_at//
		$query2 = mysqli_query($con, "SELECT Uni_Name, updated_at FROM universities WHERE Uni_id='$Uni_id'");
		$row = mysqli_fetch_array($query2);
		$Uni_Name = $row['Uni_Name'];
		$updated_at = $row['updated_at'];
		
		//compares subscribe's  updated_at and universities' updated_at//
		if($updated_at != $updated_at2){
			
			$notificationsData['newNotifications'] = true;
			$uid = $notificationsData['uid'] = $uid;
			$Uni_Name = $notificationsData['Uni_Name'] = $Uni_Name;
			$messagetext = $notificationsData['messagetext'] = "One of the Universitie(s) you are following have recently updated their information. \r\n 👉 Check your inbox!\r\n🕙[Last Updated: ".$subscribeData['updated_at']."]";
			$date = $notificationsData['date'] = $updated_at;
			$query3 = mysqli_query($con, "INSERT INTO notifications (uid, Uni_Name, messagetext, date) VALUES('$uid', '$Uni_Name', '$messagetext', '$date')");
			
			if($query3){
				
				$query4 = mysqli_query($con, "UPDATE subscribe SET updated_at = '$date' WHERE Uni_id = '$Uni_id'");
				
				if($query4){
					
					$notificationsData['success'] = true;
					$response['success'] = true;
				}else{
					
					$notificationsData['success'] = false;
				}
			}else{
				
				$notificationsData['success'] = false;
			}
		}else{
			$notificationsData['newNotifications'] = false;
		}
		
		
		$responseData[$i] = $notificationsData;
		$i++;
	}
	
	
	
	
	
	
	
	
	$query = mysqli_query($con, "SELECT * FROM subscribedepartments WHERE uid='$uid'");
	$total = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)) {
		$Dep_id = $subscribeData['Dep_id'] = $row['Dep_id'];
		$updated_at2 = $subscribeData['updated_at'] = $row['updated_at'];
		
		//gets departments' updated_at//
		$query2 = mysqli_query($con, "SELECT Dep_Name, City_id, updated_at FROM departments WHERE Dep_id='$Dep_id'");
		$row = mysqli_fetch_array($query2);
		$Dep_Name = $row['Dep_Name'];
		$City_id = $row['City_id'];
		$updated_at = $row['updated_at'];
		
		//compares subscribedepartments's  updated_at and departments' updated_at//
		if($updated_at != $updated_at2){
			
			$notificationsData['newNotifications'] = true;
			$uid = $notificationsData['uid'] = $uid;
			
			
			
			$Uni_id ="";
			$Campus_City ="";
			$query3 = mysqli_query($con, "SELECT Campus_City, Uni_id FROM cities WHERE City_id='$City_id'");
			while ($row = mysqli_fetch_array($query3)) {
				$Campus_City = $row['Campus_City'];
				$Uni_id = $row['Uni_id'];
			}
			
			$Uni_Name ="";
			$query4 = mysqli_query($con, "SELECT Uni_Name FROM universities WHERE Uni_id='$Uni_id'");
			while ($row = mysqli_fetch_array($query4)) {
				$Uni_Name = $row['Uni_Name'];
			}
			
			
			$notificationsData['Uni_Name'] = $Dep_Name." from📢 ".$Campus_City." Campus";
			
			$messagetext = $notificationsData['messagetext'] = "👉".$Uni_Name."One of the Program(s) you are following have recently updated their information. \r\n 🕙[Last Updated: ".$subscribeData['updated_at']."]";
			$date = $notificationsData['date'] = $updated_at;
			
			
			
			
			$query5 = mysqli_query($con, "INSERT INTO notifications (uid, Uni_Name, messagetext, date) VALUES('$uid', '$Dep_Name', '$messagetext', '$date')");
			
			if($query5){
				
				$query6 = mysqli_query($con, "UPDATE subscribedepartments SET updated_at = '$date' WHERE Dep_id = '$Dep_id'");
				
				if($query6){
					
					$notificationsData['success'] = true;
					$response['success'] = true;
				}else{
					
					$notificationsData['success'] = false;
				}
			}else{
				
				$notificationsData['success'] = false;
			}
		}else{
			$notificationsData['newNotifications'] = false;
		}
		
		
		$responseData[$i] = $notificationsData;
		$i++;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$response['data'] = $responseData;
	echo json_encode($response);
?>
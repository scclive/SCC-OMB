<?php
	include 'connection.php';

	$email = $_POST['email'];
	$olevels = "olevels";
	$uid;
	
	$art = $_POST['art'];
	$biology = $_POST['biology'];
	$businessStudies = $_POST['businessStudies'];
	$chemistry = $_POST['chemistry'];
	
	$computerStudies = $_POST['computerStudies'];
	$economics = $_POST['economics'];
	$englishLanguage = $_POST['englishLanguage'];
	$islamiyat = $_POST['islamiyat'];
	
	$mathematicsAdditional = $_POST['mathematicsAdditional'];
	$mathematicsD = $_POST['mathematicsD'];
	$pakistanStudies = $_POST['pakistanStudies'];
	$religiousStudies = $_POST['religiousStudies'];
	$sociology = $_POST['sociology'];
	$urduFirstLanguage = $_POST['urduFirstLanguage'];
	$urduSecondLanguage = $_POST['urduSecondLanguage'];
	
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	$query = mysqli_query($con, "SELECT * FROM olevels WHERE uid = '$uid'");
	if ( mysqli_num_rows($query) != 0 ) {
		
		$query = mysqli_query($con, "UPDATE users SET ssc = '$olevels' WHERE id='$uid'");
		if($query){
			
			$query = mysqli_query($con, "UPDATE olevels SET 
				art = '$art',
				biology = '$biology',
				businessStudies = '$businessStudies',
				chemistry = '$chemistry',
				
				computerStudies = '$computerStudies',
				economics = '$economics',
				englishLanguage = '$englishLanguage',
				islamiyat = '$islamiyat',
				
				mathematicsAdditional = '$mathematicsAdditional',
				mathematicsD = '$mathematicsD',
				pakistanStudies = '$pakistanStudies',
				religiousStudies = '$religiousStudies',
				sociology = '$sociology',
				urduFirstLanguage = '$urduFirstLanguage',
				urduSecondLanguage = '$urduSecondLanguage'
				WHERE uid='$uid'");
				
				
				
			if($query){
				$query = mysqli_query($con, "DELETE FROM matric WHERE uid='$uid'");
				if($query){
					$response['success'] = 'true';
					$response['message'] = 'Updated';
				}else{
					$response['success'] = 'false';
					$response['message'] = 'Something went wrong!';
				}
			}else{
				$response['success'] = 'false';
				$response['message'] = 'Something went wrong!';
			}
		}else{
			$response['success'] = 'false';
			$response['message'] = 'Something went wrong!';
		}
		
	}else{
		
		
		$query = mysqli_query($con, "UPDATE users SET ssc = '$olevels' WHERE id='$uid'");
		if($query){
			
			
			$query = mysqli_query($con, "INSERT INTO olevels (uid, art, biology, businessStudies, chemistry, computerStudies, economics, englishLanguage, islamiyat, mathematicsAdditional, mathematicsD, pakistanStudies, religiousStudies, sociology, urduFirstLanguage, urduSecondLanguage) 
			VALUES('$uid', '$art', '$biology', '$businessStudies', '$chemistry', '$computerStudies', '$economics', '$englishLanguage', '$islamiyat', '$mathematicsAdditional', '$mathematicsD', '$pakistanStudies', '$religiousStudies', '$sociology', '$urduFirstLanguage', '$urduSecondLanguage')");
				
				
			if($query){
				$query = mysqli_query($con, "DELETE FROM matric WHERE uid='$uid'");
				if($query){
					$response['success'] = 'true';
					$response['message'] = 'Updated';
				}else{
					$response['success'] = 'false';
					$response['message'] = 'Something went wrong!';
				}
			}else{
				$response['success'] = 'false';
				$response['message'] = 'Something went wrong!';
			}
		}else{
			$response['success'] = 'false';
			$response['message'] = 'Something went wrong!';
		}
		
	}
	
	
	
	
	echo json_encode($response);
?>

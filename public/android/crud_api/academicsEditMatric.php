<?php
	include 'connection.php';

	$email = $_POST['email'];
	$track = $_POST['track'];
	$matric = "matric";
	$uid;
	
	$english = "null";
	$urdu = "null";
	$islamiyat_Ethics = "null";
	$pakistan_Studies = "null";
	
	$mathematics = "null";
	$physics = "null";
	$chemistry = "null";
	$biology = "null";
	
	$computer = "null";
	$general_Sciences = "null";
	$economics = "null";
	$business_Studies = "null";
	
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	$query = mysqli_query($con, "SELECT * FROM matric WHERE uid = '$uid'");
	if ( mysqli_num_rows($query) != 0 ) {
		
		if($track=="Medical"){
		$english = $_POST['english'];
		$urdu = $_POST['urdu'];
		$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
		$pakistan_Studies = $_POST['pakistan_Studies'];
		
		$mathematics = $_POST['mathematics'];
		$physics = $_POST['physics'];
		$chemistry = $_POST['chemistry'];
		$biology = $_POST['biology'];
		
		$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
		if($query){
			
			
			$query = mysqli_query($con, "UPDATE matric SET 
				track = '$track',
				english = '$english',
				urdu = '$urdu',
				islamiyat_Ethics = '$islamiyat_Ethics',
				pakistan_Studies = '$pakistan_Studies',
				mathematics = '$mathematics',
				physics = '$physics',
				chemistry = '$chemistry',
				biology = '$biology',
				computer = '$computer',
				general_Sciences = '$general_Sciences',
				economics = '$economics',
				business_Studies = '$business_Studies'
				WHERE uid='$uid'");
			if($query){
				$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid'");
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
		
		
		}else if($track=="Engineering"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			
			$computer = $_POST['computer'];
			
			$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "UPDATE matric SET 
				track = '$track',
				english = '$english',
				urdu = '$urdu',
				islamiyat_Ethics = '$islamiyat_Ethics',
				pakistan_Studies = '$pakistan_Studies',
				mathematics = '$mathematics',
				physics = '$physics',
				chemistry = '$chemistry',
				biology = '$biology',
				computer = '$computer',
				general_Sciences = '$general_Sciences',
				economics = '$economics',
				business_Studies = '$business_Studies'
				WHERE uid='$uid'");
				if($query){
					$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid'");
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
			
			
		}else if($track=="Humanities"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			
			$general_Sciences = $_POST['general_Sciences'];
			$economics = $_POST['economics'];
			$business_Studies = $_POST['business_Studies'];
			
			$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "UPDATE matric SET 
				track = '$track',
				english = '$english',
				urdu = '$urdu',
				islamiyat_Ethics = '$islamiyat_Ethics',
				pakistan_Studies = '$pakistan_Studies',
				mathematics = '$mathematics',
				physics = '$physics',
				chemistry = '$chemistry',
				biology = '$biology',
				computer = '$computer',
				general_Sciences = '$general_Sciences',
				economics = '$economics',
				business_Studies = '$business_Studies'
				WHERE uid='$uid'");
				if($query){
					$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid'");
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
		
		
		
		
	}else{
		
		if($track=="Medical"){
		$english = $_POST['english'];
		$urdu = $_POST['urdu'];
		$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
		$pakistan_Studies = $_POST['pakistan_Studies'];
		
		$mathematics = $_POST['mathematics'];
		$physics = $_POST['physics'];
		$chemistry = $_POST['chemistry'];
		$biology = $_POST['biology'];
		
		$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
		if($query){
			$query = mysqli_query($con, "INSERT INTO matric (uid, track, english, urdu, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, general_Sciences, economics, business_Studies) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$general_Sciences', '$economics', '$business_Studies')");
			if($query){
				$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid';");
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
		
		
		}else if($track=="Engineering"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			
			$computer = $_POST['computer'];
			
			$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "INSERT INTO matric (uid, track, english, urdu, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, general_Sciences, economics, business_Studies) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$general_Sciences', '$economics', '$business_Studies')");
				if($query){
					$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid'");
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
			
			
		}else if($track=="Humanities"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			
			$general_Sciences = $_POST['general_Sciences'];
			$economics = $_POST['economics'];
			$business_Studies = $_POST['business_Studies'];
			
			$query = mysqli_query($con, "UPDATE users SET ssc = '$matric' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "INSERT INTO matric (uid, track, english, urdu, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, general_Sciences, economics, business_Studies) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$general_Sciences', '$economics', '$business_Studies')");
				if($query){
					$query = mysqli_query($con, "DELETE FROM olevels WHERE uid='$uid'");
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
		
	}
	
	
	
	
	echo json_encode($response);
?>

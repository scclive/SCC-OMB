<?php
	include 'connection.php';

	$email = $_POST['email'];
	$track = $_POST['track'];
	$hssc = "hssc";
	$uid;
	
	$urdu = "null";
	$english = "null";
	$islamiyat_Ethics = "null";
	$pakistan_Studies = "null";
	
	$mathematics = "null";
	$physics = "null";
	$chemistry = "null";
	$biology = "null";
	
	$computer = "null";
	$statistics = "null";
	$economics = "null";
	
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	$query = mysqli_query($con, "SELECT * FROM hssc WHERE uid = '$uid'");
	if ( mysqli_num_rows($query) != 0 ) {
		
		if($track=="Pre-Med"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			$biology = $_POST['biology'];
		
			$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
			if($query){
			
				$query = mysqli_query($con, "UPDATE hssc SET 
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
					statistics = '$statistics',
					economics = '$economics'
					WHERE uid='$uid'");
				if($query){
					$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid'");
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
		}else if($track=="Pre-Engineering"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			
			
			$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
			if($query){
				
				
				$query = mysqli_query($con, "UPDATE hssc SET 
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
					statistics = '$statistics',
					economics = '$economics'
					WHERE uid='$uid'");
				if($query){
					$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid'");
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
		}else if($track=="ICS"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			
			$computer = $_POST['computer'];
			$statistics = $_POST['statistics'];
			$economics = $_POST['economics'];
			
			$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
			if($query){
				
				
				$query = mysqli_query($con, "UPDATE hssc SET 
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
					statistics = '$statistics',
					economics = '$economics'
					WHERE uid='$uid'");
				if($query){
					$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid'");
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
		
		if($track=="Pre-Med"){
		$english = $_POST['english'];
		$urdu = $_POST['urdu'];
		$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
		$pakistan_Studies = $_POST['pakistan_Studies'];
		
		$physics = $_POST['physics'];
		$chemistry = $_POST['chemistry'];
		$biology = $_POST['biology'];
		
		$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
		if($query){
			$query = mysqli_query($con, "INSERT INTO hssc (uid, track, urdu, english, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, statistics, economics) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$statistics', '$economics')");
			if($query){
				$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid';");
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
		
		
		}else if($track=="Pre-Engineering"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			
			$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "INSERT INTO hssc (uid, track, urdu, english, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, statistics, economics) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$statistics', '$economics')");
				if($query){
					$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid';");
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
			
			
		}else if($track=="ICS"){
			$english = $_POST['english'];
			$urdu = $_POST['urdu'];
			$islamiyat_Ethics = $_POST['islamiyat_Ethics'];
			$pakistan_Studies = $_POST['pakistan_Studies'];
			
			$mathematics = $_POST['mathematics'];
			$physics = $_POST['physics'];
			
			$computer = $_POST['computer'];
			$statistics = $_POST['statistics'];
			$economics = $_POST['economics'];
			
			$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
			if($query){
				$query = mysqli_query($con, "INSERT INTO hssc (uid, track, urdu, english, islamiyat_Ethics, pakistan_Studies, mathematics, physics, chemistry, biology, computer, statistics, economics) VALUES('$uid', '$track', '$english', '$urdu', '$islamiyat_Ethics', '$pakistan_Studies', '$mathematics', '$physics', '$chemistry', '$biology', '$computer', '$statistics', '$economics')");
				if($query){
					$query = mysqli_query($con, "DELETE FROM alevels WHERE uid='$uid';");
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

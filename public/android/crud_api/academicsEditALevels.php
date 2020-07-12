<?php
	include 'connection.php';

	$email = $_POST['email'];
	$hssc = "alevels";
	$uid;
	
	$accounting = $_POST['accounting'];
	$aICT = $_POST['aICT'];
	$art = $_POST['art'];
	$biology = $_POST['biology'];
	$businessStudies = $_POST['businessStudies'];
	$chemistry = $_POST['chemistry'];
	$computerScience = $_POST['computerScience'];
	$economics = $_POST['economics'];
	$englishLanguage = $_POST['englishLanguage'];
	$englishLiterature = $_POST['englishLiterature'];
	$environmentalManagement = $_POST['environmentalManagement'];
	$globalPerspectives = $_POST['globalPerspectives'];
	$governmentPolitics = $_POST['governmentPolitics'];
	$history = $_POST['history'];
	$law = $_POST['law'];
	$mathematics = $_POST['mathematics'];
	$mathematicsFurther = $_POST['mathematicsFurther'];
	$mediaStudies = $_POST['mediaStudies'];
	$physics = $_POST['physics'];
	$psychology = $_POST['psychology'];
	$sociology = $_POST['sociology'];
	$urdu = $_POST['urdu'];
	
	$response = array();
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	$query = mysqli_query($con, "SELECT * FROM alevels WHERE uid = '$uid'");
	if ( mysqli_num_rows($query) != 0 ) {
		
		$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
		if($query){
			
			$query = mysqli_query($con, "UPDATE alevels SET 
				accounting = '$accounting',
				aICT = '$aICT',
				art = '$art',
				biology = '$biology',
				businessStudies = '$businessStudies',
				chemistry = '$chemistry',
				computerScience = '$computerScience',
				economics = '$economics',
				englishLanguage = '$englishLanguage',
				englishLiterature = '$englishLiterature',
				environmentalManagement = '$environmentalManagement',
				globalPerspectives = '$globalPerspectives',
				governmentPolitics = '$governmentPolitics',
				history = '$history',
				law = '$law',
				mathematics = '$mathematics',
				mathematicsFurther = '$mathematicsFurther',
				mediaStudies = '$mediaStudies',
				physics = '$physics',
				psychology = '$psychology',
				sociology = '$sociology',
				urdu = '$urdu'
				WHERE uid='$uid'");
				
				
				
			if($query){
				$query = mysqli_query($con, "DELETE FROM hssc WHERE uid='$uid'");
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
		
		
		$query = mysqli_query($con, "UPDATE users SET hssc = '$hssc' WHERE id='$uid'");
		if($query){
			
			
			$query = mysqli_query($con, "INSERT INTO alevels (uid, accounting, aICT, art, biology, businessStudies, chemistry, computerScience, economics, englishLanguage, englishLiterature, environmentalManagement, globalPerspectives, governmentPolitics, history, law, mathematics, mathematicsFurther,mediaStudies, physics, psychology, sociology, urdu) 
			VALUES('$uid', '$accounting', '$aICT', '$art', '$biology', '$businessStudies', '$chemistry', '$computerScience', '$economics', '$englishLanguage', '$englishLiterature', '$environmentalManagement', '$globalPerspectives', '$governmentPolitics', '$history', '$law', '$mathematics', '$mathematicsFurther', '$mediaStudies', '$physics', '$psychology', '$sociology', '$urdu')");
				
				
			if($query){
				$query = mysqli_query($con, "DELETE FROM hssc WHERE uid='$uid'");
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

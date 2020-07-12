<?php
	include 'connection.php';

	$email = $_POST['email'];
	$uid = "";
	$response = array();
	$qry_array = array();
	$data = array();
	$ssc = "";
	$hssc = "";
	
	$query = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");
	while ($row = mysqli_fetch_array($query)) {
	  $uid = $row['id'];
	}
	
	
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$uid'");
	while ($row = mysqli_fetch_array($query)) {
		$response['ssc'] = $ssc =  $row['ssc'];
		$response['hssc'] = $hssc = $row['hssc'];
		
		//getting ssc data//
		if($ssc == "matric"){
			$query = mysqli_query($con, "SELECT * FROM matric WHERE uid = '$uid'");
			while ($row = mysqli_fetch_array($query)) {
				$data['track'] = $row['track'];
				$data['english'] = $row['english'];
				$data['urdu'] = $row['urdu'];
				$data['islamiyat_Ethics'] = $row['islamiyat_Ethics'];
				$data['pakistan_Studies'] = $row['pakistan_Studies'];
				$data['mathematics'] = $row['mathematics'];
				$data['physics'] = $row['physics'];
				$data['chemistry'] = $row['chemistry'];
				$data['biology'] = $row['biology'];
				$data['computer'] = $row['computer'];
				$data['general_sciences'] = $row['general_sciences'];
				$data['economics'] = $row['economics'];
				$data['business_studies'] = $row['business_studies'];
				$qry_array['matric'] = $data;
			}
		}else if($ssc == "olevels"){
			$data = array();
			$query = mysqli_query($con, "SELECT * FROM olevels WHERE uid = '$uid'");
			while ($row = mysqli_fetch_array($query)) {
				$data['Art'] = $row['art'];
				$data['Biology'] = $row['biology'];
				$data['Business Studies'] = $row['businessStudies'];
				$data['Chemistry'] = $row['chemistry'];
				$data['Computer Studies'] = $row['computerStudies'];
				$data['Economics'] = $row['economics'];
				$data['English Language'] = $row['englishLanguage'];
				$data['Islamiyat'] = $row['islamiyat'];
				$data['Mathematics Additional'] = $row['mathematicsAdditional'];
				$data['Mathematics D'] = $row['mathematicsD'];
				$data['Pakistan Studies'] = $row['pakistanStudies'];
				$data['Religious Studies'] = $row['religiousStudies'];
				$data['Sociology'] = $row['sociology'];
				$data['Urdu First Language'] = $row['urduFirstLanguage'];
				$data['Urdu Second Language'] = $row['urduSecondLanguage'];
				$qry_array['olevels'] = $data;
			}
		}
		
		//getting hssc data//
		if($hssc == "hssc"){
			$data = array();
			$query = mysqli_query($con, "SELECT * FROM hssc WHERE uid = '$uid'");
			while ($row = mysqli_fetch_array($query)) {
				$data['track'] = $row['track'];
				$data['urdu'] = $row['urdu'];
				$data['english'] = $row['english'];
				$data['islamiyat_Ethics'] = $row['islamiyat_Ethics'];
				$data['pakistan_Studies'] = $row['pakistan_Studies'];
				$data['mathematics'] = $row['mathematics'];
				$data['physics'] = $row['physics'];
				$data['chemistry'] = $row['chemistry'];
				$data['biology'] = $row['biology'];
				$data['computer'] = $row['computer'];
				$data['statistics'] = $row['statistics'];
				$data['economics'] = $row['economics'];
				$qry_array['hssc'] = $data;
			}
		}else if($hssc == "alevels"){
			$data = array();
			$query = mysqli_query($con, "SELECT * FROM alevels WHERE uid = '$uid'");
			while ($row = mysqli_fetch_array($query)) {
				$data['Accounting'] = $row['accounting'];
				$data['AICT'] = $row['aICT'];
				$data['Art'] = $row['art'];
				$data['Biology'] = $row['biology'];
				$data['Business Studies'] = $row['businessStudies'];
				$data['Chemistry'] = $row['chemistry'];
				$data['Computer Science'] = $row['computerScience'];
				$data['Economics'] = $row['economics'];
				$data['English Language'] = $row['englishLanguage'];
				$data['English Literature'] = $row['englishLiterature'];
				$data['Environmental Management'] = $row['environmentalManagement'];
				$data['Global Perspectives'] = $row['globalPerspectives'];
				$data['Government Politics'] = $row['governmentPolitics'];
				$data['History'] = $row['history'];
				$data['Law'] = $row['law'];
				$data['Mathematics'] = $row['mathematics'];
				$data['Mathematics- Further'] = $row['mathematicsFurther'];
				$data['Media Studies'] = $row['mediaStudies'];
				$data['Physics'] = $row['physics'];
				$data['Psychology'] = $row['psychology'];
				$data['Sociology'] = $row['sociology'];
				$data['Urdu'] = $row['urdu'];
				$qry_array['alevels'] = $data;
			}
		}
	}
	
	
	
	
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

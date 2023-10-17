<?php
	session_start();
	
	$type = $_SESSION["Type"];

	if($type == "LRN") {
		header('Location: learner_user_profile.php');
		}
					
	else if($type == "LEC") {
		header("Location: lecturer_user_profile.php");
	}
	
	else if($type == "SA") {
		header("Location: lecturer_register.php");
	} 
	
	else if($type == "ADM") {
		header("Location: lecturer_register.php");
	} 	
					
	else {
		echo"include web page. Invalid type";
	}

?>
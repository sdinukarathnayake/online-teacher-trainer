<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');
?>

<!DOCTYPE HTML>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="description" content="Online Teacher Trainer is a website that helps teachers and lecturers to learn new skills and develop their knowledge about their subjects.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>TT - Lecturer Registration Form</title> 
	
	<!-- google font & icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" text="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	<!-- external page link -->
	<link rel="stylesheet" type="text/css" href="style\mainStyle.css">
	<script src="js\mainscript.js"></script>	
</head>
 
<body>
	<!-- website header -->
	<header>
		<img class="header-logo" src="images/website_logo.png" alt="Teacher_Trainer_Icon">
		<nav class="header-nav">
			<ul class="nav-links">
				<li><a href="home-in.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="support_form-in.php">Support</a></li>
			<li><a href="about-in.php">About</a></li>	
			<li><a href="faq-in.php">FAQ</a></li>					
			</ul>
	</nav>	
	<div class="header-btns">
	<a href="admin_userprofile.php"><button id="btnLog" class="header-btn">My Account</button></a>
	<a href="logout.php"><button id="btnReg" class="header-btn">Logout</button></a>
		</div>
	</header>
	
	<h3 class="lrnReg-title">Lecturer Registration Form</h3>
	
	<form method="POST">
	<table class="lrnReg-table" border=1>
		<tr>
			<td class="lrnReg-table-label">
				<p>First Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-FirstName" required>	
			</td>
			<td class="lrnReg-table-label">
				<p>Last Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-LastName" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 01:</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-AddL1" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Gender :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec-Gender" required>
						<option selected hidden value="">Select your gender</option>
						<option value="M">Male</option>
						<option value="F">Female</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 02 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-AddL2" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Mobile :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-Mobile" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 03 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-AddL3" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Email :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-Email" required>
			</td>
		</tr>
				
		<tr>
			<td class="lrnReg-table-label">
				<p>Education :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-Ed1" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Skill Category :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec-SKC1" required>
						<option selected hidden value="">Select your skill</option>
						<option value="Programming">Programming</option>
						<option value="Animation">Animation</option>
						<option value="Marketing">Marketing</option>
						<option value="Accounting">Accounting</option>
						<option value="Music">Music</option>
						<option value="UI/UX Design">UI/UX Design</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Education (Other):</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec-Ed2" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Skill Category (Other):</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec-SKC2" required>
						<option selected hidden value="">Select your skill</option>
						<option value="Programming">Programming</option>
						<option value="Animation">Animation</option>
						<option value="Marketing">Marketing</option>
						<option value="Accounting">Accounting</option>
						<option value="Music">Music</option>
						<option value="UI/UX Design">UI/UX Design</option>
				</select>
			</td>
		</tr>
		
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Password :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Password" name="Lec-PW" required>							
			</td>
			<td class="lrnReg-table-label">
				<p>Date of Birth :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Date" name="Lec-DOB" required>
				<input type="submit" id="btnLearnerReg" name="submit" value="Register">	
			</td>
			
		</tr>		
	</table>
	
	</form>
	
	
	<footer class="footer">
		<div class="footer-container">
			<div class="footer-row">
				<div class="footer-col">
					<h5>Online Teacher Trainer</h5>
					<img class="footer-logo" src="images/footer_logo.png" alt="Teacher_Trainer_Icon">
					<p>
						Online Teacher Trainer is a website that helps teachers and lecturers to learn new skills and develop their knowledge about their subjects.
					</p>
				</div>
				
				<div class="footer-col">
					<h4>Useful Links</h4>
					<ul class="footer-ul">
						<li><a href="terms-in.php">Terms & Conditions</a></li>
						<li><a href="support_form-in.php">Help & Support</a></li>
						<li><a href="privacy-in.php">Privacy Policy</a></li>
						<li><a href="faq-in.php">FAQs</a></li>
					</ul>
				</div>
				
				<div class="footer-col">
					<h4>Contact Us</h4>
					<ul class="footer-ul">
						<li>contact@teachertrainer.com</li>
						<li>No 7, Malabe Road, Malabe</li>
						<li>Sri Lanka</li>
						<li>012 3456789 | 098 7654321</li>
					</ul>
				</div>
				
				<div class="footer-col">
					<h4>Follow us</h4>
					<div class="social-links">
						<a href="https://web.facebook.com/sliit.lk/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/sliit.life/" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="https://lk.linkedin.com/school/sliit/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>	
</body> 
</html>



<?php 

if(isset($_POST['submit'])) {
	
	$FirstName = $_POST['Lec-FirstName'];
	$LastName = $_POST['Lec-LastName'];
	$Mobile = $_POST['Lec-Mobile'];
	$Email = $_POST['Lec-Email'];
	$AddressLine1 = $_POST['Lec-AddL1'];
	$AddressLine2 = $_POST['Lec-AddL2'];
	$AddressLine3 = $_POST['Lec-AddL3'];
	$DOB = $_POST['Lec-DOB'];
	$Gender = $_POST['Lec-Gender'];	
	$Education1 = $_POST['Lec-Ed1'];
	$Education2 = $_POST['Lec-Ed2'];
	$Skill_Category1 = $_POST['Lec-SKC1'];
	$Skill_Category2 = $_POST['Lec-SKC2'];		
	$Password = $_POST['Lec-PW'];
	$Type = 'LEC';

	$checkSeqId = "SELECT * FROM `lecturer` ORDER BY SeqId DESC LIMIT 1";
	$checkSeqIdResult = mysqli_query($conn,$checkSeqId);
	$rowCount = mysqli_num_rows($checkSeqIdResult);

	if($rowCount > 0) {
		if($row = mysqli_fetch_assoc($checkSeqIdResult)) {
			$uId = $row['LecturerId'];
			$get_numbers = str_replace("LEC", "", $uId);
			$id_increase = $get_numbers + 1;
			$get_string = str_pad($id_increase, 6, 0, STR_PAD_LEFT);	
			$LecturerId = "LEC".$get_string;
			
			//data insert to learner
			$sql1 = "INSERT INTO lecturer(FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Education1,Education2,Skill_Category1,Skill_Category2,Password,LecturerId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Education1','$Education2','$Skill_Category1','$Skill_Category2','$Password','$LecturerId')";

			if ($conn->query($sql1)) {
			}
			
			else {
				echo "Error : ".$conn->error;
			}
		}
	}
		
	else {
		$LecturerId = 'LEC000001';
		
		//data insert to learner
		$sql2 = "INSERT INTO lecturer(FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Education1,Education2,Skill_Category1,Skill_Category2,Password,LecturerId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Education1','$Education2','$Skill_Category1','$Skill_Category2','$Password','$LecturerId')";

		if ($conn->query($sql2)) {
				echo '<script> alert("Lecturer successfully registered...");</script>';
		}
			
		else {
			echo "Error : ".$conn->error;
		}	
	}

	//data insert to learner
	$sql3 = "INSERT INTO login (Email,Password,Type,UserId) VALUES('$Email','$Password','$Type','$LecturerId')";
		
	if ($conn->query($sql3)) {
			echo '<script> alert("Lecturer successfully registered...");</script>';
		}
			
	else {
		echo "Error login : ".$conn->error;
	}
}

$conn->close();

?>
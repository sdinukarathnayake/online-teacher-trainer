<?php 
	
	session_start();

	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');

	$user_id = 'SID000001';

	if(isset($_POST['submit'])){

		$Ler_FirstName = $_POST['Ler_FirstName'];
		$Ler_LastName = $_POST['Ler_LastName'];
		$Ler_AddL1 = $_POST['Ler_AddL1'];
		$Ler_Gender = $_POST['Ler_Gender'];
		$Ler_AddL2 = $_POST['Ler_AddL2'];
		$Ler_Mobile = $_POST['Ler_Mobile'];
		$Ler_AddL3 = $_POST['Ler_AddL3'];
		$Ler_Email = $_POST['Ler_Email'];
		$Ler_PW = $_POST['Ler_PW'];
		$Ler_DOB = $_POST['Ler_DOB'];
		mysqli_query($conn, "UPDATE learner SET 	FirstName = '$Ler_FirstName', LastName = '$Ler_LastName', AddressLine1 = '$Ler_AddL1', 
		Gender = '$Ler_Gender', AddressLine2 = '$Ler_AddL2', Mobile = '$Ler_Mobile', AddressLine3 = '$Ler_AddL3', Email = '$Ler_Email', Password = '$Ler_PW',
		DOB = '$Ler_DOB'  where StudentId = '$user_id'");
	
		echo '<script>alert("Update successfull!");</script>';
	}

?>

<!DOCTYPE HTML>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="description" content="Online Teacher Trainer is a website that helps teachers and lecturers to learn new skills and develop their knowledge about their subjects.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>TT - Learner User Profile</title> 
	
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
	<a href="learner_user_profile.php"><button id="btnLog" class="header-btn">My Account</button></a>
	<a href="logout.php"><button id="btnReg" class="header-btn">Logout</button></a>
		</div>
	</header>	
	
	<h3 class="lrnReg-title">Learner User Profile</h3>

    <?php
	
	$select = mysqli_query($conn, "select * from learner where StudentId = '$user_id'");

	if(mysqli_num_rows($select) > 0){
		$fetch=mysqli_fetch_assoc($select);
	}
	
	?>
	
	
	<form method="POST">
	<table class="lrnReg-table" >
		<tr>
			<td class="lrnReg-table-label">
				<p>First Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_FirstName" value="<?php echo $fetch['FirstName']?>" required>	
			</td>
			<td class="lrnReg-table-label">
				<p>Last Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_LastName" value="<?php echo $fetch['LastName']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 01:</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_AddL1"  value="<?php echo $fetch['AddressLine1']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Gender :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Ler_Gender"  value="<?php echo $fetch['Gender']?>" required>
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
				<input type="text" name="Ler_AddL2"  value="<?php echo $fetch['AddressLine2']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Mobile :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_Mobile"  value="<?php echo $fetch['Mobile']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 03 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_AddL3"  value="<?php echo $fetch['AddressLine3']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Email :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler_Email"  value="<?php echo $fetch['Email']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Password :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Password" name="Ler_PW"  value="<?php echo $fetch['Password']?>" required>							
			</td>
			<td class="lrnReg-table-label">
				<p>Date of Birth :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Date" name="Ler_DOB"  value="<?php echo $fetch['DOB']?>" required>
				<input type="submit" id="btnLearnerReg" name="submit" value="Save">	
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
						<li><a href="terms.html">Terms & Conditions</a></li>
						<li><a href="support_form.php">Help & Support</a></li>
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="faq.html">FAQs</a></li>
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



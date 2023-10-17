<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');

	$user_id = 'LEC000001';

	if(isset($_POST['submit'])){

		$Lec_FirstName = $_POST['Lec_FirstName'];
		$Lec_LastName = $_POST['Lec_LastName'];
		$Lec_AddL1 = $_POST['Lec_AddL1'];
		$Lec_Gender = $_POST['Lec_Gender'];
		$Lec_AddL2 = $_POST['Lec_AddL2'];
		$Lec_Mobile = $_POST['Lec_Mobile'];
		$Lec_AddL3 = $_POST['Lec_AddL3'];
		$Lec_Email = $_POST['Lec_Email'];
		$Lec_Ed1 = $_POST['Lec_Ed1'];
		$Lec_SKC1 = $_POST['Lec_SKC1'];
		$Lec_Ed2 = $_POST['Lec_Ed2'];
		$Lec_SKC2 = $_POST['Lec_SKC2'];
		$Lec_PW = $_POST['Lec_PW'];
		$Lec_DOB = $_POST['Lec_DOB'];
		mysqli_query($conn, "UPDATE lecturer SET 	FirstName = '$Lec_FirstName', LastName = '$Lec_LastName', AddressLine1 = '$Lec_AddL1', 
		Gender = '$Lec_Gender', AddressLine2 = '$Lec_AddL2', Mobile = '$Lec_Mobile', AddressLine3 = '$Lec_AddL3', Email = '$Lec_Email', 
		Education1 = '$Lec_Ed1', Skill_Category1 = '$Lec_SKC1' , Education2 = '$Lec_Ed2', Skill_Category2 = '$Lec_SKC2', Password = '$Lec_PW',
		DOB = '$Lec_DOB'  where LecturerId = '$user_id'");
	
		echo '<script>alert("Update successfull!");</script>';
	}

?>

<!DOCTYPE HTML>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>TT - Lecturer User Profile</title> 
	
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
	<a href="lecturer_user_profile.php"><button id="btnLog" class="header-btn">My Account</button></a>
	<a href="logout.php"><button id="btnReg" class="header-btn">Logout</button></a>
		</div>
	</header>	
	
	<h3 class="lrnReg-title">Lecturer User Profile</h3>

	<?php
	
	$select = mysqli_query($conn, "select * from lecturer where LecturerId = '$user_id'");

	if(mysqli_num_rows($select) > 0){
		$fetch=mysqli_fetch_assoc($select);
	}
	
	?>
	
	<form method="POST">
	<table class="lrnReg-table">
		<tr>
			<td class="lrnReg-table-label">
				<p>First Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_FirstName" value="<?php echo $fetch['FirstName']?>" required>	
			</td>
			<td class="lrnReg-table-label">
				<p>Last Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_LastName" value="<?php echo $fetch['LastName']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 01:</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_AddL1" value="<?php echo $fetch['AddressLine1']?>"required>
			</td>
			<td class="lrnReg-table-label">
				<p>Gender :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec_Gender" value="<?php echo $fetch['Gender']?>">
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
				<input type="text" name="Lec_AddL2" value="<?php echo $fetch['AddressLine2']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Mobile :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_Mobile" value="<?php echo $fetch['Mobile']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 03 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_AddL3" value="<?php echo $fetch['AddressLine3']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Email :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_Email" value="<?php echo $fetch['Email']?>"required>
			</td>
		</tr>
				
		<tr>
			<td class="lrnReg-table-label">
				<p>Education :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Lec_Ed1" value="<?php echo $fetch['Education1']?>"required>
			</td>
			<td class="lrnReg-table-label">
				<p>Skill Category :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec_SKC1" value="<?php echo $fetch['Skill_Category1']?>">
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
				<input type="text" name="Lec_Ed2" value="<?php echo $fetch['Education2']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Skill Category (Other):</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec_SKC2" value="<?php echo $fetch['Skill_Category2']?>" >
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
				<input type="Password" name="Lec_PW" value="<?php echo $fetch['Password']?>" required>													
			</td>
			<td class="lrnReg-table-label">
				<p>Date of Birth :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Date" name="Lec_DOB" value="<?php echo $fetch['DOB']?>"required>
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



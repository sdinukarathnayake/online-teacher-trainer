<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');

	$user_id = 'AD0001';

	if(isset($_POST['submit'])){

		$admin_FirstName = $_POST['admin_FirstName'];
		$admin_LastName = $_POST['admin_LastName'];
		$admin_AddL1 = $_POST['admin_AddL1'];
		$admin_Gender = $_POST['admin_Gender'];
		$admin_AddL2 = $_POST['admin_AddL2'];
		$admin_Mobile = $_POST['admin_Mobile'];
		$admin_AddL3 = $_POST['admin_AddL3'];
		$admin_Email = $_POST['admin_Email'];
		$admin_PW = $_POST['admin_PW'];
		$admin_DOB = $_POST['admin_DOB'];
		mysqli_query($conn, "UPDATE admins SET 	FirstName = '$admin_FirstName', LastName = '$admin_LastName', Addressline1 = '$admin_AddL1', 
		Gender = '$admin_Gender', Addressline2 = '$admin_AddL2', Mobile = '$admin_Mobile', Addressline3 = '$admin_AddL3', Email = '$admin_Email', 
		 Password = '$admin_PW',
		Birthday = '$admin_DOB'  where AdminId = '$user_id'");
	
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
	<title>TT - Admin User Profile</title> 
	
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
	
	<h3 class="lrnReg-title">Admin User Profile</h3>

	<?php
	
	$select = mysqli_query($conn, "select * from admins where AdminId = '$user_id'");

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
				<input type="text" name="admin_FirstName" value="<?php echo $fetch['FirstName']?>" required>	
			</td>
			<td class="lrnReg-table-label">
				<p>Last Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_LastName" value="<?php echo $fetch['LastName']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 01:</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_AddL1" value="<?php echo $fetch['Addressline1']?>"required>
			</td>
			<td class="lrnReg-table-label">
				<p>Gender :</p>
			</td>
			<td class="lrnReg-table-input">
			<input type="text" name="admin_Gender" value="<?php echo $fetch['Gender']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 02 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_AddL2" value="<?php echo $fetch['Addressline2']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Mobile :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_Mobile" value="<?php echo $fetch['Mobile']?>" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 03 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_AddL3" value="<?php echo $fetch['Addressline3']?>" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Email :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_Email" value="<?php echo $fetch['Email']?>"required>
			</td>
		</tr>
				

		<tr>
			<td class="lrnReg-table-label">
				<p>Password :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Password" name="admin_PW" value="<?php echo $fetch['Password']?>" required>													
			</td>
			<td class="lrnReg-table-label">
				<p>Date of Birth :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="admin_DOB" value="<?php echo $fetch['Birthday']?>"required>
				<input type="submit" id="btnLearnerReg" name="submit" value="Save">	
			</td>
			
		</tr>	
		<tr>
			<td>
				<div></div>
			
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



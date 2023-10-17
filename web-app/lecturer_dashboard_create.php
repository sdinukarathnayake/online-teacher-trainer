<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');

    if(isset($_POST['submit'])){
        $Cid = $_POST['Cid'];
        $Cname = $_POST['Cname'];
        $SKC = $_POST['SKC'];

        $sql = "Insert into course (CourseId, CourseName, Skill_Category) values ('$Cid', '$Cname', '$SKC')";

		if ($conn->query($sql)) {
			echo '<script> alert("You have successfully created course...");</script>';
		}
			
	else {
		echo "Error login : ".$conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>Teacher Trainer </title> 
	
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
	
	<center>
	<div class="lecDash-content">
		<h2>Create New Course</h2>
	</div>
	</center>

    <form method="POST">
	<table class="lrnReg-table" border=1>
		<tr>
			<td class="lrnReg-table-label">
				<p>Course ID :</p>
			</td>    
			<td class="lrnReg-table-input">
				<input type="text" name="Cid" required>	
			</td>
        </tr>    

        <tr>
			<td class="lrnReg-table-label">
				<p>Course Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Cname" required>
			</td>
        </tr>
        
        <tr>
			<td class="lrnReg-table-label">
				<p>Skill Category :</p>
			</td>
			<td class="lrnReg-table-input">
                <select name="SKC" required>
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
            <td>
            </td>
            <td class="lrnReg-table-input">
				<input type="submit" id="btnCourseCreate" name="submit" value="Create">	
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
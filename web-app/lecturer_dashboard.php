<?php 
	$db = mysqli_connect('localhost','root','','onlineteachertrainer');

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>Teacher Trainer - Home</title> 
	
	<!-- google font & icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" text="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	<!-- external page link --> 
	<link rel="stylesheet" type="text/css" href="style\mainStyle.css">
	<link rel="stylesheet" type="text/css" href="style\lecDashStyle.css">
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
	
	<div class="lecDash-content">
		<h2>Lecture Dashboard</h2>
	</div>
    

    <a href="lecturer_dashboard_create.php"><button class="add-button" id="btnadduser">Add Course</button></a>

    <table class = "lecDash_table"border=1>
        <tr>
            <th>CourseId</th>
            <th>Course Name</th>
            <th>Skill Category</th>
            <th>Operations</th>
</tr>
    <tr>
    <?php
			$qry = "SELECT * FROM course";
			$run = $db -> query($qry);
			if($run -> num_rows > 0)
			{
				while($row = $run -> fetch_assoc())
				{
					$id = $row['CourseId'];
		?>	
			<tr>
				<td><?php echo $row['CourseId'] ?></td>
				<td><?php echo $row['CourseName'] ?></td>
				<td><?php echo $row['Skill_Category'] ?></td>				
				<td class="saDash-Operations">
					<div class="saDash-buttons">
					<a href="edit.php?id=<?php echo $id ?>"><button id="saDash-changeStatus"> Update </button> </a>
					<a href="delete-Lec-Course.php?id=<?php echo $id ?>" onClick="return confirm('Are you sure?')"><button id="saDash-delete"> Delete </button> </a>
					</div>
				</td>
			</tr>
            
		<?php
				}	
			}
		?>
</tr>

    </table>

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
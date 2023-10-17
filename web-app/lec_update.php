<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');


$Cid = "";
$Cname = "";
$SKC = "";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the admin record using the provided ID
    $sql = "SELECT * FROM course WHERE SeqId = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && $adminData = mysqli_fetch_assoc($result)) {
        // Populate the form fields with the retrieved values
        	$Cid = $adminData['CourseId'];
            $Cname = $adminData['CourseName'];
            $SKC = $adminData['Skill_Category'];
    }
}



?>



?>

<!DOCTYPE html>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="description" content="Online Teacher Trainer is a website that helps teachers and lecturers to learn new skills and develop their knowledge about their subjects.">
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
	<script src="js\mainscript.js"></script>	
</head>
 
<body>
	<!-- website header -->
	<header>
		<img class="header-logo" src="images/website_logo.png" alt="Teacher_Trainer_Icon">
		<nav class="header-nav">
			<ul class="nav-links">
				<li><a href="index.html">Home</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="support.html">Support</a></li>
				<li><a href="about.html">About</a></li>	
				<li><a href="faq.html">FAQ</a></li>					
			</ul>
		</nav>
		<div class="header-btns">
		<a href="login.html"><button id="btnLog" class="header-btn">Login</button></a>
		<a href="register.html"><button id="btnReg" class="header-btn">Register</button></a>
		</div>
	</header>	
<!------------------------------(mekata uda kotasa wenas karanna yanna epa)-------------------------------------->


	<div class="lecDash-content">
		<h2>Lecture Dashboard</h2>
	</div>

 


	<form method="POST">
    <table class="lrnReg-table" border=1>
        <tr>
            <td class="lrnReg-table-label">
                <p>Course ID :</p>
            </td>
            <td class="lrnReg-table-input">
                <input type="text" name="Cid" value="<?php echo $Cid; ?>" required>
            </td>
        </tr>

        <tr>
            <td class="lrnReg-table-label">
                <p>Course Name :</p>
            </td>
            <td class="lrnReg-table-input">
                <input type="text" name="Cname" value="<?php echo $Cname; ?>" required>
            </td>
        </tr>

        <tr>
            <td class="lrnReg-table-label">
                <p>Skill Category :</p>
            </td>
            <td class="lrnReg-table-input">
                <select name="SKC" required>
                    <option value="">Select your skill</option>
                    <option value="Programming" <?php if ($SKC == "Programming") echo "selected"; ?>>Programming</option>
                    <option value="Animation" <?php if ($SKC == "Animation") echo "selected"; ?>>Animation</option>
                    <option value="Marketing" <?php if ($SKC == "Marketing") echo "selected"; ?>>Marketing</option>
                    <option value="Accounting" <?php if ($SKC == "Accounting") echo "selected"; ?>>Accounting</option>
                    <option value="Music" <?php if ($SKC == "Music") echo "selected"; ?>>Music</option>
                    <option value="UI/UX Design" <?php if ($SKC == "UI/UX Design") echo "selected"; ?>>UI/UX Design</option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td class="lrnReg-table-input">
                <input type="submit" id="btnCourseCreate" name="submit" value="Update">
            </td>
        </tr>
    </table>
</form>





<!------------------------------(mekata yata kotasa wenas karanna yanna epa)-------------------------------------->
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
						<li><a href="support.html">Help & Support</a></li>
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

<?php

if(isset($_POST['submit'])){
    $Cid = $_POST['Cid'];
    $Cname = $_POST['Cname'];
    $SKC = $_POST['SKC'];

    $sql = "UPDATE course SET CourseId='$Cid', CourseName='$Cname', Skill_Category='$SKC' where SeqId = '$id'";


    $result = mysqli_query($conn, $sql);
    if($result){

        echo '<script type="text/javascript">
            window.onload = function () { alert("Account Updated !"); 
            window.location.href = "lec_dashboard_display.php";}
            </script>';
            return;
            exit();

    }
}

?>
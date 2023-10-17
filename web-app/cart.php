<!DOCTYPE HTML>
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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

	
	<!-- external page link -->
	<link rel="stylesheet" type="text/css" href="style\cartStyles.css">
	<script src="js\mainscript.js"></script>

</head>
 
<body>
	<header>
		<img class="header-logo" src="images/website_logo.png" alt="Teacher_Trainer_Icon">
		<nav class="header-nav">
			<ul class="nav-links">
				<li><a href="home.php">Home</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="support_form-out.php">Support</a></li>
				<li><a href="about-out.php">About</a></li>	
				<li><a href="faq-out.php">FAQ</a></li>					
			</ul>
		</nav>
		<div class="header-btns">
		<a href="cart.php"><button id="btnCart" class="header-btn">Cart</button></a>
		<a href="login.php"><button id="btnLog" class="header-btn">Login</button></a>
		<a href="learner_register.php"><button id="btnReg" class="header-btn">Register</button></a>
		</div>
	</header>	

	<div class="sample-content">
        <h2>Cart Page</h2>
        <div class="shopping">
            <img src="images/shopping.svg">
            <span class="quantity">0</span>
        </div>
    </div>

    <div class="list">
        <!-- Your product items go here -->
    </div>

    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
            <!-- Shopping cart items go here -->
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <script src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="style\cart.css">
	
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
						<li><a href="terms-out.php">Terms & Conditions</a></li>
						<li><a href="support_form-out.php">Help & Support</a></li>
						<li><a href="privacy-out.php">Privacy Policy</a></li>
						<li><a href="faq-out.php">FAQs</a></li>
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
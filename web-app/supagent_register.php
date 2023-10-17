<?php 
	$conn = mysqli_connect('localhost','root','','onlineteachertrainer');
?>

<!DOCTYPE HTML>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>TT - Support Agent Registration</title> 
	
	<!-- google font & icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" text="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	<!-- external page link -->
	<link rel="stylesheet" type="text/css" href="style\mainStyle.css">
	<link rel="stylesheet" type="text/css" href="style\supARegStyle.css">
	
</head>
 
<body>
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
	
	<h3 class="lrnReg-title">Support Agent Registration</h3>
	
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
				
			</td			
		</tr>
		<tr>
			<td class="lrnReg-table-label">
				<p>Category :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Lec-Cat" required>
						<option selected hidden value="">Select your catgory</option>
						<option value="Finance">Finance</option>
						<option value="Technical">Technical</option>
						<option value="User-Accounts">User Accounts</option>
				</select>
			</td>
			<td class="lrnReg-table-label">
				
			</td>
			<td class="lrnReg-table-input">
				<input type="submit" id="btnLearnerReg" name="submit" value="Register">	
			</td>
		</tr>		
	</table>	
	</form>
	
	<?php include('footer-in.php'); ?>		
	
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
	$Category = $_POST['Lec-Cat'];		
	$Password = $_POST['Lec-PW'];
	$Type = 'SA';

	$checkSeqId = "SELECT * FROM `support_agent` ORDER BY SeqId DESC LIMIT 1";
	$checkSeqIdResult = mysqli_query($conn,$checkSeqId);
	$rowCount = mysqli_num_rows($checkSeqIdResult);

	if($rowCount > 0) {
		if($row = mysqli_fetch_assoc($checkSeqIdResult)) {
			$uId = $row['SupAgentId'];
			$get_numbers = str_replace("SA", "", $uId);
			$id_increase = $get_numbers + 1;
			$get_string = str_pad($id_increase, 5, 0, STR_PAD_LEFT);	
			$SupAgentId = "SA".$get_string;
			
			//data insert to learner
			$sql1 = "INSERT INTO support_agent(FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Category,Password,SupAgentId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Category','$Password','$SupAgentId')";

			if ($conn->query($sql1)) {
				
			}
			
			else {
				echo 'Error : '.$conn->error;
			}
		}
	}
		
	else {
		$SupAgentId = 'SA0000001';
		
		//data insert to learner
		$sql2 = "INSERT INTO support_agent(FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Category,Password,SupAgentId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Category','$Password','$SupAgentId')";

		if ($conn->query($sql2)) {
				echo '<script>alert("Support agent added successfully");</script>';
		}
			
		else {
			echo 'Error : '.$conn->error;
		}	
	}

	//data insert to learner
	$sql3 = "INSERT INTO login (Email,Password,Type,UserId) VALUES('$Email','$Password','$Type','$SupAgentId')";
		
	if ($conn->query($sql3)) {
			echo '<script>alert("Support agent added successfully");</script>';
		}
			
	else {
		echo 'Error login : '.$conn->error;
	}
}

$conn->close();

?>
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
	<title>TT - Learner Registration Form</title> 
	
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
	<?php include('header-out.php'); ?>  <!-- website header -->	
	
	<h3 class="lrnReg-title">Learner Registration Form</h3>
	
	<form method="POST">
	<table class="lrnReg-table" border=1>
		<tr>
			<td class="lrnReg-table-label">
				<p>First Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-FirstName" required>	
			</td>
			<td class="lrnReg-table-label">
				<p>Last Name :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-LastName" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 01:</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-AddL1" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Gender :</p>
			</td>
			<td class="lrnReg-table-input">
				<select name="Ler-Gender" required>
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
				<input type="text" name="Ler-AddL2" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Mobile :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-Mobile" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Address Line 03 :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-AddL3" required>
			</td>
			<td class="lrnReg-table-label">
				<p>Email :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="text" name="Ler-Email" required>
			</td>
		</tr>
		
		<tr>
			<td class="lrnReg-table-label">
				<p>Password :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Password" name="Ler-PW" required>							
			</td>
			<td class="lrnReg-table-label">
				<p>Date of Birth :</p>
			</td>
			<td class="lrnReg-table-input">
				<input type="Date" name="Ler-DOB" required>
				<input type="submit" id="btnLearnerReg" name="submit" value="Register">	
			</td>
			
		</tr>		
	</table>
	</form>
	
	<?php include('footer-out.php'); ?>	
	
</body> 
</html>



<?php 

if(isset($_POST['submit'])) {
	
	$FirstName = $_POST['Ler-FirstName'];
	$LastName = $_POST['Ler-LastName'];
	$Mobile = $_POST['Ler-Mobile'];
	$Email = $_POST['Ler-Email'];
	$AddressLine1 = $_POST['Ler-AddL1'];
	$AddressLine2 = $_POST['Ler-AddL2'];
	$AddressLine3 = $_POST['Ler-AddL3'];
	$DOB = $_POST['Ler-DOB'];
	$Gender = $_POST['Ler-Gender'];
	$Password = $_POST['Ler-PW'];
	$Type = 'LRN';

	$checkSeqId = "SELECT * FROM `support_form` ORDER BY SeqId DESC LIMIT 1";
	$checkSeqIdResult = mysqli_query($conn,$checkSeqId);
	$rowCount = mysqli_num_rows($checkSeqIdResult);

	if($rowCount > 0) {
		if($row = mysqli_fetch_assoc($checkSeqIdResult)) {
			$uId = $row['StudentId'];
			$get_numbers = str_replace("SID", "", $uId);
			$id_increase = $get_numbers + 1;
			$get_string = str_pad($id_increase, 6, 0, STR_PAD_LEFT);	
			$StudentId = "SID".$get_string;
			
			//data insert to learner
			$sql1 = "INSERT INTO learner(FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Password,StudentId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Password','$StudentId')";

			if ($conn->query($sql1)) {
			}
			
			else {
				echo "Error : ".$conn->error;
			}
		}
	}
		
	else {
		$StudentId = 'SID000001';
		
		//data insert to learner
		$sql2 = "INSERT INTO learner (FirstName,LastName,Mobile,Email,AddressLine1,AddressLine2,AddressLine3,DOB,Gender,Password,StudentId) VALUES('$FirstName','$LastName','$Mobile','$Email','$AddressLine1','$AddressLine2','$AddressLine3','$DOB ','$Gender','$Password','$StudentId')";
		
		if ($conn->query($sql2)) {
				echo '<script>alert("Add to learner successfully");</script>';
		}
			
		else {
			echo "Error : ".$conn->error;
		}
	}

	//data insert to learner
	$sql3 = "INSERT INTO login (Email,Password,Type,UserId) VALUES('$Email','$Password','$Type','$StudentId')";
		
	if ($conn->query($sql3)) {
			echo '<script> alert("You have successfully registered...");</script>';
		}
			
	else {
		echo "Error login : ".$conn->error;
	}
}

$conn->close();

?>
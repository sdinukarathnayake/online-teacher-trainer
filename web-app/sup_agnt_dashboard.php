<?php $db = mysqli_connect('localhost','root','','onlineteachertrainer'); ?>

<!DOCTYPE HTML>
<html lang="en">
 
<head>
	<!-- webpage data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/website_icon.ico">
	<title>TT - </title> 
	
	<!-- google font & icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" text="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	<!-- external page link -->
	<link rel="stylesheet" type="text/css" href="style/mainStyle.css">
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
	<a href="sup_agent_userprofile.php"><button id="btnLog" class="header-btn">My Account</button></a>
	<a href="logout.php"><button id="btnReg" class="header-btn">Logout</button></a>
		</div>
	</header>	
	
	<h2 class="saDash-title">Support Agent Dashboard</h2>
	<hr class="saDash-divid">

	<h3 class="saDash-subtitle">User Support Tickets</h3>
	
	<table class="saDash-table" border="1">
		<tr>
			<th style="width:6%;">TicketId</th>
			<th style="width:17%;">Name</th>
			<th style="width:14%;">Email</th>
			<th style="width:8%;">Mobile</th> 	
			<th style="width:7%;">Request</th>
			<th style="width:24%;">Message</th>
			<th style="width:6%;">Status</th>
			<th style="width:18%;">Operations</th>
		</tr>
		
		<?php
			$qry = "SELECT * FROM support_form";
			$run = $db -> query($qry);
			if($run -> num_rows > 0)
			{
				while($row = $run -> fetch_assoc())
				{
					$id = $row['SeqId'];
		?>	
			<tr>
				<td style="text-align:center;"><?php echo $row['SupFormId'] ?></td>
				<td><?php echo $row['Name'] ?></td>
				<td style="text-align:center;"><?php echo $row['Email'] ?></td>
				<td style="text-align:center;"><?php echo $row['Mobile'] ?></td>
				<td style="text-align:center;"><?php echo $row['ReqType'] ?></td>
				<td><?php echo $row['Message'] ?></td>
				<td style="text-align:center;"><?php echo $row['Status'];?></td>
				
				
				<td class="saDash-Operations">
					<div class="saDash-buttons">
					<a href="change_status.php?id=<?php echo $id ?>"><button id="saDash-changeStatus"> Change Status </button> </a>
					<a href="sup_delete.php?id=<?php echo $id ?>" onClick="return confirm('Are you sure?')"><button id="saDash-delete"> Delete </button> </a>
					</div>	
				</td>
			</tr>
		<?php
				}	
			}
		?>
	</table>
	
	<p class="saDash-p">After contacting the user via email or phone, change status of the ticket using change status button.</p>
	
	<?php include('footer-in.php'); ?>		
</body>
</html>








<?Php
session_start();
include("include/db.php");
$id =  $_SESSION['id'];
echo $id;

$Select = "SELECT * FROM profile WHERE id = $id ";

$Query = mysqli_query($connect, $Select);

$Fetch = mysqli_fetch_array($Query);
	$Id =  $Fetch['id'];
	$Name = $Fetch['name'];
	$Email = $Fetch['email'];
	$MobileNumber = $Fetch['mobile_number'];
 	$MediHistory = $Fetch['medhistory'];
 	$Birthdate = $Fetch['birthdate'];
 	$Bloodgroup = $Fetch['bloodgroup'];
 	$Sex = $Fetch['sex'];
 	$Allergies = $Fetch['allergies'];
 	$Address1 = $Fetch['address1'];
 	$Address2 = $Fetch['address2'];
 	$Country = $Fetch['country'];
 	$Hobbies = $Fetch['hobbies'];




?>


<?php include("header.php"); ?>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<h1 style="text-align: center;">View My Profile</h1>
	<div style="margin-left: 650px;">
		<a class="btn btn-primary" href="logout.php"role="button">Logout</a>
	</div>
	
	<table class="table"  style="margin-top: 20px">
		<thead class="thead-light">
		<tr>
			<th th scope="row">ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Medical History</th>
			<th>Birthdate</th>
			<th>Blood Group</th>
			<th>Sex</th>
			<th>Allergies</th>
			<th>Address1</th>
			<th>Address2</th>
			<th>Country</th>
			<th>Hobbies</th>
		</tr>
	 </thead>	


		<tr style="text-align: center;">
			<td><?php   echo $Id; ?></td>
			<td><?php   echo $Name; ?></td>
			<td><?php   echo $Email; ?></td>
			<td><?php   echo $MobileNumber; ?></td>
			<td><?php   echo $MediHistory; ?></td>
			<td><?php   echo $Birthdate; ?></td>
			<td><?php   echo $Bloodgroup; ?></td>
			<td><?php   echo $Sex; ?></td>
			<td><?php   echo $Allergies; ?></td>
			<td><?php   echo $Address1; ?></td>
			<td><?php   echo $Address2; ?></td>
			<td><?php   echo $Country; ?></td>
			<td><?php   echo $Hobbies; ?></td>
			
		</tr>

	</table>



	<div style="margin-left: 600px;">
		<a class="btn btn-primary" href="update.php" role="button">Update Your Record</a>
	</div>

</body>
</html>
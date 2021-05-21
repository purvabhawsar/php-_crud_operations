<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");
session_start();

$x=$_SESSION["id"];

$que="SELECT * FROM user_tbl WHERE id='$x'";
$obj=mysqli_query($con,$que);
$data=mysqli_fetch_assoc($obj);
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style type="text/css">

		
		.container
		{
			height: 300px;
			width: 600px;
		}
	</style>
</head>
<body>
	<div class="container">

		<center><h2 class="p-3">Profile</h2></center>
		<table class="table table-striped p-5 text-center">
			<tr><td>Username</td><td><?php echo $data["username"];?></td></tr>
			<tr><td>Address</td><td><?php echo $data["address"];?></td></tr>
			<tr><td>City</td><td><?php echo $data["city"];?></td></tr></table>
			<table class="table text-center">
				<tr><td><a href="edit_profile.php?eid=<?php echo $data['id']; ?>" role="button" class="btn btn-info">Edit</a></td>
					<td><a href="del_profile.php?pid=<?php echo $data['id']; ?>" role="button" class="btn btn-danger">Delete</a></td></tr>
					
				</table>
				
				
			</div>
		</body>
		</html>
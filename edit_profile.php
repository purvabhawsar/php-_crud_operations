<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");
session_start();
$x=$_GET["eid"];
$que="SELECT * FROM user_tbl WHERE id='$x'";
$obj=mysqli_query($con,$que);
$data=mysqli_fetch_assoc($obj);


?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.container{
			height: 400px;
			width: 400px;
			border: 1px solid green;
			margin: auto;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="update_profile.php" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name="eid" value="<?php echo $x;?>">

			<h3 class="m-5"><center>Update and Edit</center></h3>
			<div class="form-group">
				<input type="text" value="<?php echo $data["username"];?>" name="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="text"value="<?php echo $data["address"];?>" name="address" class="form-control">
			</div>
			<div class="form-group">
				<input type="text"value="<?php echo $data["city"];?>" name="city" class="form-control">
			</div>
			<center><button class="btn btn-success">Update</button></center>
		</form>

	</div>
	
</body>
</html>
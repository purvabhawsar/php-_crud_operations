<?php
session_start();

?>

<html>
<head><title>upload image</title></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	.box{
		height: 90px;
		width: 90px;
		background-color: white;

		margin: 20px;
	}
</style>
<body>
	
	<div class="container">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<h2 class="text-center m-3">UPLOAD IMAGE</h2>
			<center>select Image -><input type="file" name="picture" class="text-center m-3"></center>
			
			<center><div class="box box-primary"><img src="<?php echo $_SESSION["user_name6"];?>" height="90px" width="90px"></div></center>
			<center><input type="submit" value="submit"  role="button" class="btn btn-danger"></center>
		</form>
	</div>
</body>
</html>
<?php

session_start();



?>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<style type="text/css">
    .container{
    	height: 380px;
    	width: 300px;
    	border: 1px solid green;
    	margin: auto;
    	margin-top: 50px;
    }
    .error_tr{
    	font-size: 20px !important;
    	color: red !important;
    }
	</style>
	<body>
		<div class="container ">
		<form action="log.php" method="post">
		<h2 class="text-center m-5">Login</h2>
			<div class="form-group">
			<input type="text" class="form-control text-center" name="username" placeholder="Username"
			value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
				
			</div>
			<div class="form-group">
				<table><tr class="error_tr">
		<td></td>
		<td>
		<?php
		if(isset($_SESSION['username-msg']))
		{
			echo $_SESSION['username-msg'];
			unset($_SESSION['username-msg']);
		}	?>
		</td></tr></table>
		
			</div>
			<div class="form-group">
				<input type="password" name="password"class="form-control text-center" placeholder="Password"
				value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
			</div>

				<div class="form-group">
				<table><tr class="error_tr">
		<td></td>
		<td>
		<?php
		if(isset($_SESSION['password-msg']))
		{
			echo $_SESSION['password-msg'];
			unset($_SESSION['password-msg']);
		}	?>
		</td></tr></table>
		
			</div>

			<div class="form-group">
				<h6>Remember me   <input type="checkbox" id="remember" name="remember"></h6>
			</div>
			<div class="form-group">
				<center><input type="submit" class="btn btn-primary" value="login"></center>
			</div>
			</form>
			
		</div>
	</body>
</html>
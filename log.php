<?php

print_r($_POST);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");
session_start();

$u=$_POST["username"];
$p=$_POST["password"];

$que="SELECT * FROM user_tbl WHERE username='$u'";

$obj=mysqli_query($con,$que);

if (mysqli_num_rows($obj)==1) 
{
	$data=mysqli_fetch_assoc($obj);
	if ($data["password"]==$p)

		
	{
		$_SESSION["name"]=$data["username"];
		$_SESSION["id"]=$data["id"];
		$_SESSION["user_logged_in"] =true;


		header('location:dashboard.php');
	}
	

	else
	{
		$_SESSION['password-msg']="Invalid password!";
		header('location:login.php');

	}
}
else 
{
	$_SESSION['username-msg']="Invalid Username!";
	header('location:login.php');

}

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}









?>
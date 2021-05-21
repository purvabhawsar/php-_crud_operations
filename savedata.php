<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");

$a=$_POST["username"];
$b=$_POST["password"];
$c=$_POST["cpassword"];
$d=$_POST["address"];
$e=$_POST["city"];
$f=$_POST["gender"];

$que="INSERT INTO user_tbl(username,password,confirm_password,address,city,gender)VALUES('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$que);
header("location:login.php");
?>
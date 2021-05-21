<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");
session_start();

$a=$_POST["username"];
echo "$a";
$b=$_POST["address"];
echo "$b";
$c=$_POST["city"];
echo "$c";

$x=$_POST["eid"];
echo "$x";
$que="UPDATE user_tbl SET username='$a', address='$b', city='$c' WHERE id=$x";
mysqli_query($con,$que);
header('location:dashboard.php');




?>
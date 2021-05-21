<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");
$a=$_GET['pid'];
$que="DELETE FROM user_tbl WHERE id=$a";
mysqli_query($con,$que);
header('location:form.php');
?>

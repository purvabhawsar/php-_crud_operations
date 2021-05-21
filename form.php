<html>
<head><title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		.container{
			height: 600px;
			width: 900px;
			border:1px solid green;
			margin-top: 50px;
		}
		.error_msg td{
			height: 12px !important;
			font-size: 15px !important;
			color: red !important;
		}
		


	</style>



	<script type="text/javascript">
		
		$(document).ready(function(){
			$("#submit").click(function(){
				
				var a=$("#username").val();
				var b=$("#password").val();
				var c=$("#cpassword").val();
				var d=$("#address").val();
				var e=$("#city").val();
				

		//	var h=$("#male").is(":checked");
			// var i=$("#female").is(":checked");
			var check=true;

			if (a=="") {
				$("#username_msg").html("Enter Username  ");
				check = false;
			}
			else{
				$("#username_msg").html("");
			}
			if (b=="") {
				$("#password_msg").html("Enter your password");
				check = false;
			}
			else
			{
				$("#password_msg").html('');
			}

			if (c!=b) {
				$("#cpassword_msg").html("enter your correct password ");
				check = false;
			}
			else
			{
				$("cpassword_msg").html("");
			}

			if (d=="") {
				$("#address_msg").html("enter your address ");
				check = false;

			}
			else
			{
				$("#address_msg").html("");
			}

			if (e=="") {
				$("#city_msg").html("enter your city ");
				check = false;
			}
			else{
				$("#city_msg").html("");
			}
			

		 //if (h==false & i==false) {
		 	//$("#gender_msg").html("enter your gender");
		 //	check = false;
		// }
		return check;
	});
});	

</script>


</head>
<body>
	<div class="container">
		<h3 class="text-center m-3">FORM</h3>
		<form class="form-horizontal" action="savedata.php" method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control"placeholder="Enter User Name" id="username" />
			</div>
			<div class="form-group">
				<table><tr class="error_msg">
					<td></td>
					<td id="username_msg"></td>
				</tr>
			</table>
		</div>


		<div class="form-group">

			<input type="password" name="password" class="form-control" placeholder="Enter your Password" id="password" />
			
			
		</div>
		<div class="form-group">
			<table><tr class="error_msg">
				<td></td>
				<td id="password_msg"></td>
			</tr>
		</table>
	</div>
	

	<div class="form-group">
		<input type="password" name="cpassword" class="form-control" placeholder="Enter your Match Password" id="cpassword" />
	</div>

	<div class="form-group">
		<table><tr class="error_msg">
			<td></td>
			<td id="cpassword_msg"></td>
		</tr>
	</table>
</div>

<div class="form-group">
	<input type="textarea" name="address" class="form-control" placeholder="Enter your Address" id="address" />
	
</div>
<div class="form-group">
	<table><tr class="error_msg">
		<td></td>
		<td id="address_msg"></td>
	</tr>
</table>
</div>

<div class="form-group">
	<select name="city" class="display-block form-control" id="city" >
		<option>Select Your City</option>
		<option>indore</option>
		<option>Bhopal</option>
		<option>Barwani </option></select>
		
	</div>

	<div class="form-group">
		<table><tr class="error_msg">
			<td></td>
			<td id="city_msg"></td>
		</tr>
	</table>
</div>

<div class="form-group">
	<h6>Select Gender - 
		Male <input type="radio" name="gender" checked="checked" id="gender" /> Female <input type="radio" name="gender" checked="checked"  id="" />
	</h6>
	
</div>
<div class="form-group">
	<table><tr class="error_msg">
		<td></td>
		<td id="gender_msg"></td>
	</tr>
</table>
</div>

<div class="form-group">
	<center><input type="submit" name="" id="submit" value="Submit" class="btn btn-success" id="submit" role="button"></center>
</div>
</form>


</div>
</body>
</html>
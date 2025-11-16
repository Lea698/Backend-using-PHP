<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>document</title>
</head>
<body>
	<center>
	<div class="form">
		<form action="" method="POST">
			<label for=""><b>Enter fullname</b></label><br><br>
			<input type="text" name="Names" value="" placeholder="Enter username"><br><br>
			<label for=""><b>Enter your email</b></label><br><br>
			<input type="text" name="Email" value="" placeholder="Enter your email"><br><br>
			<label for=""><b>Enter your password</b></label><br><br>
			<input type="text" name="Password" value="" placeholder="Enter your password"><br><br>
			<label for=""><b>Enter the date</b></label><br><br>
			<input type="date" name="Date" value="" placeholder="Enter the date"><br><br>
			Choose Account:<select name="Account">
				<option value="">====Choose users====</option>
				<option  value="Admin">ADMIN</option>
				<option  value="Standard">STANDARD</option>
				<option  value="Accountant">ACCOUNTANT</option>
			</select>
			<button type="submit" name="sub"><b>Signup</b></button>
			
		</form>
	</div>
</center>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['sub'])) {
 	$a=$_POST['Names'];
 	$b=$_POST['Email'];
 	$c=$_POST['Password'];
 	$d=$_POST['Date'];
 	$e=$_POST['Account'];
 	$insert=mysqli_query($conn,"INSERT INTO user VALUES('','$a','$b','$c','$d','$e')");
 	if ($insert) {
 		echo "<script>
 		alert('successfully');
 		</script>";
 		header("location:login.php");
 	}
 	else{
 		echo "<script>
 		alert('not signup');
 		</script>";
 		header("location:signup.php.php");
 	}
 } 
 ?>
 <style>
 	.form{
 		background-color: green;
 		border-radius: 0.5cm;
 		height: 10cm;
 		width: 9cm;

 	}
 </style>
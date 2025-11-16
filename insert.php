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
			<label for=""><b>Enter firstname</b></label><br><br>
			<input type="text" name="firstname" value="" placeholder="Enter firstname"><br><br>
			<label for=""><b>Enter lastname</b></label><br><br>
			<input type="text" name="lastname" value="" placeholder="Enter lastname"><br><br>
			<label for=""><b>Enter your email</b></label><br><br>
			<input type="text" name="email" value="" placeholder="Enter your email"><br><br>
			<label for=""><b>Enter position</b></label><br><br>
			<select name="position" id="">
				<option value="manager">Manager</option>
				<option value="accountant">Accountant</option>
				<option value="admin">Admin</option>
				<option value="Standard">Standard</option>
				
			</select><br><br>
			<label for=""><b>Enter the date</b></label><br><br>
			<input type="date" name="date" value="" placeholder="Enter your date"><br><br>
			<label for=""><b>Enter your salary</b></label><br><br>
			<input type="number" name="salary" value="" placeholder="Enter your salary"><br><br>
			Choose Account:<select name="Account">
				<option value="">====Choose users====</option>
				<option  value="Admin">ADMIN</option>
				<option  value="Standard">STANDARD</option>
				<option  value="Accountant">ACCOUNTANT</option>
			</select><br><br>
			<button type="submit" name="sub"><b>Signup</b></button>
			
		</form>
	</div>
</center>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['sub'])) {
 	$a=$_POST['firstname'];
 	$b=$_POST['lastname'];
 	$c=$_POST['email'];
 	$d=$_POST['position'];
 	$e=$_POST['date'];
 	$f=$_POST['salary'];

 	$insert=mysqli_query($conn,"INSERT INTO employee VALUES('','$a','$b','$c','$d','$e','$f')");
 	if ($insert) {
 		echo "<script>
 		alert('inserted successfully');
 		window.location.href='display.php';
 		</script>";
 		
 	}
 	else{
 		echo "<script>
 		alert('not inserted');
 		window.location.href='display.php';
 		</script>";
 		
 	}
 } 
 ?>
 <style>
 	.form{
 		background-color: limegreen;
 		border-radius: 0.5cm;
 		height: 14cm;
 		width: 9cm;

 	}
 </style>
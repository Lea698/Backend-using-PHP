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
			<label for=""><b>Enter your email</b></label><br><br>
			<input type="text" name="Email" value="" placeholder="Enter your email"><br><br>
			<label for=""><b>Enter your password</b></label><br><br>
			<input type="text" name="Password" value="" placeholder="Enter your password"><br><br>
			<button type="submit" name="sub"><b>LOGIN</b></button>
			
		</form>
	</div>
</center>

</body>
</html>
<?php 
include('conn.php');
session_start();
if (isset($_POST['sub'])) {
	$a=$_POST['Email'];
	$b=$_POST['Password'];
	$select=mysqli_query($conn,"SELECT * FROM user WHERE Email='$a' AND Password='$b'");
	if ($row=mysqli_num_rows($select)>0) {
		$_SESSION['Email']=$a;
		$_SESSION['Password']=$b;
		echo "<script>
		alert('login successfully');
		</script>
		";
		header("location:dashboard.php");
	} else{
		echo "<script>
		alert('There is no account registered');
		</script>
		";
	}


	
}
 ?>
 <style>
 	.form{
 		background-color: green;
 		height: 5cm;
 		width: 6cm;
 		border-radius: 1cm;
 	}
 </style>
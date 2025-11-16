<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1><font><b><br>&nbsp;EMPLOYEE MANAGEMENT</b></font></h1>
		<button class="but"><b><font size="5"><a href="adminlogin.php" style="text-decoration: none;">ADMIN</a></font></b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <button class="but"><b><font size="5"><a href="accountant.php" style="text-decoration: none;">ACCOUNTANT</a></font></b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <button class="but"><b><font size="5"><a href="aboutus.php" style="text-decoration: none;">ABOUT US</a></font></b></button>
		
		<?php
		session_start();
		include('conn.php');
		if (isset($_SESSION['Email'])) {
			echo "You are logged in as ".$_SESSION['Email'];

			}
			else{
				echo "There is no session created";
			}
		  ?>
	</div>

</body>
</html>
<style>
	.header{
		background: green;
		height: 3cm;
		width: 100%;
		box-shadow: 5px 4px 5px grey;
	}
	.but{
		background-color: whitesmoke;
		height: 1.5cm;
		width: 4.7cm;
		margin-top: -1.4cm;
		margin-right: 1.3cm;
		justify-content: space-between;
		float: right;
		color: white;
		box-shadow: 1px 1px 1px red;
		border-radius: 1cm;

	}
	.but:hover{
		background: yellow;
		border-radius: 1cm;
	}
</style>
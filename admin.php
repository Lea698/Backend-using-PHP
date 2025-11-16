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
		<h1><font><b><br>&nbsp;EMPLOYEE MANAGEMENT ADMINISTRATOR</b></font></h1>
		<button class="but"><b><font size="5"><a href="insert.php" style="text-decoration: none;">+Add New</a></font></b></button>
         <button class="but"><b><font size="5"><a href="display.php" style="text-decoration: none;">View status</a></font></b></button>
         </div>
         <div class="footer">
         <button class="log"><b><font size="5"><a href="logout.php" style="text-decoration: none;">Logout</a></font></b></button>
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
		width: 5cm;
		margin-top: -1.4cm;
		margin-right: 1cm;
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
	.footer{
		background-color: green;
		margin-top: 10cm;
		height: 2cm;
		width: 100%;
		background: seagreen;
			}
			.log{
				margin-top: 0.5cm;
				float: right;
				border-radius: 1cm;
				box-shadow: 1px 1px 1px red;
				margin-right: 1cm;
				height: 1cm;
				width: 4cm;
			}
			.log:hover{
				background: yellow;
			}

</style>
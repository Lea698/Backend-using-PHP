<?php
include('conn.php');
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM employee WHERE id=$id");
$row=mysqli_fetch_array($select)
?>
	<center>
	<div class="form">
		<form action="" method="POST">
			<label for=""><b>Enter firstname</b></label><br><br>
			<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Enter firstname"><br><br>
			<label for=""><b>Enter lastname</b></label><br><br>
			<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Enter lastname"><br><br>
			<label for=""><b>Enter your email</b></label><br><br>
			<input type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter your email"><br><br>
			<label for=""><b>Enter position</b></label><br><br>
			<select name="position" value="<?php echo $row['position']; ?>">
				<option value="manager">Manager</option>
				<option value="accountant">Accountant</option>
				<option value="admin">Admin</option>
				<option value="Standard">Standard</option>
				
			</select><br><br>
			<label for=""><b>Enter the date</b></label><br><br>
			<input type="date" name="date" value="<?php echo $row['date']; ?>" placeholder="Enter your date"><br><br>
			<label for=""><b>Enter your salary</b></label><br><br>
			<input type="number" name="salary" value="<?php echo $row['salary']; ?>" placeholder="Enter your salary"><br><br>
			<button type="submit" name="sub"><b>Update</b></button>
			
		</form>
	</div>
</center>
<?php
if (isset($_POST['sub'])) {
	$a=$_POST['firstname'];
	$b=$_POST['lastname'];
	$c=$_POST['email'];
	$d=$_POST['position'];
	$e=$_POST['date'];
	$f=$_POST['salary'];
	$update=mysqli_query($conn,"UPDATE employee SET firstname='$a',lastname='$b',email='$c',position='$d',date='$e',salary='$f' WHERE id=$id");

	if ($update) {
		echo "<script>
		alert('updated successfully');
		window.location.href='display.php';
		</script>
		";
	}
	else{
		echo "<script>
		alert('not updated');
		window.location.href='display.php';
		";
	}
}

?>
<style>
	.form{
		background-color: seagreen;
		border-radius: 1cm;
		width: 8cm;
		height: 13cm;
	}
</style>
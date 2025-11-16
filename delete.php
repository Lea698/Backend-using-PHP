<?php
include('conn.php');
$s_id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM employee WHERE id=$s_id");
if ($delete) {
	echo "<script>
	alert('deleted successfully');
	window.location.href='display.php';
	</script>
	";
}
else{
	echo "<script>
	alert('not deleted');
	window.location.href='delete.php';
	</script>
	";
 }
 ?>

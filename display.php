<?php
include('conn.php');

echo "<table border='1' cellspacing='0' cellpadding='12' >
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>position</th>
<th>date</th>
<th>salary</th>
<th colspan='2'>Action</th>
</tr>

";
$select=mysqli_query($conn,"SELECT * FROM employee");
while($row=mysqli_fetch_array($select)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['firstname']."</td>";
	echo "<td>".$row['lastname']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['position']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['salary']."</td>";
	echo"<td> <a href='update.php?id=".$row['id']."'><button>update</button></a></td>";
    echo"<td> <a href='delete.php?id=".$row['id']."'><button>delete</button></a></td>";
	echo "</tr>";
 }
echo "</table>";
 ?>
 <style>
 	table{
 		background-color: darkgreen;

 	}
 	
 </style>


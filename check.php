<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'crud');



$c = "SELECT id,name, location, destination FROM shipping ORDER BY id DESC";
$query = mysqli_query($con,$c);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<a href="adminpanel.php">Add New Data</a><br>
<a href= "">Admin Panel</a>

<table width= '80%' List>
<tr bgcolor = '#CCCCCC'>
<td>Name</td>
<td>Location</td>
<td>Destination</td>
<td>VIEW</td>
<td>UPDATE</td>
<td>DELETE</td>
</tr>

<?php

while($res = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$res['name']."</td>";
	echo "<td>".$res['location']."</td>";
	echo "<td>".$res['destination']."</td>";
	

	echo "<td> <a href=\"view.php?id=$res[id]\">view</a> | <a
	href=\"edit.php?id=$res[id]\">Edit</a> | <a
	href=\"delete.php?id=$res[id]\" onclick=\"return confirm('Are you want to delete?')\">Delete</a> </td>";
	 
}

?>
</table>



</body>
</html>
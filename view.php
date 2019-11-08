<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'crud');

$id = $_GET['id'];

$c = "SELECT * FROM shipping  WHERE id=$id ";
$query = mysqli_query($con,$c);

?>
<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<a href="">Add New Data</a><br>
<a href= "">Admin Panel</a>

<table width= '80%' List>
<tr bgcolor = '#CCCCCC'>
<td>Name</td>
<td>Location</td>
<td>Destination</td>
<td>Product-type</td>
<td>Product</td>
<td>Shipment</td>
</tr>

<?php

while($res = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$res['name']."</td>";
	echo "<td>".$res['location']."</td>";
	echo "<td>".$res['destination']."</td>";
	echo "<td>".$res['producttype']."</td>";
	echo "<td>".$res['product']."</td>";
	echo "<td>".$res['shipment']."</td>";
}

?>
</table>



</body>
</html>
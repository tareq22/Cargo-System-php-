<?php
include 'connect.php';

if(isset($_POST['done'])){
	$name = $_POST['name'];
	$location = $_POST['location'];
	$destination = $_POST['destination'];
	$producttype = $_POST['producttype'];
	$product = $_POST['product'];
	$shipment = $_POST['shipment'];
	$q = "INSERT INTO `shipping`(`id`, `name`, `location`, `destination`, `producttype`, `product`, `shipment`) VALUES ('$name, $location, $destination, $producttype, $product, $shipment')";
$query = mysqli_query($con, $q);
if($query){
	echo "Data entry succesful";
}
else{
	echo "Not succesful"; 
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style>
		body{
			background-image: url("express.jpg");
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel = "stylesheet" type= "text/css"
	href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	
<div class="row justify-content-center">
<form action="adminpanel.php" method="POST">
	<div class="form-group">
	<label>Name            </label>
	<input type="text" name="name" class = "form-control">
</div>
<div class="form-group">
	<label>Location        </label>
	<input type="text" name="location" class="form-control" >
	</div>
	<div class="form-group">
	<label>Destination     </label>
	<input type="text" name="destination" class="form-control" >
	</div>
	<div class="form-group">
	<label>Product-Type    </label>
	<input type="text" name="producttype" class="form-control">
	</div>
	<div class="form-group">
	<label>Product         </label>
	<input type="text" name="product" class= "form-control">
	</div>
	<div class="form-group">
	<label>Shipments        </label>
	<input type="date" name="shipment" value="Select shipment" class="form-control">
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary" name="done">Proceed</button>
</div>
</form>



</body>
</html>
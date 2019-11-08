<?php

include 'connect.php';
?>
<?php
if(isset($_POST['Done'])){

	$id=$_POST['id'];
$name=$_POST['Name'];
$location=$_POST['Location'];
$destination=$_POST['Destination'];
$producttype=$_POST['Producttype'];
$product=$_POST['Product'];
$shipment=$_POST['Shipment'];
$update="update shipping SET name='$name',location='$location',destination='$destination',producttype='$producttype',product='$product',
shipment='$shipment' WHERE id=$id";
$res=mysqli_query($con,$update);
if($res){
	echo "updated successfully";
header("location:check.php");

}
else{
	echo "unsuccessfull";
}

}

?>
<?php

$id=$_GET['id'];

$result=mysqli_query($con, "SELECT * FROM shipping WHERE id=$id");

	while($res =mysqli_fetch_array($result)){
		$Name=$res['name'];
		$Location=$res['location'];
		$Destination=$res['destination'];
		$Producttype=$res['producttype'];
		$Product=$res['product'];
		$Shipment=$res['shipment'];

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
<form action="edit.php" method="POST">
	<div class="form-group">
	<label>Name            </label>
	<input type="text" name="Name"  class = "form-control" value=<?php echo $Name?>>
</div>
<div class="form-group">
	<label>Location        </label>
	<input type="text" name="Location" class="form-control" value=<?php echo $Location?>>
	</div>
	<div class="form-group">
	<label>Destination     </label>
	<input type="text" name="Destination" class="form-control" value=<?php echo $Destination?> >
	</div>
	<div class="form-group">
	<label>Product-Type    </label>
	<input type="text" name="Producttype" class="form-control" value=<?php echo $Producttype?>>
	</div>
	<div class="form-group">
	<label>Product         </label>
	<input type="text" name="Product" class= "form-control" value=<?php echo $Product?>>
	</div>
	<div class="form-group">
	<label>Shipments        </label>
	<input type="date" name="Shipment"  class="form-control" value=<?php echo $Shipment?>>
	<input type="hidden" name="id" value=<?php echo $id ?>>
	<input type="submit" name="Done" value="Update"/>
	</div>
	<div class="form-group">
	<!-- <button type="submit" class="btn btn-primary" name="done">Proceed</button> -->
</div>
</form>



</body>
</html>






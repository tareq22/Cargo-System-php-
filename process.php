<?php


$mysqli = new mysqli('localhost', 'root' , 'mypass123', 'crud') or die(mysql_error($mysqli));


if(isset($_POST['save'])){
	$name = $_POST['name'];
	$location = $_POST['location'];
	$destination = $_POST['destination'];
	$protype = $_POST['protype'];
	$product = $_POST['product'];
	$date = $_POST['date'];

	$mysqli->query("INSERT INTO data (name, location, destination, protype, product, date) VALUES('$name, $location, $destination, $protype, $product, $date')") or die($mysqli->error);
}


?>
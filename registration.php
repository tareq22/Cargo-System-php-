<?php
session_start();
//header('location:index.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userloginregistration');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$number = $_POST['number'];



$s = " select * from user where name='$name'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	echo "username already taken";
}
else{
	$reg = " insert into user (name, email, password, country,number) values('$name', '$email', '$password', '$country', '$number')";

	mysqli_query($con, $reg);
	echo "Registration Successful";
	$_SESSION['msg'] = '<div class="message">Registration Successful</div>';
	header('location: index.php');
}


?>
<?php
include('connect.php');
?>
<?php
$id=$_GET['id'];
echo $id;
$delete="delete FROM shipping where id=$id ";
$res=mysqli_query($con,$delete);
if($res){
	echo "deleted successfully";
	header('location:check.php');
}
else{
	echo mysqli_error($con);
}



?>
<?php
include 'dbconnect.php';
	$id=$_GET['id'];


$qry="delete from registration where id=$id";
$result=mysqli_query($conn,$qry);
if($result){
echo "hi";exit;
	// echo "Sucessfully Deleted";
	header('location:dashboard.php');
}



?>
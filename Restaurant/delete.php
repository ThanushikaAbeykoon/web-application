<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `product` where name='$id'");
	header('location:addproduct.php');
?>
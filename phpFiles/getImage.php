<?php
	$id = $_GET['id'];
	
	require_once("includes/dbc.php");
	
	$sql = "SELECT `product_image` FROM `Product` WHERE `product_id`=$id";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	header("Content-type: image/jpeg");
	echo $row['product_image'];
  
	mysqli_close($con);
?>
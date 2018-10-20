<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
	
	$id = $_GET['id'];
	require_once("includes/dbc.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Williams Specialty Company</title>
    <!-- link to style sheet-->
    <link rel="stylesheet" type="text/css" href="products.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

	<?php
	if ($_SESSION['user']){
		include("includes/accnav.inc");
	}else{
		include("includes/nav.inc");
	}
	?>
	<br/>
	<div class="image">
		<label><strong>Products</strong></label>
	</div>	
    <br/><br/><hr />
	<?php
	
	//Performing SQL Query and displaying product.
	$sql = "SELECT * FROM `Product` WHERE `product_id`=$id";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$productIDList = $row['product_id'];
		$productImageList = $row['product_image'];
		$productNameList = $row['product_name'];
		$productTypeList = $row['product_type'];
		$productCategoryList = $row['product_category'];
		$productDescriptionList = $row['product_description'];
		$productPriceList = $row['product_price'];
		
		//Create table.
		print "<center><table width='100%'>\n";
		print "\t<tr><td></td><td></td></tr>\n";
		
		print "\t<tr>\n"; // new row
		print "\t\t<td>";
		print "<br/>";
		print "<img src='getImage.php?id=$id' width='500' height='500' />";
		print "<br/>";
		
		print "Name: $productNameList<br/>";
		print "Product Type: $productTypeList<br/>";
		print "Service Applicable: $productCategoryList<br/>";
		print "Product Description: $productDescriptionList<br/>";
		print "Product Price: $$productPriceList<br/>";
		print "\t\t</td>";
		
		print "\t\t<td>";
		print "HELLO WORLD!<br/>";
		print "(Quantity and Add To Cart goes here)";
		print "\t\t</td>";
		print "\t</tr>\n"; // new row
	}
	
	mysqli_close($con)
	?>

</body>
</html>
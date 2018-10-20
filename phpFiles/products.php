<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
	
	$cat = $_GET['cat'];
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
    <div id="category">
        <br/><center><u><h2>Shop by Category</h2></u><br/></center>
		
		<table align="center" width='30%'>
			<tr>
				<td align="center">
					<a href="products.php?cat=print" style="text-decoration:none; background-color:#909090; font-weight:bold; border:2px solid black; border-radius:25px;">&nbspPrinting&nbsp</a>
				</td>
				<td align="center">
					<a href="products.php?cat=engrave" style="text-decoration:none; background-color:#909090; font-weight:bold; border:2px solid black; border-radius:25px;">&nbspEngraving&nbsp</a>
				</td>
			</tr>
		</table>
		<br/>
    </div>
	<hr />
	<div>
	<?php
	
		//Connect to database.
		require_once("includes/dbc.php");
	
		// Performing SQL Query
		if($cat){
			if($cat == "print"){
				$query = "SELECT `product_id`, `product_name`, `product_category`, `product_price` FROM `Product` WHERE `product_category`='print'";
			}else{
				$query = "SELECT `product_id`, `product_name`, `product_category`, `product_price` FROM `Product` WHERE `product_category`='engrave'";
			}
		}else{
			$query = "SELECT `product_id`, `product_name`,`product_price` FROM `Product`";
		}
		if($result = mysqli_query($con,$query)){
			$productIDList = array();
			$productNameList = array();
			$productPriceList = array();
			if($cat){
				if($cat == "print"){
					$counter = 0;
				}else{
					$counter = 3;
				}
			}
			
			print "<center><table border='1' width='100%'>\n";
			print "\t<tr><td>Product Image</td><td>Product Name</td><td>Product Price</td></tr>\n";
			
			while($row = mysqli_fetch_assoc($result)){
				$counter++;
				$productIDList = $row['product_id'];
				$productNameList = $row['product_name'];
				$productPriceList = $row['product_price'];
				
				print "\t<tr>\n"; // new row
				print "\t\t<td><a href='getProduct.php?id=$counter'><img src='getImage.php?id=$productIDList' width='100' height='100' /></a></td><td><a href='getProduct.php?id=$counter'>$productNameList</a></td><td>$$productPriceList</td>\n"; //new column/field
				print "\t</tr>\n";
			}
			
			print "</table></center>\n";
		}

		// Free resultset
		mysqli_free_result($result);

		//Closing connection
		mysqli_close($con);
	?>
	</div>

</body>
</html>
<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
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
	
	<div class="image">
		<label><strong>Products</strong></label>
	</div>
			
<!-- Login class
<form action="" method="get" class="loginBox">
	<h2><strong>Login</strong></h2>
	<div class="login">
		<p id="text">Email Address:</p>
		<i class="far fa-user" id="icon"></i>
		<input id="loginLabel" type="email" name="email" id="email" required/>
		<p id="text">Password:</p>
		<i class="fas fa-lock" id="icon"></i>
		<input id="loginLabel"type="password" name="password" id="password" required>
		<input type="submit" value="Login" id="submit">
		<input type="submit" value="Sign Up" id="submit">
	</div>
</form>
</div>//-->
    <br/><br/><hr />
    <div>
        Shop by Category
    </div>

</body>
</html>
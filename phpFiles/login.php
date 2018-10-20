<?php
session_start();
if(isset($_POST['Submit_Login'])){
	$email = trim($_POST['email']);
	$pwd = trim($_POST['pwd']);
	include('includes/dbc.php');
	$sql = "SELECT * FROM Customer WHERE customer_email = '$email' AND customer_password = '$pwd'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result)==0){
		$msg = '<h2 style="color:red;">Wrong E-Mail and Password. Please try again.</h2>';
	}else{
		$_SESSION['user'] = $email;
		$msg = '<h2>Login Sucessful!</h2>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Williams Specialty Company</title>
    <!-- link to style sheet-->
    <link rel="stylesheet" type="text/css" href="index.css">
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
			
	<section>
		<h2>Login</h2>
		<?php
		if(isset($msg)){
			echo $msg."<br>";
		}
		?>
	<form method="post" name="form1" action="<?php $_SERVER['PHP_SELF']; ?>">
		<p>Email Address:<br> <input type="text" name="email"></p>
		<p>Password:<br> <input type="password" name="pwd"></p>
		<p><input type="submit" name="Submit_Login" value="Login"></p>
	</form>
	</section>

</div>

</body>
</html>

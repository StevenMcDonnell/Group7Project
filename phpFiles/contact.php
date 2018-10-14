<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
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
	
	<div class="image">
		<label><strong>Contact Us</strong></label>
	</div><br/><br/>

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

    <!-- Some points of intrest here-->
    <div class="info">
        <ul class="points">Contact Methods</ul>
        <li>Email: WSC_CustomerSupport@WSC.com</li>
        <li>Phone: 555-578-634</li>
        <li>Social Media: #WSC_Engraving</li>
    </div>

</body><!-- Link to javscript file. Must be at the bottom so page will load first-->
<script type="text/javascript" src="index.js"></script>
</html>
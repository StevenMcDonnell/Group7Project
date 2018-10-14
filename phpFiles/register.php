<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
	
if ($_SESSION['user']){
	header("Location:index.php");
}
if(isset($_POST['Register_Account'])){
	$firstName = $_POST['textFirstName'];
	$lastName = $_POST['textLastName'];
	$email = $_POST['textEmail'];
	$password = $_POST['textPassword'];
	$reenterPassword = $_POST['textReEnterPassword'];
	if($firstName=="") {
		$firstNameMsg = "<br><span style='color:red;'>Your first name cannot be blank.</span>";
	}
	if($lastName=="") {
		$lastNameMsg = "<br><span style='color:red;'>Your last name cannot be blank.</span>";
	}
	if($email=="") {
		$emailMsg = "<br><span style='color:red;'>Your email address cannot be blank.</span>";
	}
	if($password=="") {
		$passMsg = "<br><span style='color:red;'>Your password cannot be blank.</span>";
	}
	if($password!=$reenterPassword) {
		$passMsg = "<br><span style='color:red;'>Your passwords do not match.</span>";
	}
	else{
		include('includes/dbc.php');
		$query = "INSERT INTO Customer (customer_first_name, customer_last_name, customer_email, customer_password) VALUES ('$firstName', '$lastName', '$email', '$password')";
		$success = mysqli_query($con, $query);
		if($success){
			$inserted = "<span style='color:white;'><h2>Thanks!</h2><h3>Thank you for registering. You will receive an e-mail confirmation with the e-mail address given shortly.</h3>";
		}else{
			$error_message = mysqli_error($con);
			$inserted = "There was an error: $error_message";
			exit($inserted);
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
	<script type="text/javascript">
		function validateForm(){
			var firstName = document.form1.textFirstName.value;
			var lastName = document.form1.textLastName.value;
			var email = document.form1.textEmail.value;
			var password = document.form1.textPassword.value;
			var reEnterPassword = document.form1.textReEnterPassword.value;
			var nameMsg = document.getElementById('nameMsg');
			var phoneMsg = document.getElementById('phoneMsg');
			var emailMsg = document.getElementById('emailMsg');
			var passMsg = document.getElementById('passMsg');
			firstNameMsg.innerHTML = "";
			lastNameMsg.innerHTML = "";
			emailMsg.innerHTML = "";
			passMsg.innerHTML = "";
			if(firstName=="") {firstNameMsg.innerHTML = "Your first name cannot be blank."; return false;}
			if(lastName=="") {lastNameMsg.innerHTML = "Your last name cannot be blank."; return false;}
			if(email=="") {emailMsg.innerHTML = "Your email address cannot be blank."; return false;}
			if(password=="") {passMsg.innerHTML = "Your password cannot be blank."; return false;}
			if(password!=reEnterPassword) {passMsg.innerHTML = "Passwords do not match."; return false;}
		}
		function clearForm(){
			firstNameMsg.innerHTML = "";
			lastNameMsg.innerHTML = "";
			emailMsg.innerHTML = "";
			passMsg.innerHTML = "";
		}
	</script>
</head>
<body>

	<?php
	if ($_SESSION['user']){
		include("includes/accnav.inc");
	}else{
		include("includes/nav.inc");
	}
	?>

    <!--Registration begin here-->
    <div class="registerBox">
    <h1>Register</h1>
    <p>Please register for an Account</p>
	<?php if(isset($inserted)) {echo $inserted;} else { ?>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="form1" class="registerForm" onSubmit="return validateForm()">
         <p>First Name:</p>
         <input type="text" id="textFirstName" name="textFirstName">
		 <?php if(isset($firstNameMsg)){
			echo $firstNameMsg;
		}?>
		<br><span id="firstNameMsg" style="color:red"></span>
         <p>Last Name:</p>
         <input type="text" id="textLastName" name="textLastName">
		 <?php if(isset($lastNameMsg)){
			echo $lastNameMsg;
		}?>
		<br><span id="lastNameMsg" style="color:red"></span>
         <p>Email Address:</p>
         <input type="email" id="textEmail" name="textEmail">
		 <?php if(isset($emailMsg)){
			echo $emailMsg;
		}?>
		<br><span id="emailMsg" style="color:red"></span>
         <p>Password:</p>
         <input type="password" id="textPassword" name="textPassword">
		 <?php if(isset($passMsg)){
			echo $passMsg;
		}?>
		<br><span id="passMsg" style="color:red"></span>
         <p>Re-enter Your Password:</p>
         <input type="password" id="textReEnterPassword" name="textReEnterPassword"><br>
         <input type="submit" name="Register_Account" value="Submit" id="submit">
         <input type="reset" value="Clear" id="clear">
     </form>
	<?php } ?>
    </div>
    
</body>
</html>
<?php
	session_start(); //Enable session for this page.
	$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Williams Specialty Company</title>
	<!-- link to style sheet-->
	<link rel="stylesheet" type="text/css" href="cart.css">
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
		<label><strong>My Cart</strong></label>
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

<!-- Billing Information-->
<div class="row">
	<div class="col-75">
		<div class="container">
			<form action="">
			
			<div class="row">
				<div class="col-50">
				<h3>Billing Information</h3>
				<label for="fname"><i class="fa fa-user"></i> Full Name</label>
				<input type="text" id="fname" name="firstname">
				<label for="emial"><i class="fa fa-envelope"></i> Email</label>
				<input type="text" id="email" name="email">
				<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            	<input type="text" id="adr" name="address">
            	<label for="city"><i class="fa fa-institution"></i> City</label>
            	<input type="text" id="city" name="city">
            	
            	<div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip">
              </div>
            </div>
          </div>
          
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth">
            
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
          
          </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>







</body
<!-- Link to javscript file. Must be at the bottom so page will load first-->
<script type="text/javascript" src = "index.js"></script>
</html>
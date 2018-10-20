<?php 
//************************************************************ 
// File: dbc_admin.php
// Connect to MySQL database via PHP 
//************************************************************* 

	$host = "localhost";
	$userName = "jhedlerm_470wrt";
	$passWord = "ZihYj42;xQVv";
	$dataBase = "jhedlerm_cis470";

	$con = mysqli_connect($host, $userName, $passWord,$dataBase);

	$connection_error = mysqli_connect_error();
	if($connection_error != null){
		print "<p>Error connecting to database: $connection_error </p>";
	}else{
		print "Connected to MySQL<br/>";
	}
?>
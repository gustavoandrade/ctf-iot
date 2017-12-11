<?php

	// get values passed from login form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// connect to the server and select database
	$con = mysqli_connect("localhost", "root", "", "loginpagedb");

	// prevents mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);

	// query the database for user
	$result = mysqli_query($con, "select * from user where username = '$username' and password = '$password'") or die("Failed to query database ".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		//echo "Login sucess, welcome ".$row['username'];
		header( 'Location: homepage.php' );
		//echo "<script type=\"text/javascript\">alert(\"Login sucess, welcome\".);window.location.href='homepage.php';</script>\n";
	} else {
		echo "Login failed";
	}

?> 

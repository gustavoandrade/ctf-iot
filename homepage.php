<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		
		<form action="index.html" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			
			<div class="form">

  <div class="forceColor"></div>
  
  <div class="topbar">
    <div class="spanColor"></div>
  </div>
  <button class="submit" id="submit" >Log Out</button>
</div>
			
		</form>
	</div>
</body>
</html>
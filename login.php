<?php
	
	session_start();

		if(isset($_SESSION["ID"]) && !empty($_SESSION["ID"]))
		{
			header("Location: index.php");
			exit(0);
		}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Proiect - Catarau Cezar-Iulian</title>

	<!-- BOOTSTRAP LINKS *CSS* -->
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap-grid.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap-grid.min.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap-reboot.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap-reboot.min.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/bootstrap.min.css">
  
  	<!-- BOOTSTRAP LINKS END *CSS* END-->
</head>
<body>

	<?php require("navbar.html"); ?>


	<div class="container" style="width: 40% !important; margin-top: 10%;">
			
		<p style="text-align: center; font-family: Roboto, 'sans-serif'; font-size: 4vw;">Login</p>
		<hr>
		<br>
		<form action="assets/php/login.inc.php" method="POST">
			<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" type="email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" name="password">
			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="Login">
		</form>

		<br>
		<p>If you don't have any account, please click to <a href="register.php">register</a>.</p>

	</div>

	<!-- SECURITY -->

	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- SECURITY END -->

	<!-- BOOTSTRAP LINKS *JavaScript* -->
	<script type="text/javascript" src="http://localhost/assets/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="http://localhost/assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="http://localhost/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://localhost/assets/js/bootstrap.min.js"></script>
	<!-- BOOTSTRAP LINKS *Javascript* END -->

</body>
</html>
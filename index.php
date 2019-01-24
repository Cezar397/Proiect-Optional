<?php
	
	session_start();

	if(!isset($_SESSION["ID"]) || empty($_SESSION["ID"]))
	{
		header("Location: login.php");
		exit(0);
	}




?>
<!DOCTYPE html>
<html>
<head>

	<title>Proiect - Catarau Cezar-Iulian</title>

	<!-- BOOTSTRAP LINKS *CSS* -->
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/reboot.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/reboot.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  	<!-- BOOTSTRAP LINKS END *CSS* END-->

  	<!-- FONTS -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<!-- END FONTS -->

</head>
<body style="background-color: #222">

	<?php require("navbar.html"); ?>

	<iframe src="chat.php" style="width: 100%; border: none; height: 750px"></iframe>


	<div class="container" style="width: 80%">
		<form action="assets/php/chat.inc.php" method="POST">
			<div class="form-group" style="display: inline-block; width: 90%;">
				<label for="message" style="color: white">Message: </label>
				<input class="form-control" type="text" name="message" id="message" placeholder="Message...">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" style="display: inline-block;">
		</form>
	</div>


	<!-- BOOTSTRAP LINKS *JavaScript* -->
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<!-- BOOTSTRAP LINKS *Javascript* END -->

</body>
</html>
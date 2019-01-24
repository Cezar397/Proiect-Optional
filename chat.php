<?php
		
	require("assets/php/dbconnect.php");

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

	<title>Chat</title>

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
<body style="background-color:#222">

		<div class="table-responsive">
			<table class="table table-dark">
				<thead>
					<tr>
						<th style="width: 100px;">Date</th>
						<th style="width: 250px;">Name</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
					
						<?php 

					

						$select_id = "SELECT ID FROM chat ORDER BY ID DESC";
						$result_id = $GLOBALS["dbstatus"]->query($select_id);
						$row_id = $result_id->fetch_assoc();

						$i = $row_id["ID"];
						
						$_SESSION["counter"] = 25;

						while ($i > 0 && $_SESSION["counter"] > 0)
						 {
						 	$select = "SELECT * FROM chat WHERE ID = '$i'";
						 	$result = $GLOBALS["dbstatus"]->query($select);
						 	$row = $result->fetch_assoc();

						 	echo '<tr>';
							echo '<td>'.$row["Date_M"].'</td>';
							echo '<td>'.$row["Name"].'</td>';
							echo '<td>'.$row["Message"].'</td>';
							echo '</tr>';

							$i--;
							$_SESSION["counter"]--;
						}

						?>

				</tbody>

			</table>
		


	<!-- BOOTSTRAP LINKS *JavaScript* -->
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<!-- BOOTSTRAP LINKS *Javascript* END -->

</body>
</html>
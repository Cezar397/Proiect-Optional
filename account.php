<?php
/**
 * 
 	Creator: Catarau Cezar-Iulian
	Data: 16/01/2019
	
 */
	session_start();

	require("assets/php/dbconnect.php");

	if(!isset($_SESSION["ID"]) || empty($_SESSION["ID"]))
	{
		header("Location: login.php");
		exit(0);
	}

	 function get_dbdata($data)
	{
		$id = $_SESSION["ID"];
		$select = "SELECT $data FROM accounts WHERE ID = $id";
		$result = $GLOBALS["dbstatus"]->query($select);

		$row = $result->fetch_assoc();

		return $row[$data];
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
<body>

	<?php require("navbar.html"); ?>

	<div class="container">
		<br>
		<p style="text-align: center; font-family: Roboto, 'sans-serif'; font-size: 4vw;">Account</p>
		<hr>

		<div class="table-responsive">
			<table class="table table-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Info</th>
						<th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th scope="row">Name</th>
						<td><?php echo get_dbdata('Name')?></td>
						<td><a href="#"><button class="btn btn-danger" disabled="">Change</button></a></td>
					<tr>
					<tr>
						<th>Chat Name</th>
						<td><?php 

						 if(!empty(get_dbdata('ChatName')))
						 		echo get_dbdata('ChatName');
						 	else
						 		echo get_dbdata('Name');
						  ?></td>
						  <td><a href="#"><button class="btn btn-danger" disabled="">Change</button></a></td>
					</tr>
					<tr>
						<th scope="row">Email</th>
						<td><?php 

						echo get_dbdata('Email');

						if(get_dbdata('EmailConfirm') == 1)
								echo '(Verified)';
							else
								echo '(Unverified)';

						 ?></td>
						<td><a href="#"><button class="btn btn-danger" disabled="">Change</button></a></td>
					</tr>
					<tr>
						<th scope="row">Password</th>
						<td>Password is encrypted</td>
						<td><a href="#"><button class="btn btn-danger" disabled="">Change</button></a></td>
					</tr>	
					<tr>
						<th scope="row" style="color: gold;">Premium Account</th>
						<td><?php
							if(get_dbdata('PremiumAccount') == 0)
								echo "No";
							else
								echo "Yes";
							 ?></td>
						<td><a href="#"><button class="btn btn-danger" disabled="">Buy</button></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		
	</div>



	<!-- BOOTSTRAP LINKS *JavaScript* -->
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<!-- BOOTSTRAP LINKS *Javascript* END -->

</body>
</html>
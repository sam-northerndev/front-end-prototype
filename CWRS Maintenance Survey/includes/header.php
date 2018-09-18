<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CWRS Maintenance Survey</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
	<script src="js/functions.js" type="text/javascript"></script>


</head>
<?php
	$curr = basename($_SERVER['PHP_SELF']);
?>
<body>
		<nav id="<?php if ($curr == "index.php") { echo "landing-scroll"; } ?>" class="navbar navbar-expand-md shadow-sm navbar-light sticky-top" style="background: #ffffff;">
			<div class="container-fluid">
				<a class="navbar-brand" style="width: 200px;" href="index.php"><img class="img-responsive" src="images/Water Studies Logo.png" style="width:100%; ; height:auto;"></a>
				<!--<h5 id="t1" style=" padding-left: 10px; display: inline-block;">Water Maintenance Survey</h5>-->	
				
				<button class="navbar-toggler custom" id="toggle-btn" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>	
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if ($curr == "index.php") { echo "active"; } ?>">
							<a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>	
						</li>
						<li class="nav-item <?php if ($curr == "survey_start.php") { echo "active"; } ?>">
							<a class="nav-link" id="ocean-hover" href="survey_start.php"><i class="fas fa-vial"></i> Service</a>	
						</li>
						<li class="nav-item <?php if ($curr == "about.php") { echo "active"; } ?>">
							<a class="nav-link" id="ocean-hover" href="index.php"><i class="far fa-question-circle"></i> About</a>	
						</li>
						<li class="nav-item <?php if ($curr == "contact.php") { echo "active"; } ?>">
							<a class="nav-link" id="ocean-hover" href="index.php"><i class="far fa-envelope"></i> Contact</a>	
						</li>
						<li id="login" class="nav-item <?php if ($curr == "login.php") { echo "active"; } ?>">
							<a class="nav-link" id="ocean-hover" href="content.php?login=1"><i class="fas fa-user-alt"></i> Account</a>	
						</li>
					</ul>
				</div>
			</div>
		</nav>
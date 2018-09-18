
<?php
include "includes/header.php";
?>
<script type="text/javascript" src="js/landing.js"></script>
<!--- This marks the end of the navigation/header section of the website -->
<div class="container-fluid">
	<div class="row">
		<div class="showcase">
			<div class="col-md-12 showcase-container">
				<img class="img-responsive img-landing" style="width: 100%; height: auto;" src="images/sea.jpg">
				<div class="carousel-caption align-middle border-rounded" id="landing-text">
					<h1 id="t2" class="display-3">Water Monitoring Service</h1>
					<h3 id="t3" class="display">Chlorine Maintenance</h3>
					<form action="survey_start.php">
						<button type="submit" id="t3" class="btn shadow-lg btn-outline-light btn-lg rounded-0">Go to Service</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Jumbotron area-->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<hr class="light">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">
				The CWRS Water Maintentance Surveys are an aid in the monitoring and collection of a variety of different water analysis methods.
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#"><button href="#" type="button" class="btn btn-outline-secondary btn-lg">Discover More</button></a>
		</div>
		<div class="col-12">
			<hr class="light">
		</div>
	</div>

	<!--This is the start of the card area -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<!--Start of a card image-->
				<div id="card-landing" class="card shadow-lg rounded">
					<div class="view-overlay">
						<img class="card-img-top" id="card-image" src="images/services.jpg" alt="card image">
					</div>
					<div class="card-body">
						<h4 class="card-title display">Full List of Services</h4>
						<p class="card-text"> See a comprehensive list of survey options that are provided at this time.</p>
						<a href="survey_start.php" class="btn btn-outline-secondary btn-lg">Explore</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div id="card-landing" class="card shadow-lg rounded">
					<div class="view-overlay">
						<img class="card-img-top" id="card-image" src="images/Register.jpg" alt="card image">	
					</div>
					<div id="" class="card-body">
						<h4 class="card-title display">Register for an Account</h4>
						<p class="card-text">Use your account features to analyze historical data and store survey results.</p>
						<a href="content.php?login=1" class="btn btn-outline-secondary btn-lg">Register</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div id="card-landing" class="card shadow-lg rounded">
					<div class="view-overlay">
						<img class="card-img-top" id="card-image" src="images/About.jpg" alt="card image">
						
					</div>
					<div class="card-body">
						<h4 class="card-title display">Learn More About the Program</h4>
						<p class="card-text">Want to know a little more about what this program aims to accomplish?</p>
						<a href="#" class="btn btn-outline-secondary btn-lg">Find Out</a>
					</div>
				</div>
			</div>
			<div class=" col-12">
			</div>
		</div>
	</div>
	<?php
	include "includes/footer.php"
	?>
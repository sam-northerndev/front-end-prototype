<?php
include "includes/header.php";
//This page will be the landing page for all survey content
?>
<div class="container-fluid">
	<div id="search-bar" class="row">
		<div class="col-12 text-center">
			<i id="large-icon" class="fas fa-search img-responsive"></i>
			<input class="form-control search" type="text" name="search" placeholder="Search..">
		</div>
	</div>
	<div class="row text-center">
		<div id="banner" class="col-12">
			<hr class="shadow-sm">
			<h1 id="t3" class="display">Services</h1>
		</div>
	</div>
<!--Menu items --->
	<div  class="row" style=" padding-bottom: 10px;">
		<!-- Card buttons -->
		<div class="col-12 remove-padding-menu" style="display: inline-block;">
			<div id="menu" class="card-group">
				<div id="card-button-monitoring" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center monitoringBtn">
					<div class="card-body text-center">
						<p class="card-text">Monitoring<br><i class="fas fa-vial"></i></p>
					</div>
				</div>
				<div id="card-button-maintenance" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center maintenanceBtn">
					<div class="card-body text-center">
						<p class="card-text">Maintenance<br><i class="fas fa-cogs"></i></p>
					</div>
				</div>
				<div id="card-button-results" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center resultsBtn">
					<div class="card-body text-center">
						<p class="card-text">Results<br><i class="fas fa-chart-bar"></i></p>
					</div>
				</div>
				<div id="card-button-daily" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center dailyBtn">
					<div class="card-body text-center">
						<p class="card-text">Daily<br><i class="far fa-calendar-check"></i></p>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!--- Here is the start of the hidden survey pages -->
	<a id="menu-open" style="display: none;"><i class="fas fa-arrow-left"></i> Return to Menu</a>
	<div class="row survey-row" style=" position: relative;">
		<!--Clorine card-->
		<div class="col-1 monitoring survey-start" ></div>
		<div class="col-10 monitoring survey-start remove-padding" >
			    <div class="card shadow-lg" style="margin-top: 20px;">
			    	<div class="card-body" style="">
			        	<h4 class="card-title">Chlorine Survey</h4>
			        	<hr>
			        	<p class="card-text">This will contain additional information about the Chlorine survey.</p>
			        	<a href="content.php?chlorine=1" class="btn btn-primary">Start Survey</a>
			    	</div>
				</div>
			</div>
		<div class="col-1 monitoring survey-start" ></div>

		<!--Lead card-->
		<div class="col-1 maintenance survey-start" ></div>
		<div class="col-10 maintenance survey-start remove-padding" >
			<div class="card shadow-lg" style="margin-top: 20px;">
			    <div class="card-body" style="">
			        <h4 class="card-title">Maintenance Parameters</h4>
			        <hr>
			        <p class="card-text">This section is still in development, be patient.</p>
			        <a class="btn btn-primary">Start Survey</a>
			    </div>
			</div>
		</div>
		<div class="col-1 maintenance survey-start" ></div>
		<!--Manganese card-->
		<div class="col-1 results survey-start" ></div>
		<div class="col-10 results survey-start remove-padding" >
			<div class="card shadow-lg" style="margin-top: 20px;">
			    <div class="card-body" style="">
			        <h4 class="card-title">Results</h4>
			        <hr>
			        <p class="card-text">This section is still in development, be patient.</p>
			        <a class="btn btn-primary">Start Survey</a>
			    </div>
			</div>
		</div>
		<div class="col-1 results survey-start" ></div>
		<!--Other card-->
		<div class="col-1 daily survey-start" ></div>
		<div class="col-10 daily survey-start remove-padding" >
			<div class="card shadow-lg" style="margin-top: 20px;">
			    <div class="card-body" style="">
			        <h4 class="card-title">Daily Analysis</h4>
			        <hr>
			        <p class="card-text">Other surveys will eventually be added this tab will be for the ones that don't make the "top three".</p>
			        <a class="btn btn-primary">Start Survey</a>
			    </div>
			</div>
		</div>
		<div class="col-1 daily survey-start" ></div>
	</div>

<?php
include "includes/footer.php";
?>
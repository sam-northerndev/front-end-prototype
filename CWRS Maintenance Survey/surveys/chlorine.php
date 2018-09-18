<div class="container-fluid">
	<div class="row text-center">
		<div id="banner" class="col-12">
			<hr>
			<h1 id="t3" class="display">Chlorine Survey</h1	>
		</div>
	</div>
	<!-- Progress Bar -->
	<div class="row" style="padding-top: 10px;">
		<div class="col-1"></div>
		<div class="col-10 text-center">
			<div class="progress">
  					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
	<!-- The survey section -->
	<div class="row chlorine-landing">
		<div class="col-1 remove-padding" ></div>
		<div class="col-10 remove-padding" >
			<div class="card shadow-lg" style="margin-top: 20px;">
				<div class="card-body" style="">
					<h4 class="card-title">Sample Collection</h4>
					<hr>
					<div class="col-12 remove-padding-menu" style="display: inline-block;">
						<div id="menu" class="card-group">
							<div id="card-button-treatment" class="card shadow-sm rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Treatment Plant / Distribution System</p>
								</div>
							</div>
							<div id="card-button-analysis" class="card shadow-sm rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Laboratory Analysis</p>
								</div>
							</div>
							<div id="card-button-locations" class="card shadow-sm rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Manage Sample Locations</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="col-1 remove-padding" ></div>
	</div>

	<!-- THis is the start of the treatment plant/distribution section-->
	<div class="row treatment page" style="display: none;">
		<div class="col-1 remove-padding" ></div>
		<div class="col-10 remove-padding" >
			<div class="card shadow-lg" style="margin-top: 20px;">
				<div class="card-body" style="">
					<h4 class="card-title"><a href="content.php?chlorine=1">Chlorine</a> <i class="fas fa-long-arrow-alt-right"></i> Treatment Plant / Distribution Centre</h4>
					<hr>

					<!-- Buttons for sample site collection -->
					<div class="col-12 remove-padding-menu card-button" style="display: inline-block;">
						<div id="menu" class="card-group">
							<div id="card-button-plant" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Treatment Plant</p>
								</div>
							</div>
							<div id="card-button-distribution" class="card shadow-sm rounded card-button hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Distribution System</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Actual Survey content -->
						<form class="plant form-survey">
							<div class="form-group">
								<label for="plantName"><h4 class="light">Treatment Plant</h4></label>
    							<input type="text" class="form-control shadow-sm" id="plantName" placeholder="This will hold the plant name">
								
							</div>
							
						</form>
						<form class="distribution form-survey">
							<div class="form-group">
								<label for="plantName"><h4 class="light">Distribution</h4></label>
    							<input type="text" class="form-control shadow-sm" id="plantName" placeholder="This will hold the distribution system name">
								
							</div>
							
						</form>
				</div>
			</div>	
		</div>
		<div class="col-1 remove-padding" ></div>

	</div>

	<!-- the return button section -->
	<div class="row" style="padding-top: 20px;">
		<div class="col-12 text-center">
			<div id="card-button-return" class="card shadow-lg rounded card-button hvr-back-pulse hvr-overline-from-center">
				<div class="card-body text-center">
					<p class="card-text"><i class="fas fa-long-arrow-alt-left"></i> Return to Services</p>
				</div>
			</div>
		</div>
		
	</div>
	
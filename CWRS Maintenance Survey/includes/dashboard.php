<script type="text/javascript" src="js/dashboard.js"></script>
<div class="container-fluid" style="display: none;">
	<div class="row text-center">
		<div id="banner" class="col-12">
			<h1 id="t3" style="padding-top: 20px;" class="display">Dashboard</h1>
		</div>
	</div>
	<div class="row" style="padding-top: 20px;">
		<!--MOBILE-->
		<div id="dashMenu-mobile" class="col-10 offset-1">
			<div class="card-group">
				<div id="card-button-you" class="card shadow-sm rounded card-button card-button-menu hvr-back-pulse hvr-overline-from-center">
					<div class="card-body text-center">
						<p class="card-text"><i class="far fa-user-circle"></i> You</p>
					</div>
				</div>
				<div id="card-button-Dashpreferences" class="card shadow-sm card-button rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
					<div class="card-body text-center">
						<p class="card-text"><i class="far fa-check-circle"></i> Preferences</p>
					</div>
				</div>
				<div id="card-button-Dashresults" class="card shadow-sm card-button rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
					<div class="card-body text-center">
						<p class="card-text"><i class="fas fa-chart-bar"></i> Results</p>
					</div>
				</div>
				<div id="card-button-Daskbuildings" class="card shadow-sm card-button rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
					<div class="card-body text-center">
						<p class="card-text"><i class="far fa-building"></i> Buildings</p>
					</div>
				</div>
				<div id="card-button-Dashapproval" class="card shadow-sm card-button rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
					<div class="card-body text-center">
						<p class="card-text"><i class="far fa-thumbs-up"></i> Approval</p>
					</div>
				</div>
			</div>
			
		</div>
		<!--DESKTOP -->
		<div id="dashMenu-desktop" class="col-10 offset-1">
			<ul class="nav nav-tabs nav-fill shadow-sm" id="dashTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="you-tab" data-toggle="tab" href="#you" role="tab" aria-controls="you" aria-selected="true"><i class="far fa-user-circle"></i> You</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="preferences-tab" data-toggle="tab" href="#preferences" role="tab" aria-controls="preferences" aria-selected="false"><i class="far fa-check-circle"></i> Preferences</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false"><i class="fas fa-chart-bar"></i> Results</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="buildings-tab" data-toggle="tab" href="#buildings" role="tab" aria-controls="buildings" aria-selected="false"><i class="far fa-building"></i> Buildings</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="approval-tab" data-toggle="tab" href="#approval" role="tab" aria-controls="approval" aria-selected="false"><i class="far fa-thumbs-up"></i> Approval</a>
				</li>
			</ul>
			<!--Content to be shown -->
			<div class="tab-content" id="dashContent" style="padding-top: 20px;">
				
				<!-- YOU SECTION -->
				<div class="tab-pane fade show active" id="you" role="tabpanel" aria-labelledby="you-tab">
					<div class="card shadow-sm">
						<div class="card-header shadow-sm"><h4>Sam Irvine - Student - Centre for Water Resource Studies</h4></div>
						<div class="card-body">
							<div class="card-group">
								<div class="card">
									<div class="card-header"><strong>Notifications:</strong></div>
									<div class="row card-body" style="display: inline;">
										<div class="col-10">
											<div class="alert alert-danger hvr-glow align-baseline notif">
												<i class="far fa-check-circle"></i> Set your maintenance monitoring parameters.
											</div>
										</div>
										<div class="col-10">
											<div class="alert alert-danger hvr-glow align-baseline notif">
												<i class="far fa-thumbs-up"></i> Approve new Data.
											</div>
										</div>
										<div class="col-10">
											<div class="alert alert-danger hvr-glow align-baseline notif">
												<i class="fas fa-vials"></i> New Samples to be Analyzed.
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header"><strong>Your Information:</strong></div>
									<div id="yourInfo" class="card-body">
										<form id="update-form" action="" method="post" role="form">
											<!-- NAME -->
											<div class="form-group">
												<label for="first-name">Name: </label>
												<div class="form-row">
													<div class="col">
														<input type="text" name="first-name" id="first-name" class="form-control" placeholder="Sam" disabled>
													</div>
													<div class="col">
														<input type="text" name="last-name" name="last-name" class="form-control" placeholder="Irvine" disabled>
													</div>
												</div>
											</div>
											<!-- COMPANY -->
											<div class="form-group">
												<label for="company-select">Company Name: </label>
												<div class="form-row">
													<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12">
														<select class="form-control" id="company-select" disabled>
															<option selected="selected" disabled="disabled" value="">Centre For Water Resource Studies</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12">
														<input style="white-space: normal;" type="submit" name="company-change" id="company-change" class="form-control shadow-sm btn-primary btn-md rounded-0 login-text" value="Request Company Change">
													</div>
												</div>
											</div>
											<!-- ROLE -->
											<div class="form-group">
												<label for="position-select">Position/Role: </label>
												<div class="form-row">
													<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12">
														<select class="form-control" id="position-select" disabled>
															<option selected="selected" disabled="disabled" value="">Student</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12">
														<input style="white-space: normal;" type="submit" name="role-change" id="role-change" class="form-control shadow-sm btn-primary btn-md rounded-0 login-text" value="Request Role Change">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- PREFERENCES SECTION -->
				<div class="tab-pane fade" id="preferences" role="tabpanel" aria-labelledby="preferences-tab">
					<div class="card shadow-sm">
						<div class="card-header shadow-sm"><h4>Manage Your Preferences</h4></div>
						<div class="card-body">
							<div class="card-group">
								<div class="card">
									<div class="card-header"><strong>Monitoring:</strong></div>
									<div class="card-body">
										<table class="table table-hover table-bordered">
											<thead class="thead-dark">
												<tr>
													 <th scope="col">Process</th>
													 <th scope="col">Parameter Number</th>
													 <th scope="col">Last Modified</th>
												</tr>
											</thead>
											<tbody class="shadow-sm">
												<tr>
													<th scope="row">Lead Monitoring</th>
													<td>4</td>
													<td>01/01/2018</td>
												</tr>
												<tr>
													<th scope="row">Chlorine Monitoring</th>
													<td>2</td>
													<td>01/04/2018</td>
												</tr>
												<tr>
													<th scope="row">Manganese Monitoring</th>
													<td>0</td>
													<td>N/A</td>
												</tr>
											</tbody>
											
										</table>
										<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"><i class="far fa-plus-square"></i> Quick Add</button></a>
										
									</div>
								</div>
								<div class="card">
									<div class="card-header"><strong>Maintenance:</strong></div>
									<div class="card-body">
										<table class="table table-hover table-bordered">
											<thead class="thead-dark">
												<tr>
													 <th scope="col">Process</th>
													 <th scope="col">Parameter Number</th>
													 <th scope="col">Last Modified</th>
												</tr>
											</thead>
											<tbody class="shadow-sm">
												<tr>
													<th scope="row">PH</th>
													<td>3</td>
													<td>01/01/2018</td>
												</tr>
												<tr>
													<th scope="row">Filters</th>
													<td>2</td>
													<td>01/04/2018</td>
												</tr>
												<tr>
													<th scope="row">Water Quality</th>
													<td>8</td>
													<td>12/03/2018</td>
												</tr>
											</tbody>
											
										</table>
										<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"><i class="far fa-plus-square"></i> Quick Add</button></a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- RESULTS SECTION --> 
				<div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">This will be a snapshot of your daily results.</div>
				<div class="tab-pane fade" id="buildings" role="tabpanel" aria-labelledby="buildings-tab">This will give you a table of buildings allowing the user to further modify sampling locations and edit details.</div>
				<div class="tab-pane fade" id="approval" role="tabpanel" aria-labelledby="approval-tab">This will display all data that has been moved to the holding cell for further approval. This may contain new buildings being added, any samples added in that building, or any parameter that exceeds the regular value</div>
			</div>
		</div>
	</div>
	<!-- This is the start of the content- initial display only on desktop-->
	<div class="row">
	</div>
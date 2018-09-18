<script type="text/javascript" src="js/login.js"></script>
<div class="container-fluid">
	<div class="row text-center">
		<div id="banner" class="col-12">
			<h1 id="t3" style="padding-top: 20px;" class="display">Account</h1>
		</div>
	</div>	
	<!-- start of the login section-->
	<div class="row page-row">

		<div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
			<div class="card shadow-lg" style="margin-top: 20px;">
				<div class="card-body">
					<div class="col-12 remove-padding-menu" style="display: inline-block;">
						<div id="menu" class="card-group">
							<div id="card-button-login" class="card shadow-sm rounded card-button card-button-menu hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Sign in<br><i class="fas fa-sign-in-alt"></i></p>
								</div>
							</div>
							<div id="card-button-register" class="card shadow-sm card-button rounded card-button-menu hvr-back-pulse hvr-overline-from-center">
								<div class="card-body text-center">
									<p class="card-text">Register<br><i class="fas fa-user-plus"></i></p>
								</div>
							</div>
						</div>
					</div>
					<!-- this section will hold the login page information -->
					<div class="row login-page page">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
							<h4 class="card-title">Sign In</h4>
							<hr>
							<form id="login-form" action="content.php?dashboard=1" method="post" role="form">
								<div class="form-group">
									<input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">	
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-6 offset-3">
											<input type="submit" name="login-submit" id="login-submit" class="form-control shadow-sm btn-primary btn-lg rounded-0 login-text" value="Log In">
										</div>
									</div>
								</div>
							</form>
							<div class="row">
								<div class="col-6 offset-3 text-center">
									<a href="#">Forgot your password?</a>
								</div>
							</div>
						</div>
					</div>
					<!--This section will handle the registration page information -->
					<div class="row register-page page">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
							<h4 class="card-title">Register</h4>
							<hr>
							<form id="register-form" action="" method="post" role="form">
								<div class="form-group">
									<label for="first-name">Name: </label>
									<div class="form-row">
										<div class="col">
											<input type="text" name="first-name" id="first-name" class="form-control" placeholder="First name" required>
										</div>
										<div class="col">
											<input type="text" name="last-name" name="last-name" class="form-control" placeholder="Last name" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="company-select">Company Name: </label>
									<select class="form-control" id="company-select" required>
										<option selected="selected" disabled="disabled" value="">Please Select</option>
										<option>Halifax Water</option>
										<option>Centre For Water Resource Studies</option>
										<option>Sample Company</option>
									</select>
								</div>
								<div class="form-group">
									<label for="position-select">Position/Role: </label>
									<select class="form-control" id="position-select" required>
										<option selected="selected" disabled="disabled" value="">Please Select</option>
										<option>Sample Collector</option>
										<option>Treatment Operator</option>
										<option>Water Quality Manager</option>
										<option>Administrator</option>
										<option>Student</option>
									</select>
								</div>
								<div class="form-group">
									<label for="email">Email: </label>
									<input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com" required>	
								</div>
								<div class="form-group">
									<label for="phone">Phone (optional): </label>
									<input type="tel" name="phone" id="phone" class="form-control" placeholder="(902)-564-5466">	
								</div>
								<div class="form-group">
									<label for="init-password">Password: </label>
									<input type="password" name="init-password" id="init-password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input type="password" name="con-password" id="con-password" class="form-control" placeholder="Confirm Password" required>
								</div>
								<div id="msg" class="form-group"></div>
								<div class="form-group">
									<div class="row">
										<div class="col-10 offset-1">
											<input type="submit" name="register-submit" id="register-submit" class="form-control shadow-sm btn-primary btn-lg rounded-0 login-text" value="Request Account">
										</div>
									</div>
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row return-button" style="padding-top: 20px;">
				<div class="col-12 text-center">
					<div id="card-button-return" class="card shadow-lg rounded hvr-back-pulse hvr-overline-from-center">
						<div class="card-body text-center">
							<p class="card-text"><i class="fas fa-long-arrow-alt-left"></i> Return to Account</p>
						</div>
					</div>
				</div>

			</div>		
		</div>
	</div>



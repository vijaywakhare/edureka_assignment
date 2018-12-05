<!DOCTYPE html>
<html lang="en" class="">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<div class="container">
			<section id="formHolder">

			  <div class="row">

				 <!-- Brand Box -->
				 <div class="col-sm-6 brand">
					<a href="#" class="logo">Shop <span>.</span></a>

					<div class="heading">
					   <h2>Welcome</h2>
					   <p>Register / Login to View Products</p>
					</div>

					<div class="success-msg">
					   <p>Great! You are one of our members now</p>
					   <a href="#" class="profile">Your Profile</a>
					</div>
				 </div>


				 <!-- Form Box -->
				 <div class="col-sm-6 form">

					<!-- Login Form -->
					<div class="login form-peice switched">
					   <form class="login-form" action="checklogin.php" method="POST">
							<h2> Login </h2>
						  <div class="form-group">
							 <label for="loginemail">Email Adderss</label>
							 <input type="email" name="loginemail" id="loginemail" required="">
						  </div>

						  <div class="form-group">
							 <label for="loginPassword">Password</label>
							 <input type="password" name="loginPassword" id="loginPassword" required="">
						  </div>

						  <div class="CTA">
							 <input type="submit" value="Login">
							 <a href="#" class="switch">I'm New</a>
						  </div>
					   </form>
					</div><!-- End Login Form -->


					<!-- Signup Form -->
					<div class="signup form-peice">
						
					   <form class="signup-form" action="saveregister.php" method="POST">
							<h2> Resigter </h2>
						  <div class="form-group">
							 <label for="name">Full Name</label>
							 <input type="text" name="username" id="name" class="name" required="">
							 <span class="error"></span>
						  </div>

						  <div class="form-group">
							 <label for="email">Email Adderss</label>
							 <input type="email" name="emailAdress" id="email" class="email" required="">
							 <span class="error"></span>
						  </div>

						  <div class="form-group">
							 <label for="phone">Phone Number - <small>Optional</small></label>
							 <input type="number" name="phone" id="phone">
						  </div>

						  <div class="form-group">
							 <label for="password">Password</label>
							 <input type="password" name="password" id="password" class="pass" required="">
							 <span class="error"></span>
						  </div>

						  <div class="form-group">
							 <label for="passwordCon">Confirm Password</label>
							 <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" required="">
							 <span class="error"></span>
						  </div>

						  <div class="CTA">
							 <input type="submit" value="Signup Now" id="submit">
							 <a href="#" class="switch">I have an account</a>
						  </div>
					   </form>
					</div><!-- End Signup Form -->
				 </div>
			  </div>

			</section>

		</div>

		<script src="custom.js"></script>
	</body>
</html>
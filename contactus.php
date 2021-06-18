<!-- ******************
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****************** -->

<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Warrior Zone</title>
	<link rel="stylesheet" href="../../src/style/style.css">
	<link rel="stylesheet" href="../../src/style/contactus.css">




	<script src="https://kit.fontawesome.com/3fe177132c.js" crossorigin="anonymous"></script>
	
</head>

<body>
	<nav>
		<div class="nav-center">
			<!-- nav header -->
			<div class="nav-header">
				<img src="/src/image/logo.png" class="logo" alt="logo" />
				<button class="nav-toggle">
					<i class="fas fa-bars"></i>
				</button>
			</div>
			<!-- links -->
			<ul class="links">
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="service.php">services</a>
				</li>
				<li>
					<a href="contactus.php">contact</a>
				</li>
			</ul>
			<!-- social media -->
			<ul class="social-icons">
				<li>
					<a href="https://www.twitter.com">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://www.twitter.com">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="form_wrapper">
		<div class="form_container">
			<div class="title_container">
				<h2>Warrior Zone Contact Form</h2>
				<h3 style="color:green"> <?php

											if (isset($_SESSION['success'])) {
												echo $_SESSION['success'];
												unset($_SESSION['success']);
											}
											?></h3>
			</div>
			<form action="contactusdb.php" method="post" enctype="multipart/form-data">
				<div class="row clearfix">
					<div class="col_half">
						<label>First name</label>
						<div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
							<input type="text" name="first_name" placeholder="Enter the first name" required />
						</div>
					</div>
					<div class="col_half">
						<label>Last name</label>
						<div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
							<input type="text" name="last_name" placeholder="Enter the last name" required />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col_half">
						<label>Email</label>
						<div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
							<input type="email" name="email" placeholder="Enter the email" required />
						</div>
					</div>
					<div class="col_half">
						<label>Phone</label>
						<div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
							<input type="tel" name="phone" placeholder="Enter the phone no" required />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div>
						<label>Comments</label>
						<div class="textarea_field"> <span><i aria-hidden="true" class="fa fa-comment"></i></span>
							<textarea cols="46" rows="3" name="comments" required></textarea>
						</div>
					</div>
				</div>
				<input class="button" type="submit" value="Submit" />
			</form>
			<div>

			</div>

		</div>
	</div>

	<footer class="footer-distributed">

		<div class="footer-left">

			<h3>warrior<span>Zone</span></h3>

			<p class="footer-links">
				<a href="#" class="link-1">Home</a>

				<a href="#">Blog</a>

				<a href="#">Pricing</a>

				<a href="#">About</a>

				<a href="#">Faq</a>

				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">Company Name © 2015</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+1.555.555.5555</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@company.com">support@company.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span>
				Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
				vehicula sit amet.
			</p>

			<div class="footer-icons">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

		</div>

	</footer>

</body>

</html>
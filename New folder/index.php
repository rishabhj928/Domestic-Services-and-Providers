<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Domestic Services and Providers</title>
	<link rel="shortcut icon" href="images/title_icon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="100% Trusted Domestic Services" />
	<meta name="keywords" content="Domestic Services" />
	<meta name="author" content="KC252" />

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="service.php?servicename=" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
							<!-- 	<li>
									<a class="active" href="index.html">Home</a>
								</li> -->
								<li>
									<!-- logged in user information -->
		    						<?php  if (isset($_SESSION['username'])) : ?>
		    							<a href="logout.php" style="color: red;"><?php echo $_SESSION['username']; ?> logout</a>
		    						<?php else : ?>
		    							<a href="login_signup.php">Login/Signup</a>
		    						<?php endif ?>
								</li>
								<li><a href="career.php">Careers</a></li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Services</a>
									 <ul class="fh5co-sub-menu">
									 	<li>
											<a href="" class="fh5co-sub-ddown">Cooking</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Veg%20Cook">Veg Cook</a></li>
												<li><a href="service.php?servicename=Non-Veg%20Cook">Non-Veg Cook</a></li>
											</ul>
										</li>
									 	<li>
											<a href="" class="fh5co-sub-ddown">Cleaning</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Vehicle">Vehicle</a></li>
												<li><a href="service.php?servicename=House">House</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">Maintenance</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Plumber">Plumber</a></li>
												<li><a href="service.php?servicename=Electrician">Electrician</a></li>
												<li><a href="service.php?servicename=Auto%20Mechanic">Auto Mechanic</a></li>
												<li><a href="service.php?servicename=Carpenter">Carpenter</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">We Care</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Child%20Care">Child Care</a></li>
												<li><a href="service.php?servicename=Patient%20Care">Patient Care</a></li>
												<li><a href="service.php?servicename=Old%20Age%20Care">Old Age Care</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">Others</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Tailor">Tailor</a></li>
												<li><a href="service.php?servicename=Tutor">Tutor</a></li>
												<li><a href="service.php?servicename=Makeup%20Artist">Makeup Artist</a></li>
												<li><a href="service.php?servicename=Gardener">Gardener</a></li>
												<li><a href="service.php?servicename=Driver">Driver</a></li>
												<li><a href="service.php?servicename=Painter">Painter</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/i1.jpeg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Professional and Responsible Mechanics</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/i2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Your Child Care in the best hands</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/i3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Professional and Skilled Cook</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/i4.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Best Cleaning Services</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-section">
			<div class="col-half col-half-2" style="margin-left: auto; margin-right: auto;">
				<h2>Domestic Services and Providers Features</h2>
				<div class="featured-inner">
					<i class="sl-icon-chart"></i>
					<div class="desc">
						<h3>Verified Professionals</h3>
						<p>All our Professionals are background checked and verified to ensure your complete safety.</p>
					</div>
				</div>
				<div class="featured-inner">
					<i class="sl-icon-screen-tablet"></i>
					<div class="desc">
						<h3>Easy Payments</h3>
						<p>Payments can be made via Cash-on-Service or Paytm at Doorstep.</p>
					</div>
				</div>
				<div class="featured-inner">
					<i class="sl-icon-layers"></i>
					<div class="desc">
						<h3>Satisfaction Gauranteed</h3>
						<p>We hire only the most Qualified Professionals to ensure High Quality Services.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-services-section" style="background-color: #fefefe;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<img src="images/hiw.png"><br><br>
						<h2>How it Works</h2>
						<p>This is how you can access trained and verified Professional help.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="services" style="background-color: #fafafa;">
							<span><i><img src="images/list.png"></i></span>
							<h3 style="margin-top: 20px;">Step 1: Login/Register</h3>
							<p>Login or Signup to your account on the website to get access to services, with a valid proof so that we can trust our customers.</p>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="services" style="background-color: #fafafa;">
							<span><i><img src="images/list.png"></i></span>
							<h3 style="margin-top: 20px;">Step 2: Book Service</h3>
							<p>Browse through different services categorized in the website and select the service as per your demand and book the service.</p>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="services" style="background-color: #fafafa;">
							<span><i><img src="images/list.png"></i></span>
							<h3 style="margin-top: 20px;">Step 3: Payment</h3>
							<p>You can pay securely after service the same amount as you get on the website during booking with no hidden charges.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-parallax fh5co-parallax2" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro animate-box">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="testimony">
										<span class="quote"><i class="icon-quotes-right"></i></span>
										<blockquote>
											<p>Domestic Services has done a very good job. I never expected such remarkable work in providing domestic help.</p>
											<span>&mdash;Chandan Kumar, via <a class="icon-twitter3 twitter-color"></a></span>
										</blockquote>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="testimony">
										<span class="quote"><i class="icon-quotes-right"></i></span>
										<blockquote>
											<p>I am glad that I have chosen Domestic Services. Their staff came on time &amp; they were very helpful and polite.</p>
											<span>&mdash;Vikas Verma, via <a class="icon-google-plus googleplus-color"></a></span>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-counter-section" class="fh5co-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<i class="sl-icon-badge"></i>
						<h2>Achievements</h2>
						<p>With the increasing rate of demand of services offered in few steps, our services are increasing day-to-day. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="2674" data-speed="2000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Customers Satisfied</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="135" data-speed="2000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Daily Service Request(approx)</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="485" data-speed="2000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Verified Service Providers</span>
					</div>
					
				</div>
			</div>
		</div>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="copyright">
							<p><small>&copy; 2018 <a href="index.php">Domestic Services and Providers</a>. All Rights Reserved. <br> Made with <i class="icon-heart3"></i> by KC252</a></small></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3>Company</h3>
								<ul class="link">
									<li><a href="about.php">About Us</a></li>
									<li><a href="service.php?servicename=">Domestic Services and Providers</a></li>
									<li><a href="contact.php">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h3>Any Queries</h3>
								<p>Feel Free to write us, <br>in <a href="contact.php">Contact Us</a> Section</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
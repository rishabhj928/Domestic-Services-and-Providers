<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact - Domestic Services and Providers</title>
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
						<a href="service.html" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.php">HOME</a></li>
								<li>
									<!-- logged in user information -->
		    						<?php  if (isset($_SESSION['username'])) : ?>
		    							<a href="logout.php" style="color: red;"><?php echo $_SESSION['username']; ?> logout</a>
		    							<?php else : ?>
		    							<a href="login_signup.php">Login/Signup</a>
		    						<?php endif ?>
								</li>
								<li><a href="about.php">About</a></li>
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
			   	<li style="background-image: url(images/slide_2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
			   					<h2 class="heading-section">Contact Us</h2>
			   					<p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by KC252</p>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-contact-section" style="margin-top: -166px;background-color: #c4dbbc">
			<div style="margin-left: 60px;width: 1200px;">
				<form action="#">
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<h3 class="section-title">Our Address</h3>
							<p>If you have any queries regarding the serices, feel free to contact us, or you can directly send a message to us through the form provided.</p>
							<ul class="contact-info">
								<li onmouseover="this.style.color='#00b8bf'" onmouseout="this.style.color='grey'" style="cursor: default;"><i class="icon-location-pin"></i>Lovely Professional University, Jalandhar - Delhi G.T. Road, Phagwara, Punjab 144411, India</li>
								<li onmouseover="this.style.color='#00b8bf'" onmouseout="this.style.color='grey'" style="cursor: default;"><i class="icon-phone2"></i>+91 88722 49406</li>
								<li onmouseover="this.style.color='#00b8bf'" onmouseout="this.style.color='grey'" style="cursor: default;"><i class="icon-mail"></i>akmishra001997@gmail.com</li>
							</ul>
						</div>
						<div class="col-md-6 col-md-pull-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" name="name_contact" class="form-control" placeholder="Name" style="background-color: transparent;width: 250px;border: 1px solid grey;">
									</div>
								</div>
								<div class="col-md-12" style="margin-top: -80px;margin-left: 335px;">
									<div class="form-group">
										<input name="email_contact" type="text" class="form-control" placeholder="Email" style="background-color: transparent;width: 250px;border: 1px solid grey;">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message_contact" style="background-color: transparent;border: 1px solid grey;" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary" onclick="alert('Thanks to contact us, we will contact you soon.')">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
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
									<li><a href="service.html">Domestic Services and Providers</a></li>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


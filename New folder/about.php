<?php include('server.php') ?>
<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About us - Domestic Services and Providers</title>
	<link rel="shortcut icon" href="images/title_icon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="" />

 	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="favicon.ico">

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
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
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
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/Hero1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
			   					<h2 class="heading-section">About Us</h2>
			   					<p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by KC252</p>
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
				<div class="featured-inner">
					<i><img src="images/job.png" style="width: 50px;height: 50px;"></i>
					<div class="desc">
						<h3>Job Opportunities</h3>
						<p>We also Provide Job Opportunities for the people who want to work as Service Persons.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-about-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<i class="sl-icon-people"></i>
						<h2>Our Staff (Developers)</h2>
						<p>Teams that consistently perform at the highest levels are able to come together and be unified across the organization - staff, players, coaches, management, and ownership. When everyone is on the same page, trust develops, and teams can grow and succeed together. </p><br><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="about-wrap">
							<div class="about">
								<img src="images/Rishabh.jpg" alt="">
							</div>
							<div class="desc">
								<h3>Rishabh Jain</h3>
								<p class="pos">Web Developer</p>
								<p>I am a Web Developer having excellent skills and knowledge, good skills in Front End as well as Back End programming.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="about-wrap">
							<div class="about">
								<img src="images/Arvind.jpg" alt="">
							</div>
							<div class="desc">
								<h3>Arvind Kumar Mishra</h3>
								<p class="pos">Web Developer</p>
								<p>When you invest your time, you make a goal and a decision of something that you want to accomplish. Whether it's make good grades in school, be a good athlete, be a good person, go down and do some community service and help somebody who's in need</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="about-wrap">
							<div class="about">
								<img src="images/Ajay.jpg" alt="">
							</div>
							<div class="desc">
								<h3>Ajay Dhir</h3>
								<p class="pos">Web Developer</p>
								<p>So many times, people told me I can't do this or can't do that. My nature is that I don't listen very well. I'm very determined, and I believe in myself. My parents brought me up that way. Thank God for that. I don't let anything stand in my way.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="about-wrap">
							<div class="about">
								<img src="images/Hemant.jpg" alt="">
							</div>
							<div class="desc">
								<h3>Hemant Srivastava</h3>
								<p class="pos">Web Developer</p>
								<p>I’ve spent the last 3 years sharpening my web design skills.From three years of learning experience. I've come across the various technologies used in web designing as Php, CSS3, HTML, JavaScript, Wordpress. Still very keen to learn various new technologies.</p>
							</div>
						</div>
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
									<li><a href="index.php">Domestic Services and Providers</a></li>
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
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>


<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login / Signup</title>
		<link rel="shortcut icon" href="images/title_icon.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/simple-line-icons.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/superfish.css">
		<link rel="stylesheet" href="css/flexslider.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<style>
			.containerr {
			    display: block;
			    position: relative;
			    padding-left: 35px;
			    margin-bottom: 12px;
			    cursor: pointer;
			    font-size: 22px;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			}
			.containerr input {
			    position: absolute;
			    opacity: 0;
			    cursor: pointer;
			    height: 0;
			    width: 0;
			}
			.checkmarkk {
			    position: absolute;
			    top: 0;
			    left: 0;
			    margin-top: 2px;
			    margin-left: 1px;
			    height: 22px;
			    width: 22px;
			    background-color: #eee;
			}
			.containerr:hover input ~ .checkmarkk {
			    background-color: #ccc;
			}
			.containerr input:checked ~ .checkmarkk {
			    background-color: #2196F3;
			}
			.checkmarkk:after {
			    content: "";
			    position: absolute;
			    display: none;
			}
			.containerr input:checked ~ .checkmarkk:after {
			    display: block;
			}
			.containerr .checkmarkk:after {
			    left: 9px;
			    top: 5px;
			    width: 5px;
			    height: 10px;
			    border: solid white;
			    border-width: 0 3px 3px 0;
			    -webkit-transform: rotate(45deg);
			    -ms-transform: rotate(45deg);
			    transform: rotate(45deg);
			}
		</style>
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
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a class="active">Login / Signup</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		
		<div id="fh5co-blog-section" style="background-image: url(images/lsbi.jpg);">
			<div class="header">
				<h2>Login</h2>
			</div>
			<form method="post" action="service.php">	
				<div class="input-group" style="margin-left: 80px;">
					<label>Username</label>
					<input type="text" name="username" autofocus="autofocus" required>
		 		</div>
		  		<div class="input-group" style="margin-left: 80px;">
		  			<label>Password</label>
	  				<input type="password" name="password" id="mypass" required>
		  		</div>
		  		<label class="containerr" style="width: 150px;margin-left: 80px; font-size: 15px;font-weight: normal;">
		  			Show Password
		  			<input type="checkbox" onclick="togglepass()">
		  			<span class="checkmarkk"></span>
		  		</label>
		  		
				<div class="input-group" style="margin-left: 80px;">
					<button type="submit" class="btn" name="login_user" style="width:150px;font-size: 16px;"><b>Login</b></button>
				</div>
				<p style="margin-left: 75px;">
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
		<footer id="footer">
			<div class="copyright text-center">
				<p>
					<small>&copy; 2018 <a href="index.php">Domestic Services and Providers</a>. All Rights Reserved. <br> Made with <i class="icon-heart3"></i> by KC252</a></small>
				</p>
			</div>
		</footer>
	

	</div>
	</div>
	<script>
		function togglepass() {
			var x = document.getElementById("mypass");
		    if (x.type === "password") {
		        x.type = "text";
		    } else {
		        x.type = "password";
		    }
		}
	</script>
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

